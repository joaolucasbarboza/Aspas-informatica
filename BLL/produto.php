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
        
        $novoValor = $produto->getCategoria()->getQuantidade() + 1;
        $produto->getCategoria()->setQuantidade($novoValor);
        $bllCategoria->Update($produto->getCategoria()); 
        
        $dal = new \DAL\dalProduto(); 
        $dal->Insert($produto);  
        var_dump('teste');

        header("location: lista.php"); 
    }

    public function Update(\MODEL\Produto $produto, \MODEL\Categoria $oldCategory)
    {
        $bllCategoria = new \BLL\bllCategoria();
        $novoValor = $oldCategory->getQuantidade() - 1;
        $oldCategory->setQuantidade($novoValor);
        $bllCategoria->Update($oldCategory); 
        
        $dal = new \DAL\dalProduto();
        $newProduto = $dal->Update($produto);
        $bllCategoria2 = new \BLL\bllCategoria();

        if ($newProduto->getCategoria()->getId() != $oldCategory->getId()) {
            $novoValor = $newProduto->getCategoria()->getQuantidade() + 1;
            $newProduto->getCategoria()->setQuantidade($novoValor);
        }

        $bllCategoria2->Update($newProduto->getCategoria());
    }

    public function Delete(int $id)
    {
        $produto = $this->SelectId($id);
        $bllCategoria = new \bll\bllCategoria();  
       
        var_dump('teste');
        $novoValor = $produto->getCategoria()->getQuantidade() - 1;
        if ($novoValor < 0) {
            $novoValor = 0;
        }
        $produto->getCategoria()->setQuantidade($novoValor);
        $bllCategoria->Update($produto->getCategoria()); 
        
        $dal = new \DAL\dalProduto();

        $dal->Delete($id);
    }
}
