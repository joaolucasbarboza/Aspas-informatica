<?php
    include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/BLL/funcionario.php";
    $id = $_GET['id'];
    
    $bll = new \BLL\bllFuncionario();
    
    $funcionario = $bll->SelectID($id);
    
    echo $funcionario->getId();

?>

<body class="bg-black">
<?php 
    include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/VIEW/menu.php";
?>
<div class="flex flex-col justify-center items-center pt-14">

<div class="flex flex-col justify-center dark:bg-gray-800 items-center border-2 border-gray-900 rounded-[10px] p-4 bg-white">
    <div class="">
        <h1 class="text-[30px] text-white">Detalhes funcionario</h1>
    </div>
    <form 
        action="postEditar.php" 
        method="post" 
        class="flex flex-col gap-4">

        <div class="flex felx-col">
            <label class="text-white" for="id">ID: <?php echo $funcionario->getId(); ?></label>
            <input type="hidden" name="id" value=<?php echo $id?> >
        </div>

        <div class="flex flex-col">
            <label class="text-white">Nome: <?php echo $funcionario->getNome(); ?></label>
            <input 
                id="name" 
                name="editName" 
                type="hidden" 
                class="w-[300px] h-[40px] px-[9px] py-2 bg-white rounded-lg border border-slate-200" 
                value="<?php echo $funcionario->getNome(); ?>"
            >
        </div>

        <div class="flex flex-col">
            <label class="text-white">Data de nascimento: <?php echo $funcionario->getAniversario(); ?></label>
            <input 
                id="date" 
                name="editBirthday" 
                type="hidden" 
                class="w-[300px] h-[40px] px-[9px] py-2 bg-white rounded-lg border border-slate-200"
                value="<?php echo $funcionario->getAniversario(); ?>"
            >
        </div>

        <div class="flex flex-col">
            <label class="text-white">Salario: <?php echo $funcionario->getSalario(); ?></label>
            <input 
                id="number" 
                name="editWage" 
                type="hidden" 
                class="w-[300px] h-[40px] px-[9px] py-2 bg-white rounded-lg border border-slate-200"
                value="<?php echo $funcionario->getSalario(); ?>"
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
                    Excluir
                </button>
            </div>

            <div>
                <button 
                    type="button" 
                    class="p-2 w-[90px] rounded-[10px] bg-gray-900 text-white"
                    onclick="JavaScript:location.href='lista.php'">
                    Voltar
                </button>
            </div>
        </div>
    </form>
</div>

</div>
    
</body>