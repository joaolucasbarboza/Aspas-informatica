<?php 

include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/BLL/funcionario.php";

$id = $_GET['id'];

$bll = new \BLL\bllFuncionario();
$bll->Delete($id);

header("location: lista.php");

?>