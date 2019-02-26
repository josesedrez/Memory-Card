<?php
	require_once('../../inc/conexao.php');
	$ordem=$_POST['ordem'];
	$filtro=$_SESSION['filtro_ava'];
	$sql="SELECT * FROM avaliacao a,usuario u,jogo j WHERE u.id_user=a.id_user AND j.id_jogo=a.id_jogo AND ";
	$sql.=$filtro;
	if($ordem==0)
	{
		$sql.=" ORDER BY id_avaliacao DESC";
	}
	else
	{
		$sql.=" ORDER BY titulo ASC";
	}
	$lista_avaliacao=pg_query($conexao,$sql);
	$array_avaliacao=pg_fetch_all($lista_avaliacao);
	foreach ($array_avaliacao as $array) 
		{
			?>
			<tr id="tr_ava_id-<?php echo $array['id_avaliacao']; ?>">
	            <td><?php echo $array['nome']; ?></td>
	            <td><?php echo $array['nome_jogo']; ?></td>
	            <td><?php echo $array['titulo']; ?></td>
	            <td><?php echo $array['descricao_avaliacao']; ?></td>
	            <td class="td_b_ava"><button id="b_ava_id-<?php echo $array['id_avaliacao']; ?>" class="uk-button vermelho">Excluir</button></td>
	        </tr>
			<?php
		}
?>