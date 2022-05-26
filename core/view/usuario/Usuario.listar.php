<?php
require_once './core/class/Usuario.controller.php';
$usuario = new UsuarioController();
$selecao = (isset($uri_array[3])) ? $usuario->ver($uri_array[3]) : $usuario->listar();  
?>
<div class="centro">
	<table>
		<thead>
			<th><p>#</p></th>
			<th><p>nome</p></th>
			<th><p>cpf</p></th>
			<th><p>whatsapp</p></th>
			<th><p>email</p></th>
			<th><p>login</p></th>
			<th><p>setor</p></th>
			<th><p>status</p></th>
		</thead>
		<tbody>

			<?php foreach ($selecao as $usuario) {	?>
				<tr>
					<td><p><?=$usuario['id']?></p></td>
					<td><p><?=$usuario['nome']?></p></td>
					<td><p><?=$usuario['cpf']?></p></td>
					<td><p><?=$usuario['whatsapp']?></p></td>
					<td><p><?=$usuario['email']?></p></td>
					<td><p><?=$usuario['login']?></p></td>
					<td><p><?=$usuario['setor']?></p></td>
					<td><p><?=$usuario['status']?></p></td>
				</tr>
			</tbody>
		<?php } ?>
	</table>
</div>
<div class="center">
	<a href="./usuario">
		<h3>[ voltar ]</h3>
	</a>
</div>