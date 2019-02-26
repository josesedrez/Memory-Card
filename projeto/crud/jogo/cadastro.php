<?php
	require_once('../../inc/conexao.php');

		$nome_jog=$_POST['nome_jog'];
		$descricao_jog=$_POST['descricao_jog'];

		$nome_img_capa=$_FILES['img_capa']['name'];
		$tam_img_capa=$_FILES['img_capa']['size'];
		$nome_temp_img_capa=$_FILES['img_capa']['tmp_name'];

		$nome_img_grande=$_FILES['img_grande']['name'];
		$tam_img_grande=$_FILES['img_grande']['size'];
		$nome_temp_img_grande=$_FILES['img_grande']['tmp_name'];

		if($_SESSION['admin']==1)
		{
			$sql="SELECT * FROM jogo WHERE nome_jogo='$nome_jog'";
			$procura=pg_query($conexao,$sql);
			if(pg_num_rows($procura)==0)
			{
				$sql="INSERT INTO jogo(nome_jogo,descricao_jogo,img_capa,img_grande) VALUES ('$nome_jog','$descricao_jog','capa_default.png','grande_default.png') RETURNING  id_jogo";
				$cadastra=pg_query($conexao,$sql);

				$registro=pg_fetch_array($cadastra);
				$id_jog=$registro['id_jogo'];

				if(pg_affected_rows($cadastra)>0)
				{

					if (!empty($nome_img_capa))
					{

						$nome_imagem_capa="img_capa_".$id_jog.".png";

						if (move_uploaded_file($nome_temp_img_capa, $url."assets/img/".$nome_imagem_capa))
						{

							$sql2="UPDATE jogo SET img_capa='$nome_imagem_capa' WHERE  id_jogo='$id_jog'";
							$muda_img=pg_query($conexao,$sql2);
						}
					}

					if (!empty($nome_img_grande))
					{

						$nome_imagem_grande="img_grande_".$id_jog.".png";

						if (move_uploaded_file($nome_temp_img_grande, $url."assets/img/".$nome_imagem_grande))
						{

							$sql2="UPDATE jogo SET img_grande='$nome_imagem_grande' WHERE  id_jogo='$id_jog'";
							$muda_img=pg_query($conexao,$sql2);
						}
					}

					$sql="SELECT img_capa,img_grande FROM jogo WHERE id_jogo='$id_jog'";
					$pega_img=pg_query($conexao,$sql);
					$array_img=pg_fetch_array($pega_img);

					echo $nome_jog.'#'.$id_jog.'#'.$descricao_jog.'#'.$array_img[0].'#'.$array_img[1]; //JOGO CADASTRADO, DEVOLVE O NOME JUNTO DO ID			
				}
				else
				{
					echo '2'; //ERRO NO CADASTRO DO JOGO
					
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