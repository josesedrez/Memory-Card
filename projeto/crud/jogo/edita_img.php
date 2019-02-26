<?php
	require_once('../../inc/conexao.php');

		$id_jogo=$_POST['id_jogo'];

		$nome_img_capa=$_FILES['img_capa']['name'];
		$tam_img_capa=$_FILES['img_capa']['size'];
		$nome_temp_img_capa=$_FILES['img_capa']['tmp_name'];

		if($_SESSION['admin']==1)
		{
			if (!empty($nome_img_capa))
			{
				$nome_imagem_capa="img_capa_".$id_jogo.".png";

				if (move_uploaded_file($nome_temp_img_capa, $url."assets/img/".$nome_imagem_capa))
				{

					$sql2="UPDATE jogo SET img_capa='$nome_imagem_capa' WHERE  id_jogo='$id_jogo'";
					$muda_img=pg_query($conexao,$sql2);
				}
			}
			header("Location: ".$url2."index.php");
		}
		else
		{
			echo 'Você não é o admin';
			
		}
		header("Location: ".$url2."index.php");
?>