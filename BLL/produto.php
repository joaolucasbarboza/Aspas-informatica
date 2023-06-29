<?php
namespace BLL;

include_once '/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/DAL/produto.php';
include_once '/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/BLL/categoria.php';
include_once '/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/MODEL/categoria.php';
include_once '/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/MODEL/produto.php';


class bllProduto
{
    public function Select()
    {

        $dal = new \DAL\dalProduto();


        return $dal->Select();
    }

    public function SelectID(int $id)
    {
        $dal = new \DAL\dalProduto();

        return $dal->SelectID($id);
    }

    public function SelectNome(string $nome)
    {
        $dal = new \DAL\dalProduto(); 

        return $dal->SelectNome($nome);
    }

    public function Insert (\MODEL\Produto $produto){
        $bllCategoria = new \bll\bllCategoria(); 
        $categoria = new \MODEL\Categoria(); 
        $categoria = $bllCategoria->SelectID($categoria->getId()); 

        $novoValor = $categoria->getQuantidade() + 1; 
        $categoria->setQuantidade($novoValor);
        $bllCategoria->Update($categoria); 

        $dal = new \DAL\dalProduto(); 
        $dal->Insert($produto);  

        header("location: lista.php"); 
    }

    public function Update(\MODEL\Produto $produto)
    {
        $dal = new \DAL\dalProduto();

        $dal->Update($produto);
    }

    public function Delete(int $id)
    {
        $dal = new \DAL\dalProduto();

        $dal->Delete($id);
    }
}
