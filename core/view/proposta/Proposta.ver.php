<?php
require_once './core/class/Proposta.controller.php';
$proposta = new PropostaController();
$tabela = 'proposta';
// die(var_dump($uri_array));
$selecao = (isset($uri_array[4])) ? $proposta->verPropCliente($uri_array[4], $tabela) : $proposta->verGenerico($uri_array[3], $tabela);  
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
			<th><p>ação</p></th>
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
					<td><a href="./proposta/cadastrar/<?=$proposta['cliente']?>"><button class=" laranja">+ proposta</button></a></td> 
				</tr>
			</tbody>
		<?php } ?>
	</table>
</div>
<div class="center">
	<a href="./proposta/ver/proposta=<?=$proposta['id']?>">
		<h3>Ver Propostas</h3>
	</a>
	<a href="./projeto/ver/proposta=<?=$proposta['id']?>">
		<h3>Ver Projetos</h3>
	</a>
	<a href="./financeiro/ver/proposta=<?=$proposta['id']?>">
		<h3>Ver Financeiro</h3>
	</a>
	<a href="./ocorrencia/ver/proposta=<?=$proposta['id']?>">
		<h3>Ver Ocorrências</h3>
	</a>
	<a href="./proposta">
		<h3>[ voltar ]</h3>
	</a>
</div>