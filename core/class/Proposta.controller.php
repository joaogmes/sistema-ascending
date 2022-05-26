<?php
require_once 'Proposta.model.php';
/**
 * 
 */
class PropostaController extends Proposta
{

}

if(isset($_POST['cadastrar'])){
	$proposta = new PropostaController();
	$cadastrar = $proposta->cadastroGenerico($_POST);
	if(is_numeric($cadastrar)){
		header("Location:../../proposta/ver/".$cadastrar);
	}else{
		echo $cadastrar;	
	}
}
?>

