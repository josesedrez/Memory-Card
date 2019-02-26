<?php
	require_once('../../inc/conexao.php');
	require_once($url.'inc/cabecalho.php');

	if(isset($_SESSION['email']))
	{
		$nome=$_POST['nome'];
		$email=$_POST['email'];
		$senha=$_POST['senha'];
		$nome_img_logo=$_FILES['img_logo']['name'];
		$tam_img_logo=$_FILES['img_logo']['size'];
		$nome_temp_img_logo=$_FILES['img_logo']['tmp_name'];
		$nome_img_perfil=$_FILES['img_perfil']['name'];
		$tam_img_perfil=$_FILES['img_perfil']['size'];
		$nome_temp_img_perfil=$_FILES['img_perfil']['tmp_name'];

		$email_user=$_SESSION['email'];
		$id_user=$_SESSION['id_user'];

		$sql="SELECT * FROM usuario WHERE email='$email'";
		$checa=pg_query($conexao,$sql);

		if(pg_num_rows($checa)==0 || $email==$email_user)
		{
			$sql="UPDATE usuario SET nome='$nome' WHERE id_user='$id_user'";
			$update_nome=pg_query($conexao,$sql);

			$sql="UPDATE usuario SET email='$email' WHERE id_user='$id_user'";
			$update_email=pg_query($conexao,$sql);

			$sql="UPDATE usuario SET senha='$senha' WHERE id_user='$id_user'";
			$update_senha=pg_query($conexao,$sql);

			if (!empty($nome_img_logo))
			{
				$nome_imagem_logo="logo_".$id_user.".png";

				if (move_uploaded_file($nome_temp_img_logo, $url."assets/img/".$nome_imagem_logo))
				{

					$sql2="UPDATE usuario SET img_logo='$nome_imagem_logo' WHERE  id_user='$id_user'";
					$update_logo=pg_query($conexao,$sql2);
					echo " Upload do arquivo: ". $nome_imagem_logo."concluído com sucesso";
				}
				else
				{
					echo "Falha no envio do arquivo da img_logo";

				}
			}
			if (!empty($nome_img_perfil))
			{
				$nome_imagem_perfil="perfil_".$id_user.".png";

				if (move_uploaded_file($nome_temp_img_perfil, $url."assets/img/".$nome_imagem_perfil))
				{

					$sql2="UPDATE usuario SET img_perfil='$nome_imagem_perfil' WHERE  id_user='$id_user'";
					$update_perfil=pg_query($conexao,$sql2);
					echo " Upload do arquivo: ". $nome_imagem_perfil."concluído com sucesso";
				}
				else
				{
					echo "Falha no envio do arquivo da img_perfil";

				}
			}

			$sql="SELECT * FROM usuario WHERE id_user='$id_user'";
			$procura=pg_query($conexao,$sql);
			$user=pg_fetch_assoc($procura);
			$_SESSION = $user;
			header("Location: ".$url2."index.php");
		}
		else
		{
			echo 'este email já existe';
			header("Location: ".$url2."index.php");
		}
	}
	else
	{
		echo 'Você não está logado';
		header("Location: ".$url2."index.php");
	}
require_once($url.'inc/rodape.php');
?>