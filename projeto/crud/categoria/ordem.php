<?php
	require_once('../../inc/conexao.php');
	$ordem=$_POST['ordem'];
	$filtro=$_SESSION['filtro_cat'];
	$sql="SELECT * FROM categoria WHERE ";
	$sql.=$filtro;
	if($ordem==0)
	{
		$sql.=" ORDER BY id_categoria DESC";
	}
	else
	{
		$sql.=" ORDER BY nome_categoria ASC";
	}	
	$lista_categoria=pg_query($conexao,$sql);
	$array_categoria=pg_fetch_all($lista_categoria);
	foreach ($array_categoria as $array) 
		{
			?>
			<tr id="tr_cat_id-<?php echo $array['id_categoria']; ?>">
	            <td id="tr_cat_nome-<?php echo $array['id_categoria']; ?>" class="uk-text-left"><?php echo $array['nome_categoria']; ?></td>
	            <td class="td_b_cat uk-text-center centralizar">
	            	<a id="gatilho_categoria-<?php echo $array['id_categoria']; ?>" class="lista_categoria_gatilho"><div uk-icon="more-vertical"></div></a> 
				    <div id="opcao_categoria-<?php echo $array['id_categoria']; ?>" class="lista_drop uk-text-center">
			        	<button id="b_categoria-<?php echo $array['id_categoria'].'-'.$array['nome_categoria']; ?>" class="uk-button edita_cat uk-button-secondary">Edita</button>
	            		<button id="b_cat_id-<?php echo $array['id_categoria']; ?>" class="uk-button exclui_cat uk-button-secondary">Excluir</button>
			      	</div>
		      	</td>
	        </tr>
			<?php
		}
?>