<?php

$host       = isset($_POST['host']) ? $_POST['host'] : null;
$banco      = isset($_POST['banco']) ? $_POST['banco'] : null;
$usuario    = isset($_POST['usuario']) ? $_POST['usuario'] : null;
$senha      = isset($_POST['senha']) ? $_POST['senha'] : null;
$dash_nome  = isset($_POST['dash_nome']) ? $_POST['dash_nome'] : null;
$dash_email = isset($_POST['dash_email']) ? $_POST['dash_email'] : null;
$dash_pass  = isset($_POST['dash_pass']) ? $_POST['dash_pass'] : null;
$instalar   = isset($_POST['instalar']) ? $_POST['instalar'] : null;

if( $instalar != null )
{
	include 'instalar.php';
}
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Instalar sistema</title>
		<link href="../css/style.css" rel="stylesheet">
	</head>

	<body id="pageInstall">

		<div class="wrapper">
			<h1>Instalar sistema</h1>

			<form action="" method="post">
				<?php
					if(isset($msg)){
						echo '<span class="erro">'.$msg.'</span>';
					}
				?>
				<p>
					<label>Host:</label>
					<input type="text" name="host" value="<?php echo $host; ?>" required>
					<?php if($instalar != null && $host == null){
						echo '<span class="erro">Host inválido</span>';
					}
					?>
				</p>
				
				<p>
					<label>Banco:</label>
					<input type="text" name="banco" value="<?php echo $banco; ?>" required>
					<?php if($instalar != null && $banco == null){
						echo '<span class="erro">Banco inválido</span>';
					}
					?>
				</p>

				<p>
					<label>Usuário:</label>
					<input type="text" name="usuario" value="<?php echo $usuario; ?>" required>
					<?php if($instalar != null && $usuario == null){
						echo '<span class="erro">Usuário inválido</span>';
					}
					?>
				</p>

				<p>
					<label>Senha:</label>
					<input type="password" name="senha" value="<?php echo $senha; ?>" required>
					<?php if($instalar != null && $senha == null){
						echo '<span class="erro">Senha inválida</span>';
					}
					?>
				</p>
				<hr>
				<h3>Usuário dashboard</h3>
				<p>
					<label>Nome:</label>
					<input type="text" name="dash_nome" value="<?php echo $dash_nome; ?>" required>
					<?php if($instalar != null && $dash_nome == null){
						echo '<span class="erro">Nome inválido</span>';
					}
					?>
				</p>
				<p>
					<label>Email:</label>
					<input type="email" name="dash_email" value="<?php echo $dash_email; ?>" required>
					<?php if($instalar != null && $dash_email == null){
						echo '<span class="erro">Email inválido</span>';
					}
					?>
				</p>

				<p>
					<label>Senha:</label>
					<input type="password" name="dash_pass" value="<?php echo $dash_pass; ?>" required>
					<?php if($instalar != null && $dash_pass == null){
						echo '<span class="erro">Senha inválida</span>';
					}
					?>
				</p>

				<p class="text-center">
					<button type="submit" value="go" name="instalar">Instalar</button>
				</p>

			</form>
		</div>
	</body>
</html>