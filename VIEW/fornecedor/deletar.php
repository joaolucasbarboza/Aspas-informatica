<?php 

include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/BLL/fornecedor.php";

$id = $_GET['id'];

$bll = new \BLL\bllFornecedor();
$bll->Delete($id);

header("location: lista.php");

?>