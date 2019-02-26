<?php
	require_once('../../inc/conexao.php');


		$nome_cat=$_POST['nome_cat'];
		
		if($_SESSION['admin']==1)
		{
			$sql="SELECT * FROM categoria WHERE nome_categoria='$nome_cat'";
			$procura=pg_query($conexao,$sql);
			if(pg_num_rows($procura)==0)
			{
				$sql="INSERT INTO categoria(nome_categoria) VALUES ('$nome_cat') RETURNING  id_categoria";
				$cadastra=pg_query($conexao,$sql);

				$registro=pg_fetch_array($cadastra);
				$id_cat=$registro['id_categoria'];

				if(pg_affected_rows($cadastra)>0)
				{
					echo $nome_cat.'-'.$id_cat; //CATEGORIA CADASTRADA, DEVOLVE O NOME JUNTO DO ID			
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