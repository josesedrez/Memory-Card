<?php
	require_once('../../inc/conexao.php');
	session_start();
	session_destroy();
	header("Location: ".$url2."index.php");
?>