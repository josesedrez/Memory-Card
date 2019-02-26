<div id="jogo_home" class="lista_home">
	<div class="uk-card uk-card-body uk-width-1-1 uk-text-center azul_escuro">
		<button class="uk-button azul_claro ordem_jogo_home" value="1">A-Z</button>
		<button class="uk-button azul_claro ordem_jogo_home" value="0">ID</button>
	</div>
	<br>
	<span class="busca_jogo_home">Sem Filtro</span> 
	<table class="uk-table uk-table-middle uk-table-divider">
	    <thead>
	        <tr>
	        	
	        	<th class="uk-width-1-4 uk-text-center capa_lista_jogo">Capa</th>
	            <th class="uk-width-1-4 uk-text-center">Nome</th>
	            <th class="uk-width-1-4 uk-text-center">Descricao</th>
	            <th class="uk-width-1-4 uk-text-center">Categoria(s)</th>
	        </tr>
	    </thead>
	    <tbody id="lista_jog_home">   
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
	    </tbody>
	</table>
</div>