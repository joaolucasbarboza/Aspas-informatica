<?php 

    include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/BLL/usuario.php";
    include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/MODEL/usuario.php";

    $email= trim($_POST['email']);
    $senha = trim($_POST['password']);

    $bll = new \BLL\bllUsuario();

    $objUsuario = new \MODEL\Usuario();
    
    
    $objUsuario = $bll->SelectUser($email);

    if ($objUsuario != null) {
        if (md5($senha) == $objUsuario->getSenha()) {
            session_start();
            $_SESSION['login'] = $objUsuario->getEmail();
            Header("location: menu.php");
        }
        else Header("location: index.php");
    }
    else echo "usuario não encontrado";
?>