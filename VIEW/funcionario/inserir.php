<body class="dark:bg-gray-900">
    <?php 
        include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/VIEW/menu.php";
    ?>
    <div class="flex flex-col justify-center items-center pt-16 ">
        
        <div class="flex flex-col justify-center dark:bg-gray-800 items-center border-2 border-gray-900 border- rounded-[10px] p-4 bg-white ">
                <form 
                action="postInserir.php" 
                method="post" 
                class="flex flex-col gap-4 bg-gray-800">
                <h1 class="text-[30px] text-white">Inserir funcionario</h1>
                <div class="flex flex-col">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                    <input 
                        id="name" 
                        name="name" 
                        type="text" 
                        class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-pointer dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <div class="flex flex-col">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data de nascimento</label>
                    <input 
                        id="date" 
                        name="birthday" 
                        type="date" 
                        class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-pointer dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <div class="flex flex-col">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Salario</label>
                    <input 
                        id="number" 
                        name="wage" 
                        type="number" 
                        class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-pointer dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
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