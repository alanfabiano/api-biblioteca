<?php

function __autoload( $class )
{	
	
	$class = dirname(__FILE__) . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
	if (! file_exists( $class ))
	{
		throw new Exception( "File path '{$class}' not found." );
	}
	require_once($class);
	
}


use Classes\Rotas;

require 'configs/db-connect.php';
require 'Classes/Database.php';
require 'configs/routes.php';
require 'configs/exception.php';
