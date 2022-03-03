<?php

namespace App\Controllers;

class Urgtec extends BaseController
{
    public function index()
    {
        $departamento = new \App\Models\DepartamentoModel();
        $data["titulo"] =  "Cadastros de Funcionários";
        $data["msg"] = "";
        $data["departamento"] = $departamento->find();
        $data["view"] = "cadastroFuncionario";



           if($this->request->getMethod() === "post"){

                $funcionario = new \App\Models\FuncionarioModel();
                $funcionario->set("nome", $this->request->getPost("nome"));
                $funcionario->set("email", $this->request->getPost("email"));
                $funcionario->set("data_nascimento", $this->request->getPost("data_nascimento"));
                $funcionario->set("sexo", $this->request->getPost("sexo"));
                $funcionario->set("departamento", $this->request->getPost("departamento"));
                $funcionario->set("status", $this->request->getPost("status"));
                if($funcionario->insert()):
                    $data["msg"] = "Funcionário Cadastrado com sucesso!";
                else:
                    $data["msg"] = "Falha ao registrar funcionário";
                endif;
            }




        return view('urgtec', $data);
    }

        public function departamento(){
            $departamento = new \App\Models\DepartamentoModel();
            $data["departamento"] = $departamento->find();
            $data["titulo"] =  "Adicionar Departamento";
            $data["msg"] = "";
            $data["view"] = "cadastroDepartamento";


            if($this->request->getMethod() === "post"):
                $departamento = new \App\Models\DepartamentoModel();
                $departamento->set("nome_departamento", $this->request->getPost("nome_departamento"));
                  if($departamento->insert()):
                        $data["msg"] = strtoupper(__FUNCTION__)." Cadastrado com sucesso!";
                    else:
                        $data["msg"] = "Falha ao registrar ".strtoupper(__FUNCTION__);
                    endif;
            endif;

              return view('urgtec', $data);

        }

  
    }

