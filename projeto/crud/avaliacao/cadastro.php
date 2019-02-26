<?php
	require_once('../../inc/conexao.php');


		$titulo=$_POST['titulo'];
		$descricao=$_POST['descricao'];
		$user=$_SESSION['id_user'];
		$nome_user=$_SESSION['nome'];
		$jogo=$_SESSION['jogo'];
		
		if($_SESSION['admin']==0)
		{
			$sql="SELECT * FROM avaliacao WHERE titulo='$titulo'";
			$procura=pg_query($conexao,$sql);
			if(pg_num_rows($procura)==0)
			{

				$sql="SELECT * FROM avaliacao WHERE id_user='$user' AND id_jogo='$jogo'";
				$procura2=pg_query($conexao,$sql);
				if(pg_num_rows($procura2)==0)
				{
					$sql="INSERT INTO avaliacao(titulo,descricao_avaliacao,id_jogo,id_user) VALUES ('$titulo','$descricao','$jogo','$user')";
					$cadastra=pg_query($conexao,$sql);

					

					if(pg_affected_rows($cadastra)>0)
					{
						$registro=pg_fetch_array($cadastra);
						$id_ava=$registro['id_avaliacao'];

						echo $id_ava.'-'.$titulo.'-'.$descricao.'-'.$nome_user.'-'.$jogo; //CATEGORIA CADASTRADA, DEVOLVE O NOME JUNTO DO ID			
					}
					else
					{
						echo '2'; //ERRO NO CADASTRO DA AVALIACAO
						
					}
				}
				else
				{
					echo '4'; //USUARIO JA FEZ AVALIACAO DESSE JOGO
				}
				
			}
			else
			{
				echo '3'; //AVALIACAO JÁ EXISTE
				
			}
		}
		else
		{
			echo '0'; //NÃO É USUARIO
		}

		
	

?>