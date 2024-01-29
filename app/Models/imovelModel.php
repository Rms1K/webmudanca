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

    public function getIdImovelBarraPesquisa($aluguel_venda, $tipoImovel, $enderecoImovel)
    {
        $builder = $this->db->table('imovel');
        
        // Adicione cláusulas WHERE conforme necessário com base nos parâmetros fornecidos
        if ($aluguel_venda) {
            $builder->where('Aluguel_Venda', $aluguel_venda);
        }

        if ($tipoImovel) {
            $builder->where('Tipo', $tipoImovel);
        }

        if ($enderecoImovel) {
            // Adicione cláusulas para buscar pelo endereço, dependendo da sua estrutura de banco de dados
            // Exemplo: $builder->where('endereco_column', $enderecoImovel);
        }

        // Execute a consulta e retorne os resultados
        $query = $builder->get();

        if ($this->returnType == 'object') {
            return $query->getResult();
        } else {
            return $query->getResultArray();
        }
    }
}