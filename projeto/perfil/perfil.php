<div id="corpo_perfil">
	<div class="img_perfil uk-width-1-1" style="background-image: url('http://localhost/projeto/assets/img/<?php echo $_SESSION['img_perfil']; ?>')">
			<img class="uk-width-1-6 logo uk-border-circle" src="<?php echo $url2; ?>assets/img/<?php echo $_SESSION['img_logo']; ?>" onerror="this.src='<?php echo $url2; ?>assets/img/logo_default.png'">
			<div class="uk-width-1-2 nome_perfil">
				<p><?php echo $_SESSION['nome']; ?></p>
			</div>
	</div>
		<?php
		if ($_SESSION['admin']==1){
			?>		
				<div class="navbar_perfil uk-width-1-1 uk-text-center uk-button-group">		
					<button id="b_lista_usuario" class="uk-button uk-width-1-7 uk-button-secondary">Usuarios</button>
					<button id="b_lista_jogo" class="uk-button uk-width-1-7 uk-button-secondary">Jogos</button>
					<button id="b_lista_categoria" class="uk-button uk-width-1-7 uk-button-secondary">Categorias</button>
					<button id="b_lista_avaliacao" class="uk-button uk-width-1-7 uk-button-secondary">Avaliações</button>
					<button id="b_lista_dica" class="uk-button uk-width-1-7 uk-button-secondary">Dicas</button>
					<button id="b_lista_post" class="uk-button uk-width-1-7 uk-button-secondary">Posts</button>
					<button id="b_edita_usuario" class="uk-button uk-width-1-7 uk-button-secondary">Personalizar</button>		
				</div>		

				<div class="centro">
					<?php
						require_once($url.'crud/usuario/lista.php');
						require_once($url.'crud/jogo/lista.php');
						require_once($url.'crud/categoria/lista.php');
						require_once($url.'crud/avaliacao/lista.php');
						require_once($url.'crud/dica/lista.php');
						require_once($url.'crud/post/lista.php');
						require_once($url.'crud/usuario/form_edita.php');
					?>	
				</div>
			<?php
		}
		else
		{
			?>
				<div class="navbar_perfil uk-width-1-1 uk-text-center uk-button-group">
					<button class="uk-button uk-width-1-7 uk-button-secondary">Repertório</button>
					<button class="uk-button uk-width-1-7 uk-button-secondary">Meus Feedbacks</button>
					<button class="uk-button uk-width-1-7 uk-button-secondary">Minhas dicas</button>
					<button class="uk-button uk-width-1-7 uk-button-secondary">Meus posts</button>
					<button class="uk-button uk-width-1-7 uk-button-secondary">Seguindo</button>
					<button id="b_edita_usuario" class="uk-button uk-width-1-7 uk-button-secondary">Personalizar</button>
				</div>

				<div class="centro">
					<?php
						require_once($url.'crud/usuario/form_edita.php');
					?>	
				</div>
			<?php
		}
			?>
</div>