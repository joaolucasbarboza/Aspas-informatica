<?php

namespace DAL;

include_once '/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/DAL/conexao.php';
include_once '/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/MODEL/funcionario.php';

class dalFuncionario
{

    public function Select()
    {
        
        $con = Conexao::conectar();
        $sql = "select * from funcionario;";
        
        $result = $con->query($sql);
        
        
        $con = Conexao::desconectar();
        
        

        foreach ($result as $linha) {
            $funcionario = new \MODEL\Funcionario();

            $funcionario->setId($linha['id']);
            $funcionario->setNome($linha['nome']);
            $funcionario->setAniversario($linha['aniversario']);
            $funcionario->setSalario($linha['salario']);
            $lista_funcionario[] = $funcionario;
        }

        return $lista_funcionario;
    }

    public function SelectID(int $id)
    {
        $sql = "select * from funcionario where id=?;";
        $pdo = Conexao::conectar();
        $query = $pdo->prepare($sql);
        $query->execute(array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar();

        $funcionarios = new \MODEL\Funcionario();
        $funcionarios->setId($linha['id']);
        $funcionarios->setNome($linha['nome']);
        $funcionarios->setAniversario($linha['aniversario']);
        $funcionarios->setSalario($linha['salario']);

        return $funcionarios;

    }

    public function Insert(\MODEL\Funcionario $funcionario)
    {
        $con = Conexao::conectar();
        $sql = "INSERT INTO funcionario (nome, aniversario, salario) VALUES ('{$funcionario->getNome()}', '{$funcionario->getAniversario()}', {$funcionario->getSalario()});";
        $result = $con->query($sql);
        $con = Conexao::desconectar();
        return $result;
    }

    public function Update(\MODEL\Funcionario $funcionario)
    {
        $sql = "UPDATE funcionario SET nome=?, aniversario=?, salario=? WHERE id=?";
        
        $pdo = Conexao::conectar();
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        
        $query = $pdo->prepare($sql);
        $result = $query->execute(array($funcionario->getNome(), $funcionario->getAniversario(), $funcionario->getSalario(), $funcionario->getId()));

        $con = Conexao::desconectar();
        
        return $result;
    }

    public function Delete(int $id)
    {
        $sql = "DELETE from funcionario WHERE id=?";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $result = $query->execute(array($id));
        $con = Conexao::desconectar();
        return  $result; 
    }
}
