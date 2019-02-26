<?php
	session_start();
	$conexao=pg_connect("host=localhost dbname=desapliweb port=5432 user=postgres password=senha5");
	if(!$conexao){
		echo 'O banco de Dados não pode ser conectado';
	}
?>