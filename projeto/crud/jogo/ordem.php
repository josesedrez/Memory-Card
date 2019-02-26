<?php
	require_once('../../inc/conexao.php');
	$ordem=$_POST['ordem'];
	$filtro=$_SESSION['filtro_jogo'];
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
				
				<td class="uk-text-center"><img class="uk-preserve-width imagem_capa" src="<?php echo $url2; ?>assets/img/<?php echo $array['img_capa']; ?>" onerror="this.src='<?php echo $url2; ?>assets/img/capa_default.png'" width="40" alt=""></td>
	            <td class="uk-text-center"><?php echo $array['nome_jogo']; ?></td>
	            <td class=""><?php echo $array['descricao_jogo']; ?></td>
	            <td id="jog_cat" class="uk-text-center">
        	<?php
        		foreach ($array_categorias as $categorias)
        		{
        			echo $categorias['nome_categoria'].', ';
        		}
        	?>
	            </td>
	            <td class="td_b_jog uk-text-center centralizar">
	            	<a id="gatilho_jogo-<?php echo $array['id_jogo']; ?>" class="lista_jogo_gatilho"><div uk-icon="more-vertical"></div></a> 

				    <div id="opcao_jogo-<?php echo $array['id_jogo']; ?>" class="lista_jogo_drop uk-text-center">
			        	<button id="b_categoria_jogo-<?php echo $array['id_jogo']; ?>" class="uk-button nova_jog_cat uk-button-secondary">Nova-Cat</button>
	            		<button id="b_jog_id-<?php echo $array['id_jogo']; ?>" class="uk-button exclui_jog uk-button-secondary">Excluir</button>
			      	</div>
	            </td>
	        </tr>
			<?php
		}
?>