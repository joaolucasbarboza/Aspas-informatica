<?php

namespace BLL;

use DAL\dalCliente;

include_once '/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/DAL/cliente.php';

class bllCliente
{
    public function Select()
    {
        $dal = new \DAL\dalCliente();
        
        
        return $dal->Select();
        var_dump("bll");
    }

    public function SelectID(int $id)
    {
        $dal = new \DAL\dalCliente();

        return $dal->SelectID($id);
    }

    public function SelectNome(string $nome){
        $dal = new dalCliente(); 
        return $dal->SelectNome($nome);
    }

    public function Insert(\MODEL\Cliente $cliente)
    {
        $dal = new \DAL\dalCliente();
        
        $dal->Insert($cliente);
        
    }

    public function Update(\MODEL\Cliente $cliente)
    {
        // regras de negócios devem ser implementadas neste local.

        $dal = new \DAL\dalCliente();

        $dal->Update($cliente);
    }

    public function Delete(int $id)
    {

        // regras de negócios devem ser implementadas neste local.

        $dal = new \DAL\dalCliente();

        $dal->Delete($id);
    }
}
