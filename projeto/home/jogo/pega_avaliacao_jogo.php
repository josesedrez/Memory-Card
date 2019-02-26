<?php
	require_once('../../inc/conexao.php');
	$jogo=$_POST['jogo'];
	$_SESSION['jogo']=$jogo;

		$sql="SELECT * FROM avaliacao a, usuario u WHERE a.id_user=u.id_user AND a.id_jogo='$jogo'";
		$lista_avaliacao=pg_query($conexao,$sql);
		$array_avaliacao=pg_fetch_all($lista_avaliacao);
		foreach ($array_avaliacao as $array) 
		{
			?>
			<tr id="tr_ava_id-<?php echo $array['id_avaliacao']; ?>">
	            <td><?php echo $array['nome']; ?></td>
	            <td><?php echo $array['titulo']; ?></td>
	            <td><?php echo $array['descricao_avaliacao']; ?></td>
	        </tr>
			<?php
		}
		?>

