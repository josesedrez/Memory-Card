<div id="lista_categoria" class="lista">
	<div class="uk-card uk-card-default uk-card-body uk-width-1-1 uk-text-center">
		<button id="b_cadastro_categoria" class="uk-button azul_claro">Criar Categoria</button>
		<button class="uk-button azul_escuro ordem_categoria" value="1">A-Z</button>
		<button class="uk-button azul_escuro ordem_categoria" value="0">ID</button>
	</div>
	<br>
	<span class="busca_categoria">Sem Filtro</span>  
	<table class="uk-table uk-table-divider">
	    <thead>
	        <tr>
	            <th class="uk-table-expand">Nome</th>
	            <th class="uk-width-medium uk-text-center">Opções</th>
	        </tr>
	    </thead>
	    <tbody id="lista_cat">
		<?php	
		$sql="SELECT * FROM categoria ORDER BY id_categoria DESC";
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
	    </tbody>
	</table>
</div>

