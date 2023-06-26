<?php 
    namespace BLL;

    include_once '/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/DAL/funcionario.php';

    class bllFuncionario {
        public function Select()
        {
            
            $dal = new \DAL\dalFuncionario();
            

            return $dal->Select();
            var_dump('oi');
        }

        public function SelectID (int $id) 
        {
            $dal = new \DAL\dalFuncionario();

            return $dal->SelectID($id);
        }

        public function Insert (\MODEL\Funcionario $funcionario) 
        {
            var_dump("teste4");
            // echo "Nome: {$operador->getNome()} </br>"; 
            // echo "Aniversario: {$operador->getAniversario()} </br>"; 
            // echo "Salario: {$operador->getSalario()} </br>"; 
            $dal = new \DAL\dalFuncionario();

            $dal->Insert($funcionario);
        }

        public function Update (\MODEL\Funcionario $funcionario)
        {
            // regras de negócios devem ser implementadas neste local.
            
 
            $dal = new \DAL\dalFuncionario(); 

 
            $dal->Update($funcionario);
            var_dump('oi');
           
         }
    }
?>