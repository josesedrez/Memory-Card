<?php
	session_start();
	$conexao=pg_connect("host=localhost dbname=projeto port=5432 user=postgres password=senha5");

	$url=$_SERVER['DOCUMENT_ROOT'].'/projeto/';
	//$url='C:/Bitnami/wappstack-7.1.19-1/apache2/htdocs/projeto/';
	$url2='http://'.$_SERVER['SERVER_NAME'].'/projeto/';
	if(!$conexao)
	{
			
	}
?>