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
<div class="flex flex-col justify-center items-center pt-14">

<div class="flex flex-col justify-center dark:bg-gray-800 items-center border-2 border-gray-900 rounded-[10px] p-4 bg-white">
    <div class="">
        <h1 class="text-[30px] text-white">Editar fornecedor</h1>
    </div>
    <form 
        action="postEditar.php" 
        method="post" 
        class="flex flex-col gap-4">

        <div class="flex felx-col">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="id">ID: <?php echo $fornecedor->getId(); ?></label>
            <input type="hidden" name="id" value=<?php echo $id?> >
        </div>

        <div class="flex flex-col">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Razão Social</label>
            <input 
                id="razao_social" 
                name="razao_social" 
                type="text" 
                class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-pointer dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                value="<?php echo $fornecedor->getRazaoSocial(); ?>"
            >
        </div>

        <div class="flex flex-col">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CNPJ</label>
            <input 
                id="cnpj" 
                name="cnpj" 
                type="text" 
                class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-pointer dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="<?php echo $fornecedor->getCnpj(); ?>"
            >
        </div>

        <div class="flex flex-col">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input 
                id="email" 
                name="email" 
                type="text" 
                class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-pointer dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="<?php echo $fornecedor->getEmail(); ?>"
            >
        </div>

        <div class="flex justify-center gap-4">
            <div>
                <button 
                    type="submit" 
                    class="p-2 w-[80px] rounded-[10px] bg-green-500 text-white">
                    Salvar
                </button>
            </div>

            <div>
                <button 
                    type="reset" 
                    class="p-2 w-[80px] rounded-[10px] bg-red-500 text-white">
                    Limpar
                </button>
            </div>

            <div>
                <button 
                    type="button" 
                    class="p-2 w-[90px] rounded-[10px] text-white bg-gray-900"
                    onclick="JavaScript:location.href='lista.php'">
                    Voltar
                </button>
            </div>
        </div>
    </form>
</div>

</div>
<?php include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/VIEW/footer.php" ?>
</body>