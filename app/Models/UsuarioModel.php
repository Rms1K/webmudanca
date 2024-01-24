<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table      = 'usuario';
    protected $primaryKey = 'ID_Usuario';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nomecompleto','usuario','email','senha','telefone','dataNascimento','genero'];

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


    public function getUsuarios ($usuario){

        $query = $this->db->table('usuario')->where('usuario', $usuario)->get();

        if($this->returnType == 'object'){
            return $query->getResult();
        }else{
            return $query->getResultArray();
        }

        return $query->getResult();

    }

    public function getUsuario ($email){

        $query = $this->db->table('usuario')->where('email', $email)->get();

        if($this->returnType == 'object'){
            return $query->getResult();
        }else{
            return $query->getResultArray();
        }

        return $query->getResult();

    }

    // public function VerificaUsuario ($usuario){

    //     if($this->db->table('usuario')->select('usuario')->where('usuario', $usuario)->get())
    //         return true;

    // } 

    // public function VerificaEmail ($email){

    //     if($this->db->table('usuario')->select('email')->where('email', $email)->get())
    //         return true;
    // } 

    public function getEmail ($email){

        $query = $this->db->table('usuario')->select('email')->where('email', $email)->get();

        if($this->returnType == 'object'){
            return $query->getResult();
        }else{
            return $query->getResultArray();
        }

        return $query->getResult();

    }

    public function getIdUsuario ($usuario){

        $query = $this->db->table('usuario')->select('ID_Usuario')->where('usuario', $usuario)->get();

        if($this->returnType == 'object'){
            return $query->getResult();
        }else{
            return $query->getResultArray();
        }

        return $query->getResult();

    }

    public function getSenha ($usuario){

        $query = $this->db->table('usuario')->select('senha')->where('usuario', $usuario)->get();

        if($this->returnType == 'object'){
            return $query->getResult();
        }else{
            return $query->getResultArray();
        }

        return $query->getResult();

    }

    public function AuthLogin($usuario, $senha) {
        
        $query = $this->db->table('usuario')
                         ->where('usuario', $usuario)
                         ->where('senha', $senha)
                         ->get();
    
        if ($this->returnType == 'object') {
            return $query->getResult();
        } else {
            return $query->getResultArray();
        }

        return $query->getResult();
    }
    
}