<?php
/**
 $path[
	0 => Tabela, Login/Logout ou Menus
	1 => Ação (visualizar, cadastrar, etc)
	2 => Id ou status
]
 **/
class Rotas
{
	/**
 	Vamos verificar qual a URL requisitada.
 	Se o usuário não estiver logado (sem a sessão com asc_user) ele receberá a tela de login.
 	Caso já esteja logado vamos quebrar a URL tem chaves dentro de um array e separar em níveis
 	**/
 	function path($url){	
 		if(!isset($_SESSION)){session_start();}
 		if (!(isset($_SESSION)) || !(isset($_SESSION['asc_user']))){
 			$caminho = './core/view/login/Login.view.php';
 		}else{
 			$path = explode( '/' , substr($url, 1) );

 			$tabela = isset($path[0]) ? $path[0] : '' ;
 			$acao = isset($path[1]) ? $path[1] : '' ;
 			$valor = isset($path[2]) ? $path[2] : '' ;

 			if(isset($path[2])){
 				$caminho = "./core/view/".$tabela.'/'.ucfirst($tabela).".".$acao.".php";
 			}else if(isset($path[1])){
 				$caminho = "./core/view/".$tabela.'/'.ucfirst($tabela).".".$acao.".php";
 			}else if(isset($path[0])){
 				if($tabela=='' || $tabela == 'menu'){
 					$caminho = "./core/partials/menu.php";
 				}else if($tabela =='logout'){
 					$caminho = './core/class/'.ucfirst($tabela).'.controller.php';
 				}else{
 					$caminho = "./core/view/".$tabela.'/'.ucfirst($tabela).".view.php";
 				}
 			}else{
 				$caminho = "./core/partials/menu.php";
 			}
		}
		// echo "OLD: ".$caminho."<br>";
		if(!file_exists($caminho)){
			// echo "Rota inexistente<br>";
			$caminho = "./core/partials/menu.php";
		}
		// echo $caminho;
		return $caminho;
	}
}

?>