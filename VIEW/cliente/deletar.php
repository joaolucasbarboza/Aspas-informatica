<?php 
    include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/BLL/cliente.php";

    $id = $_GET['id'];

    $bll = new \BLL\bllCliente();
    $bll->Delete($id);

    header("location: lista.php");

?>