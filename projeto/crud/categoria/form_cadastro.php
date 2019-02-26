<div id="cadastro_categoria" class="uk-text-center uk-width-1-1 uk-card uk-card-default uk-card-large uk-card-hover" style="float: left;">
	<form id="f_cadastro_categoria" action="<?php echo $url2 ?>crud/categoria/cadastro.php" method="post">
		<br>
		<label>Nome da Categoria</label>
		<br>
		<input type="text" name="nome_cat" required="">
		<br>
		<button type="submit">Cadastrar</button>
	</form>
	<button id="sair_form_cat">Cancelar</button>
</div>
