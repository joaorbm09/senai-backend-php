<?php 
// cria a classe para conexão com o banco
class Database{
    private static $conn;

    public static function conectar(){
        if(!self::$conn){
            self::$conn = new PDO(
            "pgsql:host=192.168.10.52;port=5432;dbname=crud_cliente",
            "crud_cliente","crud_cliente",[
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]
            );
        }
        return self::$conn;
    }
}
?>