<?php
require_once './core/class/Proposta.controller.php';
$proposta = new PropostaController();
$tabela = 'proposta';
$selecao = (isset($uri_array[3])) ? $proposta->verGenerico($uri_array[3], $tabela) : $proposta->listarGenerico($tabela);  
?>
<div class="centro">
	<table>
		<thead>
			<th><p>#</p></th>
			<th><p>data</p></th>
			<th><p>cliente</p></th>
			<th><p>valor</p></th>
			<th><p>descricao</p></th>
			<th><p>plano</p></th>
			<th><p>Ver</p></th>
		</thead>
		<tbody>

			<?php foreach ($selecao as $proposta) {	?>
				<tr>
					<td><p><?=$proposta['id']?></p></td>
					<td><p><?=$proposta['data']?></p></td>
					<td><p><?=$proposta['cliente']?></p></td>
					<td><p><?=$proposta['valor']?></p></td>
					<td><p><?=$proposta['descricao']?></p></td>
					<td><p><?=$proposta['plano']?></p></td>
					<td><a href="./proposta/ver/<?=$proposta['id']?>"><button class="btn-small laranja">»</button></a></td>
				</tr>
			</tbody>
		<?php } ?>
	</table>
</div>
<div class="center">
	<a href="./">
		<button>← Voltar</button>
	</a>
</div>