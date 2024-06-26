<?php

namespace DAL;

include_once '/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/DAL/conexao.php';
include_once '/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/MODEL/cliente.php';

class dalCliente
{

    public function Select()
    {
        
        $con = Conexao::conectar();
        $sql = "select * from cliente;";
        
        $result = $con->query($sql);
        
        
        $con = Conexao::desconectar();
        
        

        foreach ($result as $linha) {
            $cliente = new \MODEL\Cliente();

            $cliente->setId($linha['id']);
            $cliente->setNome($linha['nome']);
            $cliente->setAniversario($linha['aniversario']);
            $cliente->setCpf($linha['cpf']);
            $cliente->setTelefone($linha['telefone']);

            $lista_cliente[] = $cliente;
        }

        return $lista_cliente;
    }

    public function SelectID(int $id)
    {
        $sql = "select * from cliente where id=?;";
        $pdo = Conexao::conectar();
        $query = $pdo->prepare($sql);
        $query->execute(array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar();

        $cliente = new \MODEL\Cliente();
        $cliente->setId($linha['id']);
        $cliente->setNome($linha['nome']);
        $cliente->setAniversario($linha['aniversario']);
        $cliente->setCpf($linha['cpf']);
        $cliente->setTelefone($linha['telefone']);

        return $cliente;

    }

    public function SelectNome(string $nome){

        $sql = "select * from cliente WHERE nome like  '%" . $nome .  "%' order by nome;";
     //   $sql = "select * from operador WHERE nome like  '%?%' order by nome;";

        $pdo = Conexao::conectar(); 
        $query = $pdo->prepare($sql);
        $result = $pdo->query($sql); 
                  
        // echo count ($result);
        $lista_cliente = null; 
        foreach($result as $linha){
                      
          $cliente = new \MODEL\Cliente();
  
          $cliente->setId($linha['id']);
          $cliente->setNome($linha['nome']);
          $cliente->setAniversario($linha['aniversario']); 
          $cliente->setCpf($linha['cpf']); 
          $cliente->setTelefone($linha['telefone']); 
  
          $lista_cliente[] = $cliente; 

        }
        return  $lista_cliente;

      }

    public function Insert(\MODEL\Cliente $cliente)
    {
        $con = Conexao::conectar();
        
        $sql = "INSERT INTO cliente (nome, aniversario, cpf, telefone) VALUES ('{$cliente->getNome()}', '{$cliente->getAniversario()}', '{$cliente->getCpf()}', '{$cliente->getTelefone()}');";
        $result = $con->query($sql);
        $con = Conexao::desconectar();
        return $result;
    }

    public function Update(\MODEL\Cliente $cliente)
    {
        $sql = "UPDATE cliente SET nome=?, aniversario=?, cpf=?, telefone=? WHERE id=?";
        
        $pdo = Conexao::conectar();
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        
        $query = $pdo->prepare($sql);
        $result = $query->execute(array($cliente->getNome(), $cliente->getAniversario(), $cliente->getCpf(), $cliente->getTelefone(), $cliente->getId()));

        $con = Conexao::desconectar();
        
        return $result;
    }

    public function Delete(int $id)
    {
        $sql = "DELETE from cliente WHERE id=?";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $result = $query->execute(array($id));
        $con = Conexao::desconectar();
        return  $result; 
    }
}
