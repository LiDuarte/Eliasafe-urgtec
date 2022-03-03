<?php

namespace App\Controllers;
use CodeIgniter\Controller;
class Urgtec extends BaseController
{
    public function index()
    {


        helper('form');
        $departamento = new \App\Models\DepartamentoModel();
        $data["titulo"] =  "Cadastros de Funcionários";
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
                    $nome = $this->request->getPost("nome");
                    $sexo = $this->request->getPost("sexo") === "ferminino" ? "a" : "o";
                    session()->set([
                        'alert' => "success",
                        'erros' =>   $funcionario->errors(),
                        'msg' => "Funcionari{$sexo} ${nome} adicionado com sucesso!"                      
                    ]);
                    return redirect()->to(base_url());
                else:
                    session()->set([
                        'msg'  => 'Preencha o formulário corretamente',
                        'alert' => "danger",
                        'erros' =>   $funcionario->errors()                        
                    ]);


                    


                endif;
            }

        echo  view('urgtec', $data);


            if(isset(session()->msg) or isset(session()->erros)):
                unset($_SESSION['msg']);
                unset($_SESSION['erros']);
            endif;
    }

        public function departamento(){
            $departamento = new \App\Models\DepartamentoModel();
            $data["departamento"] = $departamento->find();
            $data["titulo"] =  "Adicionar Departamento";
            $data["view"] = "cadastroDepartamento";


            if($this->request->getMethod() === "post"):
                $departamento = new \App\Models\DepartamentoModel();
                $departamento->set("nome_departamento", $this->request->getPost("nome_departamento"));
                  if($departamento->insert()):
                        $nome_departamento = $this->request->getPost("nome_departamento");
                            session()->set([
                                'alert' => "success",
                                'erros' =>   $departamento->errors(),
                                'msg' => "Novo Departamento de ${nome_departamento} adicionado com sucesso!"                      
                            ]);

                            return redirect()->to(base_url("departamento"));
                    else:
                            session()->set([
                                'msg'  => "Falha ao registrar ".strtoupper(__FUNCTION__),
                                'alert' => "danger",
                                'erros' =>   $departamento->errors()                        
                            ]);
                        
                    endif;
            endif;
            
              return view('urgtec', $data);

            if(isset(session()->msg) or isset(session()->erros)):
                unset($_SESSION['msg']);
                unset($_SESSION['erros']);
            endif;

        }

  
    }

