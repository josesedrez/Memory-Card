<?php
	require_once('../../inc/conexao.php');

	if($_SESSION['admin']==1)
	{
		$id_user=$_POST['id_user'];

		$sql="DELETE FROM usuario WHERE id_user='$id_user'";
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