<?php
echo __DIR__;
include_once '/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/BLL/funcionario.php';
$bll = new \bll\bllFuncionario();

$lista_funcionario = $bll->Select();
var_dump('oi');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Lista de funcionarios</title>


</head>

<body>

    <h1>Lista de funcionarios</h1>

    <div class="">
        <button>
            <a href="">Adicionar funcionario</a>
        </button>
    </div>
    <table class="table-fixed">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>ANIVERSARIO</th>
                <th>SALÁRIO</th>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($lista_funcionario as $funcionario) {
            ?>
                <tr>
                    <td><?php echo $funcionario->getId(); ?></td>
                    <td><?php echo $funcionario->getNome(); ?></td>
                    <td><?php echo $funcionario->getAniversario(); ?></td>
                    <td><?php echo "R$" . number_format($funcionario->getSalario(), 2, ",", "."); ?></td>
                    <td>
                        <a class="cursor-pointer" onclick="JavaScript:location.href='?id=' +
                            <?php echo $funcionario->getId(); ?>">
                            Editar
                        </a>
                    </td>
                    <td>
                        <a class="cursor-pointer" onclick="JavaScript:location.href='?id=' +
                            <?php echo $funcionario->getId(); ?>">
                            Detalhes
                        </a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>