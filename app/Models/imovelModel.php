<?php

namespace App\Models;

use CodeIgniter\Model;

class imovelModel extends Model
{
    protected $table      = 'imovel';
    protected $primaryKey = 'ID_imovel';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['Usuario','Tipo','Aluguel_Venda','Preco', 'Area','NumeroQuartos','NumeroBanheiros','NumeroVagasGaragem','Imagens','ID_Endereco'];

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


    public function getimovel (){

        //$query = $this->db->query('select * from clientes;');

        $query = $this->db->table('imovel')->get();

        //$query = $this->db->table('clientes')->like('nome', 'A')->get();

        if($this->returnType == 'object'){
            return $query->getResult();
        }else{
            return $query->getResultArray();
        }

        return $query->getResult();

    }

    public function getimovelByUser ($usuario){

        $query = $this->db->table('imovel')->where('Usuario', $usuario)->get();


        if($this->returnType == 'object'){
            return $query->getResult();
        }else{
            return $query->getResultArray();
        }

        return $query->getResult();

    }

    public function getimovelByID ($id){

        $query = $this->db->table('imovel')->where('ID_imovel', $id)->get();


        if($this->returnType == 'object'){
            return $query->getResult();
        }else{
            return $query->getResultArray();
        }

        return $query->getResult();

    }

    public function getEnderecoImovel ($id){

        $query = $this->db->table('imovel')->select('ID_Endereco')->where('ID_imovel', $id)->get();


        if($this->returnType == 'object'){
            return $query->getResult();
        }else{
            return $query->getResultArray();
        }

        return $query->getResult();

    }

    


    public function deleteimovelByUser ($usuario){

        $this->db->table('imovel')->where('Usuario', $usuario)->delete();

    }



    public function getIdImovelBarraPesquisa($tipoImovel, $aluguel_venda,$idBarra)
    {

            // $builder = $this->db->table('imovel');

            // $query = $builder->select('*')->groupStart()->where('Tipo', $tipoImovel)->where('Aluguel_Venda', $aluguel_venda)->groupEnd()->get();

            $builder = $this->db->table('imovel');

            if ($tipoImovel == NULL && $idBarra == NULL) {
                $query = $builder->select('*')->where('Aluguel_Venda', $aluguel_venda)->get();
            } else {
                $query = $builder->select('*')
                    ->groupStart()
                        ->where('Tipo', $tipoImovel)
                        ->Where('Aluguel_Venda', $aluguel_venda)
                        ->Where('ID_endereco', $idBarra)
                    ->groupEnd()
                    ->get();
            }


            // if($tipoImovel == NULL ){
            //     $query = $builder->select('*')->where('Aluguel_Venda', $aluguel_venda)->get();
            //     // $query = $this->db->query("SELECT * FROM imovel WHERE Aluguel_Venda = '$aluguel_venda' AND ID_endereco = '$idBarra'");
            // }
            // else if ($idBarra == NULL){
            //     $query = $builder->select('*')->where('Aluguel_Venda', $aluguel_venda)->Where('Aluguel_Venda', $aluguel_venda)->get();
            //     // $query = $builder->select('*')->where('Tipo', $tipoImovel)->Where('Aluguel_Venda', $aluguel_venda)->get();
            //     // $query = $this->db->query("SELECT * FROM imovel WHERE Tipo = '$tipoImovel' AND Aluguel_Venda = '$aluguel_venda'");       
            // }

            
            // else if ($tipoImovel == NULL && $idBarra == NULL){
            //     $query = $builder->select('*')->groupStart()->Where('Aluguel_Venda', $aluguel_venda)->groupEnd()->get();
            //     // $query = $this->db->query("SELECT * FROM imovel WHERE Aluguel_Venda = '$aluguel_venda'");
            // }else{
            //     $query = $builder->select('*')->groupStart()->where('Tipo', $tipoImovel)->Where('Aluguel_Venda', $aluguel_venda)->Where('ID_endereco', $idBarra)->groupEnd()->get();


            // // }

            if ($query->getResult()) {
                if ($this->returnType == 'object') {
                    return $query->getResult();
                } else {
                    return $query->getResultArray();
                }
            } else {
                return null;  // ou outra indicação de nenhum resultado
            }

            return $query->getResult();
            
    }

    
}

    
    