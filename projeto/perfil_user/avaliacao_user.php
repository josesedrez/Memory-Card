<div id="avaliacao_user" class="lista">
	<div class="uk-card uk-card-default uk-card-body uk-width-1-1 uk-text-center">
		
	</div>
	<br>
	<table class="uk-table uk-table-divider">
	    <thead>
	        <tr>
	        	<th class="uk-width-1-5 uk-text-center">Jogo</th>
	            <th class="uk-width-1-5 uk-text-center">Título</th>
	            <th class="uk-width-1-5 uk-text-center uk-table-expand">Descricao</th>
	    	</tr>
	    </thead>
	    <tbody id="lista_ava">   
		<?php	
		$usuario=$_SESSION['id_user'];
		$sql="SELECT * FROM avaliacao a,jogo j WHERE j.id_jogo=a.id_jogo AND a.id_user='$usuario' ORDER BY id_avaliacao DESC";
		$lista_avaliacao=pg_query($conexao,$sql);
		$array_avaliacao=pg_fetch_all($lista_avaliacao);
		foreach ($array_avaliacao as $array) 
		{
			?>
			<tr id="tr_ava_id-<?php echo $array['id_avaliacao']; ?>">
	            <td><?php echo $array['nome_jogo']; ?></td>
	            <td><?php echo $array['titulo']; ?></td>
	            <td><?php echo $array['descricao_avaliacao']; ?></td>
	        </tr>
			<?php
		}
		?>
	    </tbody>
	</table>
</div>

