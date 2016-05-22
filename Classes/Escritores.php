<?php

namespace Classes;

use Classes\Database;

class Escritores extends Database
{

	public $tabela = 'escritores';

	public function __construct()
	{

	}

	public function index()
	{
		echo 'executa classe autores - metodo index';	
	}

}