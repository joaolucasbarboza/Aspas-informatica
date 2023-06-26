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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Lista de funcionarios</title>


</head>

<body>

    <div class="w-[900px] flex flex-col m-auto mt-24 justify-center items-center rounded-lg">
        <div class="flex text-start gap-8">
            <h1 class="text-xl ">Lista de funcionarios</h1>
            <div class="flex justify-center items-center">
                <button class="uppercase">Adicionar funcionario</button>
                <span class="material-symbols-outlined">add</span>
            </div>
        </div>
        <table class="w-[900px]  text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nome
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aniversario
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Salário
                    </th>
                    <th></th>
                    <th></th>
                    <th></th>

                </tr>
            </thead>

            <tbody>

                <?php
                foreach ($lista_funcionario as $funcionario) {
                ?>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo $funcionario->getId(); ?>
                        </td>
                        <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo $funcionario->getNome(); ?>
                        </th>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo $funcionario->getAniversario(); ?>
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo "R$" . number_format($funcionario->getSalario(), 2, ",", "."); ?>
                        </td>
                        <td class="px-6 py-4  gap-8">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detalhes</a>
                        </td>
                        <td class="px-6 py-4  gap-8">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                        </td>
                        <td class="px-6 py-4  gap-8">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Remover</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>