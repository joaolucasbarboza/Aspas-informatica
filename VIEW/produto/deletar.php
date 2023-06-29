<?php 

include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/BLL/produto.php";

$id = $_GET['id'];

$bll = new \BLL\bllProduto();
$bll->Delete($id);

header("location: lista.php");

?>