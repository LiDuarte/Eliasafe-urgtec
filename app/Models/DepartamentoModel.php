<?php

namespace App\Models;

use CodeIgniter\Model;

class DepartamentoModel extends Model{
    
    protected $table = "departamento";

    protected $primaryKey = "id_departamento ";
    protected $nome_departamento = "nome_departamento";
    protected $returnType = "object";
    protected $allowedFields  = ["nome_departamento"];
    protected $validationRules = [
        "nome_departamento" => "required|is_unique[departamento.nome_departamento]"
    ];

      protected $validationMessages = [
        "nome_departamento" => [
            'required' => "Digite o nome que departamento...",
            'is_unique' => "Este departamento já existe",
        ]
    ];

}
