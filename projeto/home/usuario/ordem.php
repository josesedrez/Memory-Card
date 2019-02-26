<?php
	require_once('../../inc/conexao.php');
	$ordem=$_POST['ordem'];
	$filtro=$_SESSION['filtro_user_home'];
	$sql="SELECT * FROM usuario WHERE admin='0' AND ";
	$sql.=$filtro;
	if($ordem==0)
	{
		$sql.=" ORDER BY id_user DESC";
	}
	else
	{
		$sql.=" ORDER BY nome ASC";
	}
	$lista_usuario=pg_query($conexao,$sql);
	$array_usuario=pg_fetch_all($lista_usuario);
	foreach ($array_usuario as $array) 
	{
		?>
		<tr id="tr_usu_id-<?php echo $array['id_user']; ?>">
			<td class="uk-text-center"><img class="uk-preserve-width uk-border-circle imagem_logo" src="<?php echo $url2; ?>assets/img/<?php echo $array['img_logo']; ?>" onerror="this.src='<?php echo $url2; ?>assets/img/logo_default.png'" width="40" alt=""></td>
            <td class="uk-text-center"><a id="ava_usu-<?php echo $array['id_user']; ?>" class="ve_avaliacao_usuario a_home"><?php echo $array['nome']; ?></a></td>
            <td class="uk-text-center"><?php echo $array['email']; ?></td>
        </tr>
		<?php
	}
?>