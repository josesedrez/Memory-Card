<div id="lista_avaliacao" class="lista">
	<div class="uk-card uk-card-default uk-card-body uk-width-1-1 uk-text-center">
		<button class="uk-button azul_escuro ordem_avaliacao" value="1">A-Z</button>
		<button class="uk-button azul_escuro ordem_avaliacao" value="0">ID</button>
	</div>
	<br>
	<span class="busca_avaliacao">Sem Filtro</span>
	<table class="uk-table uk-table-divider">
	    <thead>
	        <tr>
	            <th class="uk-width-1-5 uk-text-center">Autor</th>
	            <th class="uk-width-1-5 uk-text-center">Jogo</th>
	            <th class="uk-width-1-5 uk-text-center">Título</th>
	            <th class="uk-width-1-5 uk-text-center uk-table-expand">Descricao</th>
	            <th class="uk-width-1-5 uk-text-center uk-width-small">Opções</th>
	        </tr>
	    </thead>
	    <tbody id="lista_ava">   
		<?php	
		$sql="SELECT * FROM avaliacao a,usuario u,jogo j WHERE u.id_user=a.id_user AND j.id_jogo=a.id_jogo ORDER BY id_avaliacao DESC";
		$lista_avaliacao=pg_query($conexao,$sql);
		$array_avaliacao=pg_fetch_all($lista_avaliacao);
		foreach ($array_avaliacao as $array) 
		{
			?>
			<tr id="tr_ava_id-<?php echo $array['id_avaliacao']; ?>">
	            <td><?php echo $array['nome']; ?></td>
	            <td><?php echo $array['nome_jogo']; ?></td>
	            <td><?php echo $array['titulo']; ?></td>
	            <td><?php echo $array['descricao_avaliacao']; ?></td>
	            <td class="td_b_ava"><button id="b_ava_id-<?php echo $array['id_avaliacao']; ?>" class="uk-button vermelho">Excluir</button></td>
	        </tr>
			<?php
		}
		?>
	    </tbody>
	</table>
</div>

