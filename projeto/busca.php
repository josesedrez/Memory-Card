<?php
	require_once('inc/conexao.php');
	$busca=$_POST['busca'];
	$busca = strtoupper($busca);

		$filtro_user="upper(nome) LIKE '%".$busca."%'";
		$_SESSION['filtro_user']=$filtro_user;

		$filtro_user_home="upper(nome) LIKE '%".$busca."%'";
		$_SESSION['filtro_user_home']=$filtro_user_home;

		$filtro_jogo="upper(nome_jogo) LIKE '%".$busca."%'";
		$_SESSION['filtro_jogo']=$filtro_jogo;

		$filtro_jogo_home="upper(nome_jogo) LIKE '%".$busca."%'";
		$_SESSION['filtro_jogo_home']=$filtro_jogo_home;

		$filtro_cat="upper(nome_categoria) LIKE '%".$busca."%'";
		$_SESSION['filtro_cat']=$filtro_cat;

		$filtro_ava="upper(titulo) LIKE '%".$busca."%'";
		$_SESSION['filtro_ava']=$filtro_ava;

		$_SESSION['busca']=$busca;
	
echo $busca;
	
?>

