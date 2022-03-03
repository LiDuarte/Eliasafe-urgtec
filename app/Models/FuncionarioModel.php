<?php

namespace App\Models;

use CodeIgniter\Model;

class FuncionarioModel extends Model{
    
    protected $table = "funcionario";

    protected $primaryKey = "id_funcionario ";
    protected $nome = "nome";
    protected $email = "email";
    protected $sexo = "sexo";
    protected $data_nascimento = "data_nascimento";
    protected $departamento = "departamento";
    protected $status = "status";
    protected $returnType = "object";
    protected $allowedFields  = ["nome","email","sexo","data_nascimento","departamento","status"];

}
