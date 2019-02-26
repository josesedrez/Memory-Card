<?php
	require_once('../../inc/conexao.php');
	$ordem=$_POST['ordem'];
	$filtro=$_SESSION['filtro_jogo_home'];
	$sql="SELECT * FROM jogo WHERE ";
	$sql.=$filtro;
	if($ordem==0)
	{
		$sql.=" ORDER BY id_jogo DESC";
	}
	else
	{
		$sql.=" ORDER BY nome_jogo ASC";
	}
	$lista_jogo=pg_query($conexao,$sql);
	$array_jogo=pg_fetch_all($lista_jogo);
	foreach ($array_jogo as $array) 
		{
			$id_jogo=$array['id_jogo'];
			$sql="SELECT * FROM categoria c,jogo_categoria jc WHERE jc.id_jogo='$id_jogo' AND jc.id_categoria=c.id_categoria";
			$pega_categorias=pg_query($conexao,$sql);
			$array_categorias=pg_fetch_all($pega_categorias);

			?>
			<tr id="tr_jog_id-<?php echo $array['id_jogo']; ?>">
				
				<td class="uk-text-center capa_lista_jogo"><img class="uk-preserve-width imagem_capa" src="<?php echo $url2; ?>assets/img/<?php echo $array['img_capa']; ?>" onerror="this.src='<?php echo $url2; ?>assets/img/capa_default.png'" width="40" alt=""></td>
	            <td class="uk-text-center"><a id="ava_jog-<?php echo $array['id_jogo']; ?>" class="ve_avaliacao_jogo a_home"><?php echo $array['nome_jogo']; ?></a></td>
	            <td class=""><?php echo $array['descricao_jogo']; ?></td>
	            <td id="jog_cat" class="uk-text-center">
        	<?php
        		foreach ($array_categorias as $categorias)
        		{
        			echo $categorias['nome_categoria'].', ';
        		}
        	?>
	            </td>
	        </tr>
			<?php
		}
?>