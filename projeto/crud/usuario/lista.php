<div id="lista_usuario" class="lista">
	<div class="uk-card uk-card-default uk-card-body uk-width-1-1 uk-text-center">
		<button class="uk-button azul_escuro ordem_usuario" value="1">A-Z</button>
		<button class="uk-button azul_escuro ordem_usuario" value="0">ID</button>
	</div>
	<br>
	<span class="busca_usuario">Sem Filtro</span>  
	<table class="uk-table uk-table-divider">
	    <thead>
	        <tr>
	        	<th class="uk-table-shrink uk-text-center">Logo</th>
	            <th class="uk-width-small uk-text-center">Nome</th>
	            <th class="uk-width-small uk-text-center">Email</th>
	            <th class="uk-width-small uk-text-center">Opções</th>
	        </tr>
	    </thead>
	    <tbody id="lista_usu">   
		<?php	
		$sql="SELECT * FROM usuario WHERE admin='0' ORDER BY nome ASC";
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
	    </tbody>
	</table>
</div>

