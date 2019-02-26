<div id="edita_usuario" class="formulario uk-text-center uk-card-default uk-card-small uk-card-hover">
	<div class="uk-card-header">
		<h3 class="uk-card-title">Personalizar perfil</h3>
	</div>
	<div class="uk-card-body">
		<form id="edita" action="<?php echo $url2 ?>crud/usuario/edita.php" method="post" enctype="multipart/form-data">
			<br>
			<label>E-mail</label>
			<br>
			<input type="email" name="email" required="" value="<?php echo $_SESSION['email']; ?>">
			<br>
			<label>Nome</label>
			<br>
			<input type="text" name="nome" required="" value="<?php echo $_SESSION['nome']; ?>">
			<br>
			<label>Senha</label>
			<br>
			<input type="password" name="senha" required="" value="<?php echo $_SESSION['senha']; ?>">
			<br><br>
			<input type="hidden" name ="MAX_FILE_SIZE" value="200000">
			<label for="file_img_logo_edita" class="uk-button azul_claro" style="cursor: pointer">Imagem de Usuário</label>
			<br>
			<span>(Caso não queira mudar deixe em branco)</span>
			<br>
			<input type="file" name="img_logo" id="file_img_logo_edita" style="display: none">
			<br>
			<label for="file_img_perfil_edita" class="uk-button azul_claro" style="cursor: pointer">Imagem do Perfil</label>
			<br>
			<span>(Caso não queira mudar deixe em branco)</span>
			<br>
			<input type="file" name="img_perfil" id="file_img_perfil_edita" style="display: none">
			<br><br>
			<button type="submit" class="uk-button uk-button-secondary">Editar</button>
			<a id="b_cancela_form" class="uk-button uk-button-secondary">Cancelar</a>
		</form>
	</div>
</div>
