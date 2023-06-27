<?php 
    include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/MODEL/funcionario.php";
    include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/BLL/funcionario.php";

    $funcionario = new \MODEL\Funcionario();
    
    $funcionario->setNome($_POST['name']);
    $funcionario->setAniversario($_POST['birthday']);
    $funcionario->setSalario($_POST['wage']);
    

    $bll = new \BLL\bllFuncionario();
    

    $bll->Insert($funcionario);
    var_dump($bll);
    var_dump($funcionario);

    // header("location: lista.php")

?>