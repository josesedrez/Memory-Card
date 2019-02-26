<?php
	require_once('../../inc/conexao.php');

	if($_SESSION['admin']==1)
	{
		$id_jog=$_POST['id_jog'];

		$sql="DELETE FROM jogo WHERE id_jogo='$id_jog'";
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