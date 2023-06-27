<?php

namespace BLL;

include_once '/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/DAL/fornecedor.php';

class bllFornecedor
{
    public function Select()
    {

        $dal = new \DAL\dalFornecedor();


        return $dal->Select();
    }

    public function SelectID(int $id)
    {
        $dal = new \DAL\dalFornecedor();

        return $dal->SelectID($id);
    }

    public function Insert(\MODEL\Fornecedor $fornecedor)
    {
        // echo "Nome: {$operador->getNome()} </br>"; 
        // echo "Aniversario: {$operador->getAniversario()} </br>"; 
        // echo "Salario: {$operador->getSalario()} </br>"; 

        $dal = new \DAL\dalFornecedor();


        $dal->Insert($fornecedor);
        var_dump("inserir");
    }

    public function Update(\MODEL\Fornecedor $fornecedor)
    {
        // regras de negócios devem ser implementadas neste local.


        $dal = new \DAL\dalFornecedor();


        $dal->Update($fornecedor);
    }

    public function Delete(int $id)
    {

        // regras de negócios devem ser implementadas neste local.

        $dal = new \DAL\dalFornecedor();

        $dal->Delete($id);
    }
}
