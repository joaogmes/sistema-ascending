<?php
require_once("Usuario.model.php");
/**
 * 
 */
class LogoutController extends Usuario
{

}

$logout = new LogoutController();
echo $logout->sair();

?>

