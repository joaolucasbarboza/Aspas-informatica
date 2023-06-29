<?php
namespace BLL; 
include_once '/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/DAL/categoria.php'; 

class bllCategoria {

    public function Select (){
        $dal = new \DAL\dalCategoria(); 
        return $dal->Select();
    }
    
    public function SelectID(int $id){
        $dal= new \DAL\dalCategoria(); 
        return $dal->SelectID($id);
    }

    public function Update (\MODEL\Categoria $categoria){
        $dal = new \DAL\dalCategoria(); 
        $dal->Update($categoria);   
    }
}

?>