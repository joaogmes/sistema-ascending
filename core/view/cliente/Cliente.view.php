<?php
require_once './core/class/Cliente.controller.php';
$cliente = new clienteController();
$pesquisa = (isset($_POST['pesquisa'])) ? $_POST['nome'] : null;
if($pesquisa){
	$selecao = $cliente->pesquisar($pesquisa);
}else{
	$selecao = (isset($uri_array[3])) ? $cliente->ver($uri_array[3]) : $cliente->listar();  
}
?>
<div class="center inline">
	<a href="./cliente/cadastrar">
		<button class="laranja">+ Cadastrar Cliente</button>
	</a>
	<form class="" action="" method="POST">
		<input type="hidden" name="pesquisa" value=1>
		<input type="text" name="nome" placeholder="Insira o nome do cliente para pesquisar">
		<button>» Pesquisar</button>
	</form>
</div>
<div class="centro">
	<table>
		<thead>
			<th><p>#</p></th>
			<th><p>Nome</p></th>
			<th><p>Razão Social</p></th>
			<th><p>CNPJ</p></th>
			<!-- <th><p>CPF</p></th>
			<th><p>Endereço</p></th> -->
			<th><p>Telefone</p></th>
			<th><p>E-mail</p></th>
			<!-- <th><p>Data</p></th> -->
			<th><p>Ver</p></th>

		</thead>
		<tbody>

			<?php foreach ($selecao as $cliente) {	?>
				<tr>
					<td><p><?=$cliente['id']?></p></td>
					<td><p><?=$cliente['nome']?></p></td>
					<td><p><?=$cliente['razaosocial']?></p></td>
					<td><p><?=$cliente['cnpj']?></p></td>
					<!-- <td><p><?=$cliente['cpf']?></p></td>
					<td><p><?=$cliente['endereco']?></p></td> -->
					<td><p><?=$cliente['telefone']?></p></td>
					<td><p><?=$cliente['email']?></p></td>
					<!-- <td><p><?=$cliente['data']?></p></td> -->
					<td><a href="./cliente/ver/<?=$cliente['id']?>"><button class="btn-small laranja">»</button></a></td>
				</tr>
			</tbody>
		<?php } ?>
	</table>
</div>
<div class="center">
	<a href="./">
		<button>← voltar</button>
	</a>
</div>