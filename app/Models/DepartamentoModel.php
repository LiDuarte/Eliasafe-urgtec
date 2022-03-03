<?php

namespace App\Models;

use CodeIgniter\Model;

class DepartamentoModel extends Model{
    
    protected $table = "departamento";

    protected $primaryKey = "id_departamento ";
    protected $nome_departamento = "nome_departamento";
    protected $returnType = "object";
    protected $allowedFields  = ["nome_departamento"];

}
