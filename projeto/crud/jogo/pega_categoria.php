<?php
	require_once('../../inc/conexao.php');

	$categoria=$_POST['categoria'];
	$sql = "SELECT * FROM categoria";
	$resultado=pg_query($sql);
	$linhas=pg_fetch_all($resultado);
	echo json_encode($linhas);
?>