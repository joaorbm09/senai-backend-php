<?php

class Database {
	private static $conn;

	public static function conectar() {
    	if (!self::$conn) {
        	self::$conn = new PDO(
            	"pgsql:host=192.168.10.52;port=5432;dbname=musica;options='--client_encoding=UTF8'",
            	"musica",
            	"musica123",
            	[
                	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            	]
        	);
    	}
    	return self::$conn;
	}
}
?>
