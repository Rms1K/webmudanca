<?php

namespace App\Controllers;

class EditarDados extends BaseController
{
  
    public function editarMeusDados()
    {
        $session = session();

        $usuario = $session->get('usuario');

        $msgEditardados = $session->getFlashdata('msgEditardados');
        if ($usuario == NULL){
             return redirect()->to(base_url('login'));
        }

        $usuarioModel = new \App\Models\UsuarioModel();

        $usuarios = $usuarioModel->getUsuarios($usuario);
        

        $imovelModel = new \App\Models\ImovelModel();
        $imovel = $imovelModel->getimovelByUser($usuario);
        
        $dadosView = [
            'usuario' => $usuarios,
            'imovel' => $imovel,
            'msgEditardados' =>$msgEditardados
        ];

        return view ('editarMeusDados', $dadosView);
    }

    public function dadosparaEditar()
    {
 
        $id = $this->request->getPost('ID_Usuario');
        $nome = $this->request->getPost('nomecompleto');
        $usuario = $this->request->getPost('usuario');
        $email = $this->request->getPost('email');
        $senha = $this->request->getPost('senha');
        $dataNasc = $this->request->getPost('data_nascimento');
        $genero = $this->request->getPost('genero');

       //Alterando os dados
        $usuarioModel = new \App\Models\UsuarioModel();

        $usuarioModel->set('nomecompleto', $nome);
        $usuarioModel->set('usuario', $usuario);
        $usuarioModel->set('email', $email);
        $usuarioModel->set('senha', $senha);
        $usuarioModel->set('dataNascimento', $dataNasc);
        $usuarioModel->set('genero', $genero);
        $usuarioModel->where('ID_Usuario', $id);
        $usuarioModel->update();



        //Alterando os dados da sessão depois de atualizar
        $session = session();
        $dadosSessao = [
            'usuario' => $usuario
        ];

        $session->set($dadosSessao);

        $session->setFlashdata('msgEditardados', 'Alteração feita com sucesso!');
        
        return redirect()->to(base_url('editarmeusdados'));
        
          

    }

    public function viewNovaSenha (){
        
        $session = session();

        $msgConfirmacao = $session->getFlashdata('msgConfirmacao');
        
        $dadosView = [
            'msgConfirmacao' => $msgConfirmacao
        ];


        return view('novaSenha',$dadosView);
    }

    public function senhaEditar (){

        $senhanova = $this->request->getPost('senha');
        $emailConfirmacao = $this->request->getPost('emailConfirmacao');

        $usuarioModel = new \App\Models\UsuarioModel();

        $usuarioModel->set('senha', $senhanova);
        $usuarioModel->where('email', $emailConfirmacao);
        $usuarioModel->update();

        $session = session();
            
        $session->setFlashdata('msgConfirmacao', 'Senha alterada com sucesso! Faça o login.');

        return redirect()->to(base_url('editarsenha'));
       
    }

    

    public function enviarEmail (){

        $emailUsuario = $this->request->getPost('email');

        $usuarioModel = new \App\Models\UsuarioModel();

        $usuario = $usuarioModel->getUsuario($emailUsuario);
        
        $verificaEmail = $usuarioModel->getEmail($emailUsuario);

        $dadosView = [
            'usuario' =>$usuario
        ];

        if($verificaEmail){

            $email = \Config\Services::email();

            $email->setFrom('mailer.codeigniter@gmail.com', 'Web Mudança'); //Quem está enviando
            $email->setTo($emailUsuario); // Pra quem vai ser enviado
            $email->setCC('suportewebmudanca@gmail.com'); // Quem vai receber uma cópia deste email
            $email->setBCC('mailer.codeigniter@gmail.com'); // Quem vai receber uma cópia oculta deste email
            $email->setSubject('Recuperação de Senha'); // Assunto do e-mail

            $message = view('viewEmail', $dadosView);

            $email->setMessage($message); //Conteúdo do e-mail
            $email->send(); // Enviando o email
            // return $email->printDebugger(['headers']); // Para mostrar caso tenha algum erro


            $session = session();
            $session->setFlashdata('msgEmailEnviado', 'Email enviado! Favor verificar a sua caixa de entrada.');

            return redirect()->to(base_url('recuperacaosenha'));
        }else{
            $session = session();
            
            $session->setFlashdata('msgEmailErro', 'Erro! Não existe conta com esse email em nosso sistema.');

            return redirect()->to(base_url('recuperacaosenha'));
        }
    
    }

    public function excluirConta (){
        
        $Usuario = $this->request->getPost('Usuario');
        $ID_Endereco = $this->request->getPost('ID_Endereco');
        $ID_Proprietario = $this->request->getPost('ID_Proprietario');
        

        $imovelModel = new \App\Models\ImovelModel();
        $imovelModel->deleteimovelByUser($Usuario);
       
       


        $enderecoModel = new \App\Models\enderecoModel();
        
        $enderecoModel->where('ID_Endereco',  $ID_Endereco);
        $enderecoModel->delete();

        
        $proprietarioModel = new \App\Models\proprietarioModel();

        $proprietarioModel->where('ID_Proprietario',  $ID_Proprietario);
        $proprietarioModel->delete();


        $usuarioModel = new \App\Models\UsuarioModel();


        $usuarioModel->where('Usuario',  $Usuario);
        $usuarioModel->delete();


        $session = session();

        $session->remove('usuario');

        return redirect()->to(base_url('/'));
            
    }

}

