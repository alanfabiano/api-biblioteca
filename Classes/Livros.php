<?php

namespace Classes;

use Classes\Database;
use Classes\Escritores;

class Livros extends Database
{


	public function index()
	{
		
		$livros = $this->query("SELECT * FROM livros")->toArray();
		$usuarios = $this->query("SELECT * FROM usuarios")->toArray();
		echo json_encode( compact( 'livros', 'usuarios' ) );

	}

}