<?php

namespace Classes;

class Rotas{
	
	public $rotas;
	public $metodo;

	public static function get($rota, $metodo){

		if($_GET['url'] == $rota){
			$route = explode('@', $metodo);
			$param = (object)([ 'classe' => '\Classes\\'.$route[0]]);

			$retorno = new $param->classe();
			$retorno->$route[1]();
			exit;
		}
	}
}