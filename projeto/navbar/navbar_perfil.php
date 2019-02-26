<?php
	if ($_SESSION['admin']==1)
	{
		?>		

			<div class="perfil navbar_perfil uk-width-1-1">

				<div class="navbar_perfil uk-width-1-1 uk-text-center uk-button-group">		
					<button class="b_lista_usuario uk-button uk-width-1-7 uk-button-secondary">Usuarios</button>
					<button class="b_lista_jogo uk-button uk-width-1-7 uk-button-secondary">Jogos</button>
					<button class="b_lista_categoria uk-button uk-width-1-7 uk-button-secondary">Categorias</button>
					<button class="b_lista_avaliacao uk-button uk-width-1-7 uk-button-secondary">Avaliações</button>	
				</div>

			</div>

			<div class="perfil_celular navbar_perfil_celular uk-width-1-1">
				<a class="uk-button uk-button-secondary navbar_perfil_gatilho">Lista</a>
				<div class="navbar_perfil_drop uk-text-center">		
					<a class="b_lista_usuario uk-button branco">Usuarios</a>
					<a class="b_lista_jogo uk-button branco">Jogos</a>
					<a class="b_lista_categoria uk-button branco">Categorias</a>
					<a class="b_lista_avaliacao uk-button branco">Avaliações</a>
				</div>
			</div>
		<?php
	}
	else
	{
		?>		

			<div class="perfil navbar_perfil uk-width-1-1">

				<div class="navbar_perfil uk-width-1-1 uk-text-center uk-button-group">		
					<button class="b_jogo_user uk-button uk-width-1-7 uk-button-secondary">Jogos Avaliados</button>
					<button class="b_avaliacao_user uk-button uk-width-1-7 uk-button-secondary">Avaliações</button>
					<button class="b_edita_usuario uk-button uk-width-1-7 uk-button-secondary">Personalizar</button>	
				</div>

			</div>

			<div class="perfil_celular navbar_perfil_celular uk-width-1-1">
				<a class="uk-button uk-button-secondary navbar_perfil_gatilho">Lista</a>
				<div class="navbar_perfil_drop uk-text-center">		
					<a class="b_jogo_user uk-button uk-width-1-7 branco">Jogos Avaliados</a>
					<a class="b_avaliacao_user uk-button uk-width-1-7 branco">Avaliações</a>
					<a class="b_edita_usuario uk-button uk-width-1-7 branco">Personalizar</a>	
				</div>
			</div>
		<?php
	}
?>
