<?php 
    include_once '/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/MODEL/funcionario.php';
    include_once '/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/BLL/funcionario.php';

    $funcionario = new \MODEL\Funcionario();

    $funcionario->setId($_POST['id']);
    $funcionario->setNome($_POST['editName']);
    $funcionario->setAniversario($_POST['editBirthday']);
    $funcionario->setSalario($_POST['editWage']);

    $bll = new \BLL\bllFuncionario();
    $bll->Update($funcionario);

    header("location: lista.php");

?>