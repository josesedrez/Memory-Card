<?php
	require_once('../../inc/conexao.php');

	if($_SESSION['admin']==1)
	{
		$id_ava=$_POST['id_ava'];

		$sql="DELETE FROM avaliacao WHERE id_avaliacao='$id_ava'";
		$exclui=pg_query($conexao,$sql);

		if(pg_affected_rows($exclui)>0)
		{
			echo '1'; // AVALIACAO EXCLUÍDA
		}
		else
		{
			echo '2'; //ERRO NA EXCLUSÃO DA AVALIACAO
		}
	}
	else
	{
		echo '0'; // NÃO É ADMIN
	}
?>