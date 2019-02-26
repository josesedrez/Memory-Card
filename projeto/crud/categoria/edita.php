<?php
	require_once('../../inc/conexao.php');


		$nome_cat=$_POST['nome_categoria'];
		$id_cat=$_POST['id_categoria'];
		
		if($_SESSION['admin']==1)
		{
			$sql="SELECT * FROM categoria WHERE nome_categoria='$nome_cat'";
			$procura=pg_query($conexao,$sql);
			if(pg_num_rows($procura)==0)
			{
				$sql="SELECT * FROM categoria WHERE id_categoria='$id_cat'";
				$procura=pg_query($conexao,$sql);
				$nome_antigo=pg_fetch_array($procura);

				$sql="UPDATE categoria SET nome_categoria='$nome_cat' WHERE id_categoria='$id_cat'";
				$edita=pg_query($conexao,$sql);

				if(pg_affected_rows($edita)>0)
				{
					echo $nome_cat.'-'.$id_cat.'-'.$nome_antigo[1]; //CATEGORIA EDITADA, DEVOLVE O NOME JUNTO DO ID E DO NOME ANTIGO
				}
				else
				{
					echo '2'; //ERRO NA EDIÇÃO DA CATEGORIA
					
				}
			}
			else
			{
				echo '3'; //CATEGORIA JÁ EXISTE
				
			}
		}
		else
		{
			echo '0'; //NÃO É ADMIN
		}

		
	

?>