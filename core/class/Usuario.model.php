<?php
require_once("Ocorrencia.model.php");
/**
 * 
 */
class Usuario extends Ocorrencia
{

	private $nome;
	private $cpf;
	private $whatsapp;
	private $email;
	private $login;
	private $senha;
	private $setor;
	private $status;
	
	public function cadastrar($dados){
		$nome = $dados['nome'];
		$cpf = $dados['cpf'];
		$whatsapp = $dados['whatsapp'];
		$email = $dados['email'];
		$login = $dados['login'];
		$senha = $dados['senha'];
		$setor = $dados['setor'];
		$status = $dados['status'];

		$inserir = "INSERT INTO usuario (nome, cpf, whatsapp, email, login, senha, setor, status) VALUES (
		'".$nome."','".$cpf."','".$whatsapp."','".$email."','".$login."','".$senha."',".$setor.",'".$status."')";
		$conexao = $this->conectar();
		$stmt_usuario = $conexao->prepare($inserir);
		try{
			$stmt_usuario->execute();
			$id = $conexao->lastInsertId();
			$registro = $this->registrar('usuario', $id, 'Usuário cadastrado', '1');
			return $id;
		}catch(Exception $e){
			return $e->getMessage();
		}
	}

	public function ver($id){
		$status = $this->conectar();
		$query = "SELECT * FROM usuario WHERE id =".$id;
		$stmt_usuario = $status->prepare($query);
		$stmt_usuario->execute();
		$lista = $stmt_usuario->fetchAll();
		return $lista;
	}

	public function listar(){
		$status = $this->conectar();
		$query = "SELECT * FROM usuario";
		$stmt_usuario = $status->prepare($query);
		$stmt_usuario->execute();
		$lista = $stmt_usuario->fetchAll();
		return $lista;
	}

	public function entrar($login, $senha){
		// $conexao = new Conexao;
		$status = $this->conectar();
		if($status!='erro'){
			$query = "SELECT * FROM usuario where login = '".$login."' and senha = '".$senha."' ORDER BY id ASC LIMIT 1";
			$stmt = $status->prepare($query);
			$stmt->execute();
			if($stmt->rowCount()<1){
				$retorno = null;
			}else{
				$retorno = $stmt->fetch(PDO::FETCH_ASSOC);
			}
			return $retorno;
		}
	}

	public function sair(){
		session_start();
		session_unset();
		session_destroy();
		header("Location: ../../");
	}


}
?>
