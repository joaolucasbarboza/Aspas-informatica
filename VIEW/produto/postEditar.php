<?php 
    include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/MODEL/produto.php";
    include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/BLL/produto.php";
    include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/BLL/categoria.php";

    $bllCategoria = new \BLL\bllCategoria();
    $oldCategoria = $bllCategoria->SelectID($_POST['oldCategory']);



    $produto= new \MODEL\Produto();

    $produto->setId($_POST['id']);
    $produto->setNome($_POST['name']);

    $bllCategoria = new \BLL\bllCategoria();
    $categoria = $bllCategoria->SelectID($_POST['category']);

    $produto->setCategoria($categoria);
    $produto->setDescricao($_POST['description']);
    $produto->setPreco($_POST['price']);
    $produto->setEstoque($_POST['stok']);
    
    $bll = new \BLL\bllProduto();
    $bll->Update($produto, $oldCategoria);

    header("location: lista.php");

?>