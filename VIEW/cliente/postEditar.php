<?php 
    include_once '/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/MODEL/cliente.php';
    include_once '/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/BLL/cliente.php';

    $cliente = new \MODEL\Cliente();

    $cliente->setId($_POST['id']);
    $cliente->setNome($_POST['name']);
    $cliente->setAniversario($_POST['birthday']);
    $cliente->setCpf($_POST['cpf']);
    $cliente->setTelefone($_POST['telephone']);

    $bll = new \BLL\bllCliente();
    $bll->Update($cliente);

    header("location: lista.php");

?>