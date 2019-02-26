<?php
	require_once("conexao.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Projeto</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="inc/style.css">
</head>
<body>
	<div class="content">
		<div class="row navbarra">
			<?php
				if(isset($_SESSION['email']))
				{
			?>
					<div class="col col-lg-10 col-md-8 col-sm-6">
					</div>
					<div class="col col-lg-1 col-md-2 col-sm-3">
					<?php
						if($_SESSION['admin']==0)
						{
					?>
						<a href="perfil/perfil.php" class="btn btn-dark">Perfil</a>
					<?php
						}
						else
						{
					?>
						<a href="crud/crud.php" class="btn btn-dark">CRUD</a>
					<?php
						}
					?>
					</div>
					<div class="col col-lg-1 col-md-2 col-sm-3">
						<a href="../logout.php" class="btn btn-dark">Logout</a>
					</div>
			<?php
				}
				else
				{
			?>
					<div class="col col-lg-10 col-md-8 col-sm-6">
					</div>
					<div class="col col-lg-1 col-md-2 col-sm-3">
						<a href="cadastrar.php" class="btn btn-dark">Cadastro</a>
					</div>
					<div class="col col-lg-1 col-md-2 col-sm-3">
						<a href="logar.php" class="btn btn-dark">Login</a>
					</div>
			<?php
				}
			?>
		</div>