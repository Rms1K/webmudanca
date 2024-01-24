<?php

namespace App\Models;

use CodeIgniter\Model;

class enderecoModel extends Model
{
    protected $table      = 'avaliacao';
    protected $primaryKey = 'ID_avaliacao';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['avaliacao','ID_Usuario','ID_imovel'];

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


    // public function getIdEndereco ($rua,$numImovel){


    //     $query = $this->db->table('endereco')->select('ID_Endereco')->where('Rua', $rua)->where('numImovel', $numImovel)->get();

    //     if($this->returnType == 'object'){
    //         return $query->getResult();
    //     }else{
    //         return $query->getResultArray();
    //     }

    //     return $query->getResult();

    // }

    // public function getEndereco (){

    //     $query = $this->db->table('endereco')->get();

    //     if($this->returnType == 'object'){
    //         return $query->getResult();
    //     }else{
    //         return $query->getResultArray();
    //     }

    //     return $query->getResult();

    // }

    // public function getEnderecos($rua,$numImovel){

    //     $query = $this->db->table('endereco')->where('Rua', $rua)->where('numImovel', $numImovel)->get();

    //     if($this->returnType == 'object'){
    //         return $query->getResult();
    //     }else{
    //         return $query->getResultArray();
    //     }

    //     return $query->getResult();

    // }
}