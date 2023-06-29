<?php 

    include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/BLL/usuario.php";
    include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/MODEL/usuario.php";

    $email= trim($_POST['email']);
    $senha = trim($_POST['password']);

    $bll = new \BLL\bllUsuario();

    $objUsuario = new \MODEL\Usuario();
    
    
    $objUsuario = $bll->SelectUser($email);

    if ($objUsuario != NULL) {
        if (md5($senha) == $objUsuario->getSenha()) {
            session_start();
            $_SESSION['login'] = $objUsuario->getEmail();
            Header("location: funcionario/lista.php");
        }
        else Header("location: index.php");
    }
    else Header("location: index.php");
?>