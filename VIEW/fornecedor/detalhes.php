<?php
include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/BLL/fornecedor.php";
$id = $_GET['id'];

$bll = new \BLL\bllFornecedor();

$fornecedor = $bll->SelectID($id);
?>

<body class="dark:bg-gray-900">
    <?php
    include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/VIEW/menu.php";
    ?>
    <section class="mt-10 bg-white dark:bg-gray-900 mb-24 ">
        <div class="rounded-lg flex flex-col justify-center items-center py-8 px-4 mx-auto max-w-xl dark:bg-gray-800 lg:py-8">
            <h2 class="mb-2 text-xl font-semibold leading-none text-gray-900 md:text-2xl dark:text-white">Detalhes do fornecedor</h2>
            <p class="mb-4 text-xl font-extrabold leading-none text-gray-900 md:text-2xl dark:text-white"><?php echo $fornecedor->getId(); ?> - <?php echo $fornecedor->getRazaoSocial(); ?></p>
            <dl class="flex flex-col justify-center items-center">
                <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">CNPJ: </dt>
                <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400"><?php echo $fornecedor->getCnpj(); ?></dd>
            </dl>
            <dl class="flex flex-col justify-center items-center">
                <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Email: </dt>
                <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400"><?php echo $fornecedor->getEmail(); ?></dd>
            </dl>
            <div class="flex items-center space-x-4">
                <div>
                    <button href="#" class="p-2 w-[80px] rounded-[10px] bg-orange-500 text-white" onclick="JavaScript:location.href='editar.php?id=' + <?php echo $fornecedor->getId(); ?>">
                        Editar
                    </button>
                </div>

                <div>
                    <button type="reset" class="p-2 w-[80px] rounded-[10px] bg-red-500 text-white" onclick="JavaScript: remover(<?php echo $fornecedor->getId(); ?>);">
                        Excluir
                    </button>
                </div>

                <div>
                    <button type="button" class="p-2 w-[90px] rounded-[10px] bg-gray-900 text-white" onclick="JavaScript:location.href='lista.php'">
                        Voltar
                    </button>
                </div>
            </div>
        </div>
    </section>

    <?php include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/VIEW/footer.php" ?>

    <script>
        function remover(id) {
            if (confirm('Excluir o fornecedor ' + id + '?')) {
                location.href = 'deletar.php?id=' + id;
            }
        }
    </script>
</body>