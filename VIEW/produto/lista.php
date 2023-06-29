<?php
include_once '/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/BLL/produto.php';

if (isset($_GET['busca']))
    $busca = $_GET['busca'];
else $busca = null;

echo "Busca: " . $busca . "</br>";

$bll = new \bll\bllProduto();

if ($busca == null)
    $lista_produto = $bll->Select();
else $lista_produto = $bll->SelectNome($busca);

session_start();
if (!isset($_SESSION['login'])) {
    Header("location: index.php");
}
?>

<body class="dark:bg-gray-900">
    <?php include_once include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/VIEW/menu.php"; ?>
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="flex w-full md:w-full gap-4">
                        <h1 class="flex justify-center items-center text-white text-xl font-bold">Lista de produtos</h1>
                        <form action="../produto/lista.php" method="GET" class=" m-auto justify-center items-center">

                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" id="busca" name="busca" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Pesquisar" required="">
                            </div>
                        </form>
                    </div>
                    <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        <button type="button" class="flex items-center justify-center text-white bg-blue-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800" onclick="JavaScript:location.href='inserir.php'">
                            <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                            </svg>
                            Adicionar produto
                        </button>

                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">ID</th>
                                <th scope="col" class="px-4 py-3">Nome</th>
                                <th scope="col" class="px-4 py-3">Categoria</th>
                                <th scope="col" class="px-4 py-3">Especificação</th>
                                <th scope="col" class="px-4 py-3">Preço</th>
                                <th scope="col" class="px-4 py-3">Estoque</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($lista_produto as $produto) {
                            ?>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white"><?php echo $produto->getId(); ?></th>
                                    <td class="px-4 py-3"><?php echo $produto->getNome(); ?></td>
                                    <td class="px-4 py-3"><?php echo $produto->getCategoria(); ?></td>
                                    <td class="px-4 py-3 ">
                                        <p class="w-full w-[200px] truncate"><?php echo $produto->getDescricao(); ?></p>
                                    </td>
                                    <td class="px-4 py-3"><?php echo "R$" . number_format($produto->getPreco(), 2, ",", "."); ?></td>
                                    <td class="px-4 py-3"><?php echo $produto->getEstoque(); ?></td>
                                    <td class="px-6 py-4 gap-8">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" onclick="JavaScript:location.href='detalhes.php?id=' + <?php echo $produto->getId(); ?>">
                                            Detalhes
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 gap-8">
                                        <a href="#" class="font-medium text-orange-600 dark:text-blue-500 hover:underline" onclick="JavaScript:location.href='editar.php?id=' + <?php echo $produto->getId(); ?>">
                                            Editar
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 gap-8">
                                        <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline" onclick="JavaScript: remover(<?php echo $produto->getId(); ?>);">
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
            </div>
        </div>
    </section>
    </div>
    <?php include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/VIEW/footer.php" ?>
    <script>
        function remover(id) {
            if (confirm('Excluir o pruduto ' + id + '?')) {
                location.href = 'deletar.php?id=' + id;
            }
        }
    </script>

</body>