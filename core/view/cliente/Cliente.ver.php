<?php
require_once './core/class/Cliente.controller.php';
$cliente = new clienteController();
$selecao = (isset($uri_array[3])) ? $cliente->ver($uri_array[3]) : $cliente->listar();  
?>
<div class="centro">
	<table>
		<thead>
			<th><p>#</p></th>
			<th><p>Razão Social</p></th>
			<th><p>CNPJ</p></th>
			<th><p>Nome</p></th> 
			<th><p>CPF</p></th>
			<th><p>Endereço</p></th> 
			<th><p>Telefone</p></th>
			<th><p>E-mail</p></th>
			<th><p>Data</p></th> 
		</thead>
		<tbody>

			<?php foreach ($selecao as $cliente) {	?>
				<tr>
					<td><p><?=$cliente['id']?></p></td>
					<td><p><?=$cliente['razaosocial']?></p></td>
					<td><p><?=$cliente['cnpj']?></p></td>
					<td><p><?=$cliente['nome']?></p></td>
					<td><p><?=$cliente['cpf']?></p></td>
					<td><p><?=$cliente['endereco']?></p></td>
					<td><p><?=$cliente['telefone']?></p></td>
					<td><p><?=$cliente['email']?></p></td>
					<td><p><?=$cliente['data']?></p></td>
				</tr>
			</tbody>
		<?php } ?>
	</table>
</div>
<div class="center inline">
	<div class="inline">
		<a href="./proposta/ver/cliente/<?=$cliente['id']?>">
			<button class="laranja">Ver Propostas »</button>
		</a>
		<a href="./projeto/ver/cliente/<?=$cliente['id']?>">
			<button class="laranja">Ver Projetos »</button>
		</a>
		<a href="./financeiro/ver/cliente/<?=$cliente['id']?>">
			<button class="laranja">Ver Financeiro »</button>
		</a>
		<a href="./ocorrencia/ver/cliente/<?=$cliente['id']?>">
			<button class="laranja">Ver Ocorrências »</button>
		</a>
	</div>
	<a href="./cliente">
		<button>← Voltar</button>
	</a>
</div>