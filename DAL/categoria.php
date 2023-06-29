<?php
    namespace DAL; 
    include_once '/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/DAL/conexao.php';
    include_once  '/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/MODEL/categoria.php';

    class dalCategoria{

        public function Select(){
          $sql = "select * from categoria;";

          $con = Conexao::conectar(); 
          $result = $con->query($sql); 
          $con = Conexao::desconectar();
        
          foreach($result as $linha){
                        
            $categoria = new \MODEL\Categoria();
            $categoria->setId($linha['id']);
            $categoria->setNome($linha['nome']);     
            $categoria->setQuantidade($linha['quantidade']);     

            $lista_categoria[] = $categoria; 

          }
          return  $lista_categoria;
        }


        public function SelectID(int $id){ 
          $sql = "select * from categoria where id=?;";
          $pdo = Conexao::conectar(); 
          $query = $pdo->prepare($sql);
          $query->execute (array($id));
          $linha = $query->fetch(\PDO::FETCH_ASSOC);
      
          Conexao::desconectar(); 
               
          $categoria = new \MODEL\Categoria();
          $categoria->setId($linha['id']);
          $categoria->setNome($linha['nome']);
          $categoria->setQuantidade($linha['quantidade']);    

          return  $categoria;
        }


        public function Update(\MODEL\Categoria $categoria){
          $sql = "UPDATE categoria SET nome=?, quantidade=? WHERE id=?";

          $pdo = Conexao::conectar(); 
          $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
          $query = $pdo->prepare($sql);
          $result = $query->execute(array($categoria->getNome()));
          $con = Conexao::desconectar();
          return  $result; 
      }  
    }
?> 