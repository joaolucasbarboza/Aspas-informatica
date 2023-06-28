<?php

namespace BLL;

use DAL\dalFuncionario;

include_once '/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/DAL/funcionario.php';

class bllFuncionario
{
    public function Select()
    {

        $dal = new \DAL\dalFuncionario();


        return $dal->Select();
    }

    public function SelectID(int $id)
    {
        $dal = new \DAL\dalFuncionario();

        return $dal->SelectID($id);
    }

    public function SelectNome(string $nome){
        $dal = new dalFuncionario(); 
        return $dal->SelectNome($nome);
    }


    public function Insert(\MODEL\Funcionario $funcionario)
    {
        // echo "Nome: {$operador->getNome()} </br>"; 
        // echo "Aniversario: {$operador->getAniversario()} </br>"; 
        // echo "Salario: {$operador->getSalario()} </br>"; 

        $dal = new \DAL\dalFuncionario();


        $dal->Insert($funcionario);
        var_dump("inserir");
    }

    public function Update(\MODEL\Funcionario $funcionario)
    {
        // regras de negócios devem ser implementadas neste local.


        $dal = new \DAL\dalFuncionario();


        $dal->Update($funcionario);
    }

    public function Delete(int $id)
    {

        // regras de negócios devem ser implementadas neste local.

        $dal = new \DAL\dalFuncionario();

        $dal->Delete($id);
    }
}
