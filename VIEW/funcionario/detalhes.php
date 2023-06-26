<?php
    include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/BLL/funcionario.php";
    $id = $_GET['id'];

    $bll = new \BLL\bllFuncionario();
    $funcionario = $bll->SelectID($id);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes funcionario</title>
</head>
<body>
    
</body>
</html>