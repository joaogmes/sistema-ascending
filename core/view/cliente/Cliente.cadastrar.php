<style type="text/css">label{display:none}</style>
<form action="./core/class/Cliente.controller.php" method="POST">
	<input type="hidden" name="cadastrar" value="sim">
	<input type="hidden" name="data" value="<?=date('Y-m-d H:i:s')?>">
	<input type="tel" name="cnpj" id="cnpj" placeholder="CNPJ:" required autofocus>
	<input type="tel" name="cpf" id="cpf" placeholder="CPF:" required>
	<input type="text" name="nome" id="nome" placeholder="Nome Completo:" required>
	<input type="text" name="razaosocial" id="razaosocial" placeholder="Razão Social:" required>
	<input type="text" name="endereco" id="endereco" placeholder="Endereço:" required>
	<input type="tel" name="telefone" id="telefone" placeholder="Telefone:" required>
	<input type="text" name="email" id="email" placeholder="E-mail:" required>
	<button class="laranja">Cadastrar »</button>
</form>
<div class="center">
	<a href="./cliente">
		<button>← Voltar</button>
	</a>
</div>