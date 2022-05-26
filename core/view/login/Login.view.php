<?php
	if(isset($uri_array[2]) && $uri_array[2]=='erro'){
		$erro = "Credenciais incorretas! Insira os dados de login corretamente.";
	}else{
		$erro='';
	}
?>
<form action="./core/class/Login.controller.php" method="POST">
	<p><?=$erro?></p>
	<!-- <label for="login">Login</label> -->
	<input type="text" name="login" id="login" placeholder="Login: "  required>
	<!-- <label for="senha">Senha</label> -->
	<input type="password" name="senha" id="senha" placeholder="Senha:"  required>
	<button>Entrar →</button>
</form>