<?php
require_once 'Usuario.model.php';
/**
 * 
 */
class UsuarioController extends Usuario
{
	
}

if(isset($_POST['cadastrar'])){
	$usuario = new UsuarioController();
	$cadastrar = $usuario->cadastrar($_POST);
	if(is_numeric($cadastrar)){
		header("Location:../../usuario/listar/".$cadastrar);
	}else{
		echo $cadastrar;	
	}
}
?>

