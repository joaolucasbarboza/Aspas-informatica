<?php 
namespace DAL;

class Conexao {
    private static $dbName = 'flash_informatica';
    private static $dbHost = 'localhost';
    private static $dbUser = 'root';
    private static $dbPassword = '';
    private static $cont = null;

    public function __construct() {
        die('A função init não é permitida');
    }

    public static function conectar() {
        if (self::$cont == null) {
            try {
                self::$cont = new \PDO("mysql:host=". self::$dbHost .";dbname=". self::$dbName, self::$dbUser, self::$dbPassword);
            }
            catch (\PDOException $exeption) {
                die($exeption->getMessage());
            }
        }
        return self::$cont;
    }

    public static function desconectar() {
        self::$cont = null;
    }
}

?>