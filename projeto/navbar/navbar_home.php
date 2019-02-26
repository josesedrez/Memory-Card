<div class="home navbar_perfil uk-width-1-1">

	<div class="navbar_perfil uk-width-1-1 uk-text-center uk-button-group">		
		<button class="b_inicio_home uk-button uk-width-1-7 uk-button-secondary">Início</button>
		<button class="b_jogo_home uk-button uk-width-1-7 uk-button-secondary">Jogos</button>
		<button class="b_usuario_home uk-button uk-width-1-7 uk-button-secondary">Usuarios</button>
		<?php
			if(isset($_SESSION['email']))
			{
		?>
				<button class="b_contato_home uk-button uk-width-1-7 uk-button-secondary">Sobre</button>
		<?php
			}
			else
			{
		?>
				<button class="b_contato_home_block uk-button uk-width-1-7 uk-button-secondary">Sobre</button>
		<?php
			}
		?>
	</div>

</div>

<div class="home_celular navbar_perfil_celular uk-width-1-1">
	<a class="uk-button uk-button-secondary navbar_perfil_gatilho">Lista</a>
	<div class="navbar_perfil_drop uk-text-center">		
		<a class="b_inicio_home uk-button branco">Início</a>
		<a class="b_jogo_home uk-button branco">Jogos</a>
		<a class="b_usuario_home uk-button branco">Usuarios</a>
		<?php
			if(isset($_SESSION['email']))
			{
		?>
				<a class="b_contato_home uk-button branco">Sobre</a>
		<?php
			}
			else
			{
		?>
				<a class="b_contato_home_block uk-button branco">Sobre</a>
		<?php
			}
		?>
	</div>
</div>