<?php

namespace Classes;

use \PDO as PDO;


class Database {

	public $result;


// EXECUTAR A CONEXÃO COM O BANCO
	private static function connect() {	
        try{
            $pdo = new PDO("mysql:host=".HOST.";dbname=".BANCO, USUARIO, SENHA);
            return $pdo;
        }catch (PDOException $e) {
        	return $connection = null;
                die($e->getMessage());
        }
    }

// MÉTODO PARA EXECUTAR UMA QUERY
    public function query($query)
    {
        $dbh = self::connect();
        $stmt = $dbh->query($query);
        $this->result = [];
        while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($this->result, $linha);
        }
        return $this;
    }

// MÉTODO PARA CONVERTER RESULTADO DA QUERY EM UM JSON
    public function toJson()
    {
    	return json_encode( $this->result );
    }


// MÉTODO PARA CONVERTER RESULTADO DA QUERY EM UM ARRAY
    public function toArray()
    {
    	return (array)( $this->result );
    }
}