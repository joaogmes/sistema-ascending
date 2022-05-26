<?=var_dump($uri_array)?>
<form action="./core/class/Proposta.controller.php" method="POST">
	<input type="hidden" name="cadastrar" value="sim">
	<input type="hidden" name="tabela" value="proposta">
	<input type="tel" name="cliente" id="cliente" placeholder="CNPJ:" required autofocus>
	<input type="tel" name="valor" id="valor" placeholder="CPF:" required autofocus>
	<input type="text" name="descricao" id="descricao" placeholder="Nome Completo:" required autofocus>
	<input type="text" name="plano" id="plano" placeholder="Razão Social:" required autofocus>
	<button>Cadastrar</button>
</form>
<div class="center">
	<a href="./usuario">
		<h3>[ voltar ]</h3>
	</a>
</div>