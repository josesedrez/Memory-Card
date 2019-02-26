<div id="login_usuario" class="uk-text-center uk-card-default uk-card-small uk-card-body uk-card-hover formulario">
	<div class="uk-card-header">
		<h3 class="uk-card-title">Iniciar Sessão</h3>
	</div>
	<div class="uk-card-body">	
		<form id="f_login_usuario" action="<?php echo $url2 ?>crud/usuario/login.php" method="post">
			<br><br><br>
			<label>E-mail</label>
			<br>
			<input type="email" name="email" required="">
			<br>
			<label>Senha</label>
			<br>
			<input type="password" name="senha" required="">
			<br><br>
			<button type="submit" class="uk-button uk-button-secondary">Logar</button>
			<a id="b_cancela_form" class="uk-button uk-button-secondary">Cancelar</a>
		</form>
	</div>
</div>
