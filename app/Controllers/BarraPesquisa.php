<?php

namespace App\Controllers;

class BarraPesquisa extends BaseController
{
  
    public function dadosPesquisa()
    {

        $aluguel_venda = $this->request->getPost('aluguel_venda');
        $tipoImovel = $this->request->getPost('tipoImovel');

        $enderecoImovel = $this->request->getPost('enderecoImovel');

        $imovelModel = new \App\Models\ImovelModel();

        $enderecoModel = new \App\Models\enderecoModel();

        $enderecoBarraPesquisa = $enderecoModel->getIdEnderecoBarraPesquisa($enderecoImovel);
        
        $idEnderecoBarra = (string) $enderecoBarraPesquisa[0]['ID_imovel'];

        // $imovelPesquisa = $imovelModel->getIdImovelBarraPesquisa($tipoImovel,$aluguel_venda,$idEnderecoBarra);

        $imovelModel = new \App\Models\ImovelModel();
        
        // $user = $this->imovelModel->where('ID_Endereco', $enderecoId)->find();

        $imovelModel->where('Tipo', $tipoImovel);
        $imovelModel->where('Aluguel_Venda', $aluguel_venda);
        $imovelPesquisa = $imovelModel->findAll();

      

        $imovelsEncontrados = [];

        for($i = 0; $i < count($imovelPesquisa); $i++){
          for($j = 0; $j < count($enderecoBarraPesquisa); $j++){
                if($imovelPesquisa[$i]['ID_imovel'] == $enderecoBarraPesquisa[$j]['ID_imovel']){
                    $imovelsEncontrados[] = $imovelPesquisa[$i];
                    break;
                }
          }
        }

      
      $imoveis = $imovelModel->getimovel ();

     
      $session = session();
      
      $usuario = $session->get('usuario');

      $imoveisEncontrados = [  
        'imoveisEncontrados' => $imovelsEncontrados,
        'usuario' => $usuario,
        'imoveis' => $imoveis
        
      ];

     
      return view ('imoveisBuscados' , $imoveisEncontrados);
        
    }
}

