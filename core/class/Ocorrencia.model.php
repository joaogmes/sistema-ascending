<?php
require_once("Conexao.model.php");
/**
 * 
 */
class Ocorrencia extends Conexao
{
	public function cadastroGenerico($dados){
		$tabela = $dados['tabela'];
		$ocorrencia = $dados['ocorrencia'];
		$campos = '(';
		foreach ($dados as $key => $value) {
			if($key!='cadastrar' && $key!='tabela' && $key!='ocorrencia'){
				$campos .= $key." , ";
			}
		}
		$campos = substr($campos, 0,-3);
		$campos .= ') ';

		$valores = 'VALUES (';
		foreach ($dados as $key => $value) {
			if($key!='cadastrar' && $key!='tabela' && $key!='ocorrencia'){
				$valores .= "'".$value."' , ";
			}
		}
		$valores = substr($valores, 0,-3);
		$valores .= ')';

		$conexao = $this->conectar();
		$inserir = "INSERT INTO ".$tabela." ".$campos.$valores;
		$stmt_tabela = $conexao->prepare($inserir);
		try{
			$stmt_tabela->execute();
			$id = $conexao->lastInsertId();
			$registro = $this->registrar($tabela, $id, $ocorrencia, '1');
			return $id;
		}catch(Exception $e){
			return $e->getMessage();
		}
	}

	public function verGenerico($id, $tabela){
		$status = $this->conectar();
		$query = "SELECT * FROM ".$tabela." WHERE id =".$id;
		$stmt_tabela = $status->prepare($query);
		$stmt_tabela->execute();
		$lista = $stmt_tabela->fetchAll();
		return $lista;
	}

	public function verPropCliente($id, $tabela){
		$status = $this->conectar();
		$query = "SELECT * FROM ".$tabela." WHERE cliente =".$id;
		$stmt_tabela = $status->prepare($query);
		$stmt_tabela->execute();
		$lista = $stmt_tabela->fetchAll();
		return $lista;
	}

	public function listarGenerico($tabela){
		$status = $this->conectar();
		$query = "SELECT * FROM ".$tabela;
		$stmt_tabela = $status->prepare($query);
		$stmt_tabela->execute();
		$lista = $stmt_tabela->fetchAll();
		return $lista;
	}
	
	public function registrar($objeto, $chave, $descricao, $responsavel){
		$conexao = $this->conectar();
		$data = date("Y-m-d H:i:s");
		session_start();
		$usuario = $_SESSION['asc_user'];
		$registro = "INSERT INTO ocorrencia (data, objeto, chave, descricao, responsavel, usuario) VALUES ('".$data."','".$objeto."','".$chave."','".$descricao."','".$responsavel."','".$usuario."')";
		$stmt_registro = $conexao->prepare($registro);
		if($stmt_registro->execute()){
			return 'sucesso';
		}else{
			return 'falha no registro da ocorrencia';
		}
	}
}
?>