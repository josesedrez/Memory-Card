<?php
	require_once('../../inc/conexao.php');
	$ordem=$_POST['ordem'];
	$filtro=$_SESSION['filtro_user'];
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
			<td class="uk-text-center"><img class="uk-preserve-width imagem_logo" src="<?php echo $url2; ?>assets/img/<?php echo $array['img_logo']; ?>" onerror="this.src='<?php echo $url2; ?>assets/img/logo_default.png'" width="40" alt=""></td>
            <td class="uk-text-center"><?php echo $array['nome']; ?></td>
            <td class="uk-text-center"><?php echo $array['email']; ?></td>
            <td class="td_b_usu uk-text-center"><button id="b_usu_id-<?php echo $array['id_user']; ?>" class="uk-button vermelho">Excluir</button></td>
        </tr>
		<?php
	}
?>