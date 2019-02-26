<?php
	require_once('../../inc/conexao.php');


		$categoria=$_POST['categoria'];
		$jogo=$_POST['jogo'];
		
		if($_SESSION['admin']==1)
		{
			$sql="SELECT * FROM jogo_categoria WHERE id_jogo='$jogo' AND id_categoria='$categoria'";
			$procura=pg_query($conexao,$sql);
			if(pg_num_rows($procura)==0)
			{
				$sql="INSERT INTO jogo_categoria(id_jogo,id_categoria) VALUES ('$jogo','$categoria')";
				$cadastra=pg_query($conexao,$sql);

				$registro=pg_fetch_array($cadastra);
				$id_cat=$registro['id_categoria'];


				$sql="SELECT nome_categoria FROM categoria WHERE id_categoria='$categoria'";
				$resultado=pg_query($conexao,$sql);
				$nome=pg_fetch_array($resultado);

				if(pg_affected_rows($cadastra)>0)
				{
					echo $jogo.'-'.$categoria.'-'.$nome[0]; //CATEGORIA CADASTRADA, DEVOLVE O NOME JUNTO DO ID			
				}
				else
				{
					echo '2'; //ERRO NO CADASTRO DA CATEGORIA
					
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