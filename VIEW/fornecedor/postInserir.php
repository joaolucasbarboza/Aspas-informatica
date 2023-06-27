<?php 

    include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/MODEL/fornecedor.php";
    include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/BLL/fornecedor.php";

    $fornecedor = new \MODEL\Fornecedor();
    
    $fornecedor->setRazaoSocial($_POST['razao_social']);
    $fornecedor->setCnpj($_POST['cnpj']);
    $fornecedor->setEmail($_POST['email']);
    

    $bll = new \BLL\bllFornecedor();
 
    $bll->Insert($fornecedor);

    header("location: lista.php")

?>