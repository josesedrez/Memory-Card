<?php
	require_once('../../inc/conexao.php');


		$nome_jog=$_POST['nome_jogo'];
		$id_jog=$_POST['id_jogo'];
		$descricao_jog=$_POST['descricao_jogo'];
		
		if($_SESSION['admin']==1)
		{
			$sql="SELECT * FROM jogo WHERE nome_jogo='$nome_jog'";
			$procura=pg_query($conexao,$sql);
			if(pg_num_rows($procura)==0)
			{
				$sql="SELECT * FROM jogo WHERE id_jogo='$id_jog'";
				$procura=pg_query($conexao,$sql);
				$dado_antigo=pg_fetch_array($procura);

				$sql="UPDATE jogo SET nome_jogo='$nome_jog' WHERE id_jogo='$id_jog'";
				$edita=pg_query($conexao,$sql);

				$sql="UPDATE jogo SET descricao_jogo='$descricao_jog' WHERE id_jogo='$id_jog'";
				$edita=pg_query($conexao,$sql);

				if(pg_affected_rows($edita)>0)
				{
					echo $nome_jog.'-'.$id_jog.'-'.$dado_antigo[1].'-'.$descricao_jog.'-'.$dado_antigo[2]; //JOGO EDITADO, DEVOLVE O NOME JUNTO DO ID E DO NOME ANTIGO E DESCRICAO ANTIGA
				}
				else
				{
					echo '2'; //ERRO NA EDIÇÃO DO JOGO
					
				}
			}
			else
			{
				echo '3'; //JOGO JÁ EXISTE
				
			}
		}
		else
		{
			echo '0'; //NÃO É ADMIN
		}

		
	

?>