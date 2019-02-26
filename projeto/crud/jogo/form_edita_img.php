<div id="edita_img_jogo" class="formulario uk-text-center uk-card-default uk-card-small uk-card-hover">
	<div class="uk-card-header">
		<h3 class="uk-card-title">Editar Capa do Jogo</h3>
	</div>
	<div class="uk-card-body">
		<form id="f_edita_img_jogo" action="<?php echo $url2 ?>crud/jogo/edita_img.php" method="post" enctype="multipart/form-data">
		<br><br>
		<input type="hidden" id="input_id_img_jogo" name="id_jogo">
		<label for="file_img_capa" class="btn btn-secondary" style="cursor: pointer">Imagem de Capa</label>
		<br>
		<input type="file" name="img_capa" id="file_img_capa" style="display: none">
		<br>
		<input type="hidden" name ="MAX_FILE_SIZE" value="200000">
		<br><br>
		<button type="submit" class="uk-button uk-button-secondary">Editar</button>
		<a id="b_cancela_form" class="uk-button uk-button-secondary">Cancelar</a>
	</form>
	</div>
</div>