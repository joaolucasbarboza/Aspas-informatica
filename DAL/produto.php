<?php

namespace DAL;

include_once '/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/DAL/conexao.php';
include_once '/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/MODEL/produto.php';
include_once '/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/DAL/categoria.php';

class dalProduto
{

    public function Select()
    {
        
        $con = Conexao::conectar();
        $sql = "select * from produto;";
        
        $result = $con->query($sql);
        
        
        $con = Conexao::desconectar();
        
        
        foreach ($result as $linha) {
            $produto = new \MODEL\Produto();

            $produto->setId($linha['id']);
            $produto->setNome($linha['nome']);
            $produto->setPreco($linha['preco']);
            $produto->setDescricao($linha['descricao']);
            $produto->setEstoque($linha['estoque']);
            $categoriaDAL = new \DAL\dalCategoria();
            $produto->setCategoria($categoriaDAL->SelectID($linha['categoria']));
            $lista_produto[] = $produto;
        }

        return $lista_produto;
    }

    public function SelectID(int $id)
    {
        $sql = "select * from produto where id=?;";
        $pdo = Conexao::conectar();
        $query = $pdo->prepare($sql);
        $query->execute(array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar();

        $produto = new \MODEL\Produto();
        $produto->setId($linha['id']);
        $produto->setNome($linha['nome']);
        $produto->setPreco($linha['preco']);
        $produto->setDescricao($linha['descricao']);
        $produto->setEstoque($linha['estoque']);
        $categoriaDAL = new \DAL\dalCategoria();
        $produto->setCategoria($categoriaDAL->SelectID($linha['categoria']));

        return $produto;

    }

    public function SelectNome(string $nome){

        $sql = "select * from produto WHERE nome like  '%" . $nome .  "%' order by nome;";
     //   $sql = "select * from operador WHERE nome like  '%?%' order by nome;";

        $pdo = Conexao::conectar(); 
        $query = $pdo->prepare($sql);
        $result = $pdo->query($sql); 
                  
        // echo count ($result);
        $lista_produto = null; 
        foreach($result as $linha){
                      
          $produto = new \MODEL\Produto();
          $produto->setId($linha['id']);
          $produto->setNome($linha['nome']);
          $produto->setPreco($linha['preco']);
          $produto->setDescricao($linha['descricao']);
          $produto->setEstoque($linha['estoque']);
          $categoriaDAL = new \DAL\dalCategoria();
          $produto->setCategoria($categoriaDAL->SelectID($linha['categoria']));
  
          $lista_produto[] = $produto; 

        }
        return  $lista_produto;

      }

    public function Insert(\MODEL\Produto $produto)
    {
        $con = Conexao::conectar();
        $sql = "INSERT INTO produto (nome, preco, descricao, estoque, categoria) VALUES (
            '{$produto->getNome()}', 
            {$produto->getPreco()}, 
            '{$produto->getDescricao()}', 
            {$produto->getEstoque()},
            {$produto->getCategoria()->getId()});";

        $result = $con->query($sql);
        $con = Conexao::desconectar();
        return $result;
    }

    public function Update(\MODEL\Produto $produto)
    {
        $sql = "UPDATE produto SET nome=?, preco=?, descricao=?, estoque=?, quantidade=?, categoria=? WHERE id=?";
        
        $pdo = Conexao::conectar();
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        
        $query = $pdo->prepare($sql);
        $result = $query->execute(array(
            $produto->getNome(), 
            $produto->getPreco(), 
            $produto->getDescricao(), 
            $produto->getEstoque(),
            $produto->getCategoria()));


        $con = Conexao::desconectar();
        
        return $result;
    }

    public function Delete(int $id)
    {
        $sql = "DELETE from produto WHERE id=?";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $result = $query->execute(array($id));
        $con = Conexao::desconectar();
        return  $result; 
    }
}
