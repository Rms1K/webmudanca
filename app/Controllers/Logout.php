<?php

namespace App\Controllers;
class Cadastros extends BaseController
{
    public function sair()
    {

        $session = session();
        $session->destroy();

        
        return redirect()->to(base_url());
    }

}