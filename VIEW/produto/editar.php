<?php
include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/BLL/produto.php";
include_once '/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/BLL/categoria.php';

$id = $_GET['id'];

$bll = new \BLL\bllProduto();

$produto = $bll->SelectID($id);

?>

<body class="dark:bg-gray-900">
    <?php
    include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/VIEW/menu.php";
    ?>
    <div class="flex flex-col justify-center items-center pt-4">

        <div class="flex flex-col w-[400px] justify-center dark:bg-gray-800 items-center border-2 border-gray-900 rounded-[10px] p-4 bg-white">

            <form action="postEditar.php" method="post" class="flex flex-col gap-4 w-[350px]">

                <h1 class="text-[30px] text-white">Editar produto</h1>

                <div class="flex felx-col">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="id">ID: <?php echo $produto->getId(); ?></label>
                    <input type="hidden" name="id" value=<?php echo $id ?>>
                </div>

                <div class="flex flex-col">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                    <input id="name" name="name" type="text" class="mb-6 bg-gray-100  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-pointer dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo $produto->getNome(); ?>">
                </div>

                <div class="flex flex-col">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Preço</label>
                    <input id="price" name="price" type="text" class="mb-6 bg-gray-100  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-pointer dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo $produto->getPreco(); ?>">
                </div>

                <div class="flex flex-col">
                    <input id="category" name="oldCategory" type="hidden" value="<?php echo $produto->getCategoria()->getId(); ?>">
                </div>
                
                <div class="flex flex-col">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Especificação</label>
                    <textarea id="description" name="description" class=" resize-none mb-6 bg-gray-100 h-[120px] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-pointer dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <?php echo $produto->getDescricao(); ?>
                    </textarea>
                </div>

                <div class="flex flex-col">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estoque</label>
                    <input id="category" name="stok" type="text" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 cursor-pointer dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo $produto->getEstoque(); ?>">
                </div>

                <div class="flex flex-col">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categoria</label>
                    <select id="categoria" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="" disabled>Escolha uma categoria</option>
                        <?php
                            $bll = new \bll\bllCategoria();
                            $lista_categoria = $bll->Select();
                        ?>
                        <?php
                            foreach ($lista_categoria as $categoria) {
                        ?>
                            <option value="<?php echo $categoria->getId(); ?>"><?php echo $categoria->getNome();?></option>
                        <?php

                        }
                        ?>
                    </select>
                </div>

                <div class="flex justify-center gap-4">
                    <div>
                        <button type="submit" class="p-2 w-[80px] rounded-[10px] bg-green-500 text-white">
                            Salvar
                        </button>
                    </div>

                    <div>
                        <button type="reset" class="p-2 w-[80px] rounded-[10px] bg-red-500 text-white">
                            Limpar
                        </button>
                    </div>

                    <div>
                        <button type="button" class="p-2 w-[90px] rounded-[10px] text-white bg-gray-900" onclick="JavaScript:location.href='lista.php'">
                            Voltar
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <?php include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/VIEW/footer.php" ?>
</body>