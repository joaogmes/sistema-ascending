<?php
require_once("Usuario.model.php");
/**
 * 
 */
class LoginController extends Usuario
{

}

if(isset($_POST)){
	$login = new LoginController();
	$usuario = $_REQUEST['login'];
	$senha = $_REQUEST['senha'];
	$consulta = $login->entrar($usuario, $senha);
	// die(var_dump($consulta));
	if($consulta!=null){
		session_start();
		$_SESSION['asc_user'] = $consulta['id'];
		header("Location: ../../menu");
	}else{
		header("Location: ../../login/erro");
	}
}
?>