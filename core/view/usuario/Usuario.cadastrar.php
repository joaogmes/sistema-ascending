<style type="text/css">label{display:none}</style>
<form action="./core/class/Usuario.controller.php" method="POST">
	<input type="hidden" name="cadastrar" value="sim">
	<label for="nome">Nome:</label>
	<input type="text" name="nome" id="nome" placeholder="Nome Completo:" required autofocus>
	<label for="cpf">CPF:</label>
	<input type="text" name="cpf" id="cpf" placeholder="CPF:"> 
	<label for="whatsapp">WhatsApp</label>
	<input type="tel" name="whatsapp" id="whatsapp" placeholder="WhatsApp:"> 
	<label for="email">E-mail:</label>
	<input type="mail" name="email" id="email" placeholder="E-mail:"> 
	<label for="setor">Setor:</label>
	<input ttype="number" min=1 max=5 name="setor" id="setor" placeholder="Setor de trabalho" value=1>
	<label for="status">Status:</label>
	<input type="text" name="status" id="status" placeholder="Status do usuário"> 
	<label for="login">Login:</label>
	<input type="text" name="login" id="login" placeholder="Login do sistema:" required>
	<label for="senha">Senha:</label>
	<input type="password" name="senha" id="senha" placeholder="Senha de acesso:" required>
	<button>Cadastrar</button>
</form>
<div class="center">
	<a href="./usuario">
		<h3>[ voltar ]</h3>
	</a>
</div>