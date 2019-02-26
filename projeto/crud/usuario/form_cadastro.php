<div id="cadastro_usuario" class="formulario uk-text-center  uk-card-default uk-card-small uk-card-hover">
	<div class="uk-card-header">
		<h3 class="uk-card-title">Cadastrar-se</h3>
	</div>
	<div class="uk-card-body">		
		<form id="f_cadastro_usuario" action="<?php echo $url2 ?>crud/usuario/cadastro.php" method="post" enctype="multipart/form-data">
			<br>
			<label>E-mail</label>
			<br>
			<input type="email" name="email" required="">
			<br>
			<label>Nome</label>
			<br>
			<input type="text" name="nome" required="">
			<br>
			<label>Senha</label>
			<br>
			<input type="password" name="senha" required="">
			<br>
			<input type="hidden" name ="MAX_FILE_SIZE" value="200000">
			<br>
			<label for="file_img_logo_cadastro" class="uk-button azul_claro" style="cursor: pointer">Imagem de Usuário</label>
			<br>
			<span>(Caso não queira mudar deixe em branco)</span>
			<br>
			<input type="file" name="img_logo" id="file_img_logo_cadastro" style="display: none">
			<br><br>
			<button type="submit" class="uk-button uk-button-secondary">Cadastrar</button>
			<a id="b_cancela_form" class="uk-button uk-button-secondary">Cancelar</a>
		</form>
	</div>
</div>
