<?php
include_once '/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/BLL/funcionario.php';
include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/VIEW/menu.php";
$bll = new \bll\bllFuncionario();

$lista_funcionario = $bll->Select();

?>
<title>Lista de funcionario</title>

<body class="bg-black">

    <div class="w-[900px] flex flex-col m-auto mt-8 justify-center items-center rounded-lg">
        <div class="flex justify-between items-center text-start gap-8 m-10 w-full ">
            <h1 class="text-white text-xl font-bold">Lista de funcionarios</h1>
            <div class="flex justify-center items-center gap-2 bg-green-500 py-2 px-4 rounded-lg text-[14px] cursor-pointer">
                <button onclick="JavaScript:location.href='inserir.php'" class="uppercase text-white">Adicionar funcionario</button>
                <span class="material-symbols-outlined text-white">add</span>
            </div>
        </div>
        <table class="w-[900px] text-sm text-left text-gray-500 dark:text-gray-400">
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
                        <td class="px-6 py-4 gap-8">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" onclick="JavaScript:location.href='detalhes.php?id=' + <?php echo $funcionario->getId(); ?>">
                                Detalhes</a>
                        </td>
                        <td class="px-6 py-4 gap-8">
                            <a href="#" class="font-medium text-orange-600 dark:text-blue-500 hover:underline" onclick="JavaScript:location.href='editar.php?id=' + <?php echo $funcionario->getId(); ?>">
                                Editar
                            </a>
                        </td>
                        <td class="px-6 py-4 gap-8">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" onclick="JavaScript: remover(<?php echo $funcionario->getId(); ?>);">
                                Remover
                            </a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <script>
        function remover(id) {
            if (confirm('Excluir o Operador ' + id + '?')) {
                location.href = 'deletar.php?id=' + id;
            }
        }
    </script>

</body>

</html>