<?php 
namespace BLL;
include_once "/Applications/XAMPP/xamppfiles/htdocs/projeto_aspas_informatica/Aspas-informatica/DAL/usuario.php";
class bllUsuario
{

    public function SelectUser(string $email)
    {
        
        $dal = new \DAL\dalUsuario();
        
        return $dal->SelectUser($email);

    }
}
?>
