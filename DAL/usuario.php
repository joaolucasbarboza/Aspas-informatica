<?php

namespace DAL;

include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/DAL/conexao.php";
include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/MODEL/usuario.php";

class dalUsuario
{

    public function SelectUser(string $email)
    {        
        $sql = "select * from users where email LIKE ?;";
        
        $pdo = Conexao::conectar();
        $query = $pdo->prepare($sql);
        $query->execute(array($email));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar();
        
        $usuario = new \MODEL\Usuario();

        if ($linha != null) {
            $usuario->setId($linha['id']);
            $usuario->setUsuario($linha['usuario']);
            $usuario->setEmail($linha['email']);
            $usuario->setSenha($linha['senha']);
        }
        return $usuario;
    }
}
