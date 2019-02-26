<?php
	require_once('../../inc/conexao.php');

	if($_SESSION['admin']==1)
	{
		$id_cat=$_POST['id_cat'];

		$sql="DELETE FROM categoria WHERE id_categoria='$id_cat'";
		$exclui=pg_query($conexao,$sql);

		if(pg_affected_rows($exclui)>0)
		{
			echo '1'; // CATEGORIA EXCLUÍDA
		}
		else
		{
			echo '2'; //ERRO NA EXCLUSÃO DA CATEGORIA
		}
	}
	else
	{
		echo '0'; // NÃO É ADMIN
	}
?>