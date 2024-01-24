<?php

namespace App\Controllers;

class AuthController extends BaseController
{
    
    
    public function login()
    {
        $session = session();

        $msgErro = $session->getFlashdata('msgErro');
        $msgEditardados = $session->getFlashdata('msgEditardados');
        
        $usuario = $session->get('usuario');

        if($usuario != NULL){
            return redirect()->to(base_url('painelusuario'));
        }

        $dadosView = [
            'msgErro' => $msgErro,
            'msgEditardados' =>$msgEditardados
        ];

        return view('viewLogin', $dadosView);

       
    }

    public function dadosLogin()
    {

        $session = session();
        $usuario = $this->request->getPost('usuario');
        $senha = $this->request->getPost('senha');

        $usuarioModel = new \App\Models\UsuarioModel();


        $senhaCriptografadaDoBanco = $usuarioModel->getSenha($usuario);



        if (password_verify($senha, $senhaCriptografadaDoBanco[0]['senha'])) {
            
            $dadosSessao = [
                'usuario' => $usuario
            ];

            $session->set($dadosSessao);

            return redirect()->to(base_url('painelusuario'));

        } else {
             $session->setFlashdata('msgErro', 'Usuário ou senha inválidos!');
            return redirect()->to(base_url('login'));
        }


    }
  
    public function logout()
    {

        $session = session();
        $session->destroy(); 
        $session->remove('usuario');

        return redirect()->to(base_url('/'));
    }

}

