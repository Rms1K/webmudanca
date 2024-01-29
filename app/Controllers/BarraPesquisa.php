<?php

namespace App\Controllers;

class BarraPesquisa extends BaseController
{
    public function dadosPesquisa()
    {
        $aluguel_venda = $this->request->getPost('aluguel_venda');
        $tipoImovel = $this->request->getPost('tipoImovel');
        $enderecoImovel = $this->request->getPost('enderecoImovel');

        $dadosPesquisa = [
          'aluguel_venda' => $aluguel_venda,
          'tipoImovel' => $tipoImovel,
          'enderecoImovel' => $enderecoImovel
        ];

        $enderecoModel = new \App\Models\imovelModel();
        
        $imovelPesquisa = $enderecoModel->getIdImovelBarraPesquisa($aluguel_venda,$tipoImovel,$enderecoImovel);



        d($imovelPesquisa);
       
    }



}

