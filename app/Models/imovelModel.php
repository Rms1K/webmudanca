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
}