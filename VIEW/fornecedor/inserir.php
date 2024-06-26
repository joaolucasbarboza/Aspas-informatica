<body class="dark:bg-gray-900">
    <?php 
        include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/VIEW/menu.php";
    ?>
    <div class="flex flex-col justify-center items-center pt-16 ">
        
        <div class="flex flex-col justify-center dark:bg-gray-800 items-center border-2 border-gray-900 border- rounded-[10px] p-4 bg-white ">
            <div class="bg-gray-800">
                <h1 class="text-[30px] text-white">Inserir fornecedor</h1>
            </div>
            <form 
                action="postInserir.php" 
                method="post" 
                class="flex flex-col gap-4 bg-gray-800">
                <div class="flex flex-col">
                    <label class="text-white">Razão social</label>
                    <input 
                        id="razao_social"
                        name="razao_social" 
                        type="text" 
                        class="w-[300px] h-[40px] px-[9px] py-2 bg-white rounded-lg border border-slate-200">
                </div>

                <div class="flex flex-col">
                    <label class="text-white">CNPJ</label>
                    <input 
                        id="cnpj"
                        name="cnpj" 
                        type="text" 
                        class="w-[300px] h-[40px] px-[9px] py-2 bg-white rounded-lg border border-slate-200">
                </div>

                <div class="flex flex-col">
                    <label class="text-white">Email</label>
                    <input 
                        id="email"
                        name="email" 
                        type="email" 
                        class="w-[300px] h-[40px] px-[9px] py-2 bg-white rounded-lg border border-slate-200">
                </div>

                <div class="flex justify-center gap-4">
                    <div>
                        <button 
                            type="submit" 
                            class=" p-2 w-[80px] rounded-[10px] bg-green-500 text-white">
                            Salvar
                        </button>
                    </div>

                    <div>
                        <button 
                            type="reset" 
                            class=" p-2 w-[80px] rounded-[10px] bg-red-500 text-white">
                            Limpar
                        </button>
                    </div>

                    <button 
                        type="button" 
                        class="bg-gray-900 p-2 w-[90px] rounded-[10px] text-white"
                        onclick="JavaScript:location.href='lista.php'">
                        Voltar
                    </button>
                    <div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/VIEW/footer.php" ?>
</body>