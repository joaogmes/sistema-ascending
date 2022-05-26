<?php
require_once 'Cliente.model.php';
/**
 * 
 */
class ClienteController extends Cliente
{
	

}
if(isset($_POST['cadastrar'])){
	$cliente = new ClienteController();
	$cadastrar = $cliente->cadastrar($_POST);
	if(is_numeric($cadastrar)){
		header("Location:../../cliente/ver/".$cadastrar);
	}else{
		echo $cadastrar;	
	}
}
?>

