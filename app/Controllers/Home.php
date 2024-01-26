<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

        $imovelModel = new \App\Models\ImovelModel();
        $imoveis = $imovelModel->getimovel ();

       
        $session = session();
        
        $usuario = $session->get('usuario');

        
        $dadosImoveis = [
            'imoveis' => $imoveis,
            'usuario' => $usuario
        ];

        return view ('index', $dadosImoveis);
    }


    public function cadastroUsuario()
    {
        
        return view ('cadastrousuario');
    }
  
    public function recuperacaoSenha()
    {
        $session = session();

        $msgEmailErro = $session->getFlashdata('msgEmailErro');
        $msgEmailEnviado = $session->getFlashdata('msgEmailEnviado');
        
        $dadosView = [
            'msgEmailErro' => $msgEmailErro,
            'msgEmailEnviado' => $msgEmailEnviado
        ];

        return view ('recuperacaosenha', $dadosView);
    }

       

    public function imovel($id)
    {

        $imovelModel = new \App\Models\ImovelModel();
        $imovel = $imovelModel->getimovelByID($id);

        $dadosImovel = [
            'imovel' => $imovel
        ];


        
        return view ('viewImovel', $dadosImovel);
    }

    public function Sobre()
    {


        
        return view ('viewSobre');
    }
    

}

