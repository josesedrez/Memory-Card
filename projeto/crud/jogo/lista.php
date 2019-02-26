<div id="lista_jogo" class="lista">
	<div class="uk-card uk-card-default uk-card-body uk-width-1-1 uk-text-center">
		<button id="b_cadastro_jogo" class="uk-button azul_claro">Cadastrar jogo</button>
		<button class="uk-button azul_escuro ordem_jogo" value="1">A-Z</button>
		<button class="uk-button azul_escuro ordem_jogo" value="0">ID</button>
	</div>
	<br>
	<span class="busca_jogo">Sem Filtro</span> 
	<table class="uk-table uk-table-middle uk-table-divider">
	    <thead>
	        <tr>
	        	
	        	<th class="uk-width-1-5 uk-text-center capa_lista_jogo">Capa</th>
	            <th class="uk-width-1-5 uk-text-center">Nome</th>
	            <th class="uk-width-1-5 uk-text-center">Descricao</th>
	            <th class="uk-width-1-5 uk-text-center">Categoria(s)</th>
	            <th class="uk-width-1-5 uk-text-center">Opções</th>
	        </tr>
	    </thead>
	    <tbody id="lista_jog">
		<?php
		$sql="SELECT * FROM jogo ORDER BY nome_jogo ASC";
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
	            <td id="tr_jog_nome-<?php echo $array['id_jogo']; ?>" class="uk-text-center"><?php echo $array['nome_jogo']; ?></td>
	            <td id="tr_jog_descricao-<?php echo $array['id_jogo']; ?>" class=""><?php echo $array['descricao_jogo']; ?></td>
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

				    <div id="opcao_jogo-<?php echo $array['id_jogo']; ?>" class="lista_drop uk-text-center">
			        	<button id="b_categoria_jogo-<?php echo $array['id_jogo']; ?>" class="uk-button nova_jog_cat uk-button-secondary">Nova-Cat</button>
			        	<button id="b_jogo-<?php echo $array['id_jogo'].'-'.$array['nome_jogo'].'-'.$array['descricao_jogo']; ?>" class="uk-button edita_jog uk-button-secondary">Edita</button>
			        	<button id="b_img_jogo-<?php echo $array['id_jogo']; ?>" class="uk-button edita_img_jog uk-button-secondary">Muda Capa</button>
	            		<button id="b_jog_id-<?php echo $array['id_jogo']; ?>" class="uk-button exclui_jog uk-button-secondary">Excluir</button>
			      	</div>
	            </td>
	        </tr>
			<?php
		}
		?>
	    </tbody>
	</table>
</div>
