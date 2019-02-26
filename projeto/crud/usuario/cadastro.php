<?php
	require_once('../../inc/conexao.php');
	require_once($url.'inc/cabecalho.php');
	if(isset($_SESSION['email']))
	{
		echo 'Você já está logado';
		header("Location: ".$url2."index.php");
	}
	else
	{
		$nome=$_POST['nome'];
		$email=$_POST['email'];
		$senha=$_POST['senha'];
		$nome_img_logo=$_FILES['img_logo']['name'];
		$tam_img_logo=$_FILES['img_logo']['size'];
		$nome_temp_img_logo=$_FILES['img_logo']['tmp_name'];


		$sql="SELECT * FROM usuario WHERE email='$email'";
		$procura=pg_query($conexao,$sql);
		if(pg_num_rows($procura)==0)
		{
			$sql="INSERT INTO usuario(email,nome,senha,img_logo,img_perfil,admin) VALUES ('$email','$nome','$senha','logo_default.png','perfil_default.png','0') RETURNING  id_user";
			$cadastra=pg_query($conexao,$sql);

			$registro=pg_fetch_array($cadastra);
			$id_user=$registro['id_user'];

			if(pg_affected_rows($cadastra)>0)
			{
				if (!empty($nome_img_logo))
				{

					$nome_imagem_logo="logo_".$id_user.".png";

					if (move_uploaded_file($nome_temp_img_logo, $url."assets/img/".$nome_imagem_logo))
					{

						$sql2="UPDATE usuario SET img_logo='$nome_imagem_logo' WHERE  id_user='$id_user'";
						$cadastra_user2=pg_query($conexao,$sql2);
						echo " Upload do arquivo: ". $nome_imagem_logo."concluído com sucesso";
					}
					else
					{
						echo "Falha no envio do arquivo";

					}
				}
?>

				<form id="loginDireto" action="<?php echo $url2 ?>crud/usuario/login.php" method="post">
					<input type="hidden" name="email" value="<?php echo $email ?>">
					<input type="hidden" name="senha" value="<?php echo $senha ?>">
				</form>
<?php
			}
			else
			{
				echo 'erro no cadastro';
				header("Location: ".$url2."index.php");
			}
		}
		else
		{
			echo 'email já cadastrado';
			header("Location: ".$url2."index.php");
		}

		
	}
	 require_once($url.'inc/rodape.php');
?>