<div id="edita_jogo" class="formulario uk-text-center uk-card-default uk-card-small uk-card-hover">
	<div class="uk-card-header">
		<h3 class="uk-card-title">Editar Jogo</h3>
	</div>
	<div class="uk-card-body">
		<form id="f_edita_jogo">
		<br>
		<input type="hidden" id="input_id_jogo" name="id_jogo">
		<label>Nome do Jogo</label>
		<br>
		<input type="text" id="input_nome_jogo" name="nome_jogo" required="">
		<br>
		<label>Descrição</label>
		<br>
		<textarea name="descricao_jogo" id="input_descricao_jogo" required="" cols="50" rows="10"></textarea>
		<br>
		<button type="submit" class="uk-button uk-button-secondary">Editar</button>
		<a id="b_cancela_form" class="uk-button uk-button-secondary">Cancelar</a>
	</form>
	</div>
</div>
