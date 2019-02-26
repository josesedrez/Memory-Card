<?php
	require_once('../../inc/conexao.php');
	$user=$_POST['user'];

		$sql="SELECT * FROM avaliacao a, jogo j WHERE a.id_jogo=j.id_jogo AND a.id_user='$user'";
		$lista_avaliacao=pg_query($conexao,$sql);
		$array_avaliacao=pg_fetch_all($lista_avaliacao);
		foreach ($array_avaliacao as $array) 
		{
			?>
			<tr id="tr_ava_id-<?php echo $array['id_avaliacao']; ?>">
	            <td><?php echo $array['nome_jogo']; ?></td>
	            <td><?php echo $array['titulo']; ?></td>
	            <td><?php echo $array['descricao_avaliacao']; ?></td>
	        </tr>
			<?php
		}
		?>

