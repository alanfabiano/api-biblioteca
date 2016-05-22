<?php

$usuario  = isset($_POST['usuario']) ? $_POST['usuario'] : null;
$senha    = isset($_POST['senha']) ? $_POST['senha'] : null;
$entrar = isset($_POST['entrar']) ? $_POST['entrar'] : null;

if( $entrar != null )
{
	include 'login.php';
}
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Acessar Sistema</title>
		<link href="css/style.css" rel="stylesheet">
	</head>

	<body id="pageInstall">

		<div class="wrapper">
			<h1>Administrar Sistema</h1>

			<form action="" method="post">
				<?php
					if(isset($msg)){
						echo '<span class="erro">'.$msg.'</span>';
					}
				?>
				<p>
					<label>Usuário:</label>
					<input type="text" name="usuario" value="<?php echo $usuario; ?>">
					<?php if($entrar != null && $usuario == null){
						echo '<span class="erro">Usuário inválido</span>';
					}
					?>
				</p>

				<p>
					<label>Senha:</label>
					<input type="password" name="senha" value="<?php echo $senha; ?>">
					<?php if($entrar != null && $senha == null){
						echo '<span class="erro">Senha inválida</span>';
					}
					?>
				</p>

				<p class="text-center">
					<button type="submit" value="go" name="entrar">Login</button>
				</p>

			</form>
		</div>
	</body>
</html>