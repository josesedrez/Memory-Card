<div id="usuario_home" class="lista_home">
	<br>
	<div class="uk-card uk-card-body uk-width-1-1 uk-text-center azul_escuro">
		<button class="uk-button azul_claro ordem_usuario_home" value="1">A-Z</button>
		<button class="uk-button azul_claro ordem_usuario_home" value="0">ID</button>
	</div>
	<br>
	<span class="busca_usuario_home">Sem Filtro</span>  
	<table class="uk-table uk-table-divider">
	    <thead>
	        <tr>
	        	<th class="uk-table-shrink uk-text-center">Logo</th>
	            <th class="uk-width-small uk-text-center">Nome</th>
	            <th class="uk-width-small uk-text-center">Email</th>
	            <th class="uk-width-small uk-text-center">Opções</th>
	        </tr>
	    </thead>
	    <tbody id="lista_usu_home">   
		<?php	
		$sql="SELECT * FROM usuario WHERE admin='0' ORDER BY nome ASC";
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
	    </tbody>
	</table>
</div>

