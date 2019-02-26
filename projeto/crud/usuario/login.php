<?php
	require_once('../../inc/conexao.php');
	require_once($url.'inc/cabecalho.php');
	if(isset($_SESSION['email']))
	{
		echo 'Você já está logado';
	}
	else
	{
		$email=$_POST['email'];
		$senha=$_POST['senha'];

		$sql="SELECT * FROM usuario WHERE email='$email' AND senha='$senha'";
		$procura=pg_query($conexao,$sql);
		$user=pg_fetch_assoc($procura);
		if(pg_num_rows($procura)>0)
		{

			$_SESSION = $user;

			header("Location: ".$url2."index.php");
		}
		else
		{
			header("Location: ".$url2."index.php");
		}
	}
	 require_once($url.'inc/rodape.php');
?>