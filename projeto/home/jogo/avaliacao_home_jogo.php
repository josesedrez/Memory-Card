<div id="avaliacao_home_jogo" class="lista_home">
	<br>
	<?php
		if(isset($_SESSION['email']) && $_SESSION['admin']==0)
		{
		?>
			<button class="b_cadastro_avaliacao uk-button azul_claro">Criar Avaliação</button>
		<?php
		}
	
	?>
	<table class="uk-table uk-table-divider">
	    <thead>
	        <tr>
	            <th class="uk-width-1-3 uk-text-center">Autor</th>
	            <th class="uk-width-1-3 uk-text-center">Título</th>
	            <th class="uk-width-1-3 uk-text-center uk-table-expand">Descricao</th>
	        </tr>
	    </thead>
	    <tbody id="ava_home_jogo">   
			
	    </tbody>
	</table>
</div>

