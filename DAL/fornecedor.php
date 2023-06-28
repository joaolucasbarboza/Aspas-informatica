<?php

namespace DAL;

include_once '/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/DAL/conexao.php';
include_once '/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/MODEL/fornecedor.php';

class dalFornecedor
{

    public function Select()
    {
        
        $con = Conexao::conectar();
        $sql = "select * from fornecedor;";
        
        $result = $con->query($sql);
        
        
        $con = Conexao::desconectar();
        
        

        foreach ($result as $linha) {
            $fornecedor = new \MODEL\Fornecedor();

            $fornecedor->setId($linha['id']);
            $fornecedor->setRazaoSocial($linha['razao_social']);
            $fornecedor->setCnpj($linha['cnpj']);
            $fornecedor->setEmail($linha['email']);
            $lista_fornecedor[] = $fornecedor;
        }

        return $lista_fornecedor;
    }

    public function SelectID(int $id)
    {
        $sql = "select * from fornecedor where id=?;";
        $pdo = Conexao::conectar();
        $query = $pdo->prepare($sql);
        $query->execute(array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar();

        $fornecedor = new \MODEL\Fornecedor();
        $fornecedor->setId($linha['id']);
        $fornecedor->setRazaoSocial($linha['razao_social']);
        $fornecedor->setCnpj($linha['cnpj']);
        $fornecedor->setEmail($linha['email']);

        return $fornecedor;

    }

    public function SelectNome(string $razao_social){

        $sql = "select * from fornecedor WHERE razao_social like  '%" . $razao_social .  "%' order by razao_social;";
     //   $sql = "select * from operador WHERE nome like  '%?%' order by nome;";

        $pdo = Conexao::conectar(); 
        $query = $pdo->prepare($sql);
        $result = $pdo->query($sql); 
                  
        // echo count ($result);
        $lista_fornecedor = null; 
        foreach($result as $linha){
                      
          $fornecedor = new \MODEL\Fornecedor();
  
          $fornecedor->setId($linha['id']);
          $fornecedor->setRazaoSocial($linha['razao_social']);

          $fornecedor->setCnpj($linha['cnpj']); 
     
          $fornecedor->setEmail($linha['email']); 
  
          $lista_fornecedor[] = $fornecedor; 

        }
        return  $lista_fornecedor;

      }

    public function Insert(\MODEL\Fornecedor $fornecedor)
    {
        $con = Conexao::conectar();
        
        $sql = "INSERT INTO fornecedor (razao_social, cnpj, email) VALUES ('{$fornecedor->getRazaoSocial()}', '{$fornecedor->getCnpj()}', '{$fornecedor->getEmail()}');";
        $result = $con->query($sql);
        $con = Conexao::desconectar();
        return $result;
    }

    public function Update(\MODEL\Fornecedor $fornecedor)
    {
        $sql = "UPDATE fornecedor SET razao_social=?, cnpj=?, email=? WHERE id=?";
        
        $pdo = Conexao::conectar();
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        
        $query = $pdo->prepare($sql);
        $result = $query->execute(array($fornecedor->getRazaoSocial(), $fornecedor->getCnpj(), $fornecedor->getEmail(), $fornecedor->getId()));

        $con = Conexao::desconectar();
        
        return $result;
    }

    public function Delete(int $id)
    {
        $sql = "DELETE from fornecedor WHERE id=?";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $result = $query->execute(array($id));
        $con = Conexao::desconectar();
        return  $result; 
    }
}
