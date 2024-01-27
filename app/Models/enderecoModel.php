<?php

namespace App\Models;

use CodeIgniter\Model;

class enderecoModel extends Model
{
    protected $table      = 'endereco';
    protected $primaryKey = 'ID_Endereco';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['Rua','numImovel','Bairro',	'Cidade','Estado','CEP','ID_imovel'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


    public function getIdEndereco ($rua,$numImovel){


        $query = $this->db->table('endereco')->select('ID_Endereco')->where('Rua', $rua)->where('numImovel', $numImovel)->get();

        if($this->returnType == 'object'){
            return $query->getResult();
        }else{
            return $query->getResultArray();
        }

        return $query->getResult();

    }

    public function getEndereco (){

        $query = $this->db->table('endereco')->get();

        if($this->returnType == 'object'){
            return $query->getResult();
        }else{
            return $query->getResultArray();
        }

        return $query->getResult();

    }

    public function getEnderecos($rua,$numImovel){

        $query = $this->db->table('endereco')->where('Rua', $rua)->where('numImovel', $numImovel)->get();

        if($this->returnType == 'object'){
            return $query->getResult();
        }else{
            return $query->getResultArray();
        }

        return $query->getResult();

    }

    public function getIdImovelBarraPesquisa($aluguel_venda, $tipoImovel, $enderecoImovel)
        {
            $query = $this->db->table('imovel')
                ->join('endereco', 'imovel.ID_imovel = endereco.ID_imovel')
                ->select('imovel.ID_imovel')
                ->where('imovel.Aluguel_Venda', $aluguel_venda)
                ->where('imovel.Tipo', $tipoImovel)
                ->where(function ($query) use ($enderecoImovel) {
                    $query->where('endereco.Cidade', 'LIKE', '%' . $enderecoImovel . '%')
                        ->orWhere('endereco.Rua', 'LIKE', '%' . $enderecoImovel . '%')
                        ->orWhere('endereco.Bairro', 'LIKE', '%' . $enderecoImovel . '%');
                })
                ->get();

                // if ($query->getResult()) {
                //     if ($this->returnType == 'object') {
                //         return $query->getResult();
                //     } else {
                //         return $query->getResultArray();
                //     }
                // } else {
                //     return null;  // ou outra indicação de nenhum resultado
                // }

                return $query->getResult();
                
        }

}