<?php 
    include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/MODEL/produto.php";
    include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/BLL/produto.php";
    include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/BLL/categoria.php";
    $produto = new \MODEL\Produto();
    
    $produto->setNome($_POST['name']);
    $produto->setPreco($_POST['price']);
    $produto->setDescricao($_POST['description']);
    $produto->setEstoque($_POST['stok']);

    $bllCategoria = new \BLL\bllCategoria();
    $categoria = $bllCategoria->SelectID($_POST['slcCategoria']);
    $produto->setCategoria($categoria);
    
    $bll = new \BLL\bllProduto();
    $bll->Insert($produto);

    header("location: lista.php")

?>