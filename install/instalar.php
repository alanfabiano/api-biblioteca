<?php


if($host != null && $banco != null && $usuario != null && $senha != null && $dash_nome != null && $dash_email != null && $dash_pass != null)
{

	if( file_exists("../configs/db-connect.php") )
	{
		$msg = "O sistema já está instalado";
	}
	else
	{
			
		try{
			
			$dbh = new PDO("mysql:host=$host;dbname=$banco", $usuario, $senha);
			$fp = fopen("../configs/db-connect.php", "a");
			$config = "<?php\n"
					 ."define('HOST','$host');\n"
					 ."define('BANCO','$banco');\n"
					 ."define('USUARIO','$usuario');\n"
					 ."define('SENHA','$senha');\n"
					 ."?>";
			$escreve = fwrite($fp, $config);

			include 'bd-default.php';
			header('Location:../login.php');

		}catch(PDOException $e){
			$msg = 'Dados de conexão inválidos<br>'.$e->getMessage();
		}
	}
}