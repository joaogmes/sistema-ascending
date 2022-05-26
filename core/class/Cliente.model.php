<?php
require_once("Ocorrencia.model.php");
/**
 * 
 */
class Cliente extends Ocorrencia
{
	
	public function cadastrar($dados){

		$campos = '(';
		foreach ($dados as $key => $value) {
			if($key!='cadastrar'){
				$campos .= $key." , ";
			}
		}
		$campos = substr($campos, 0,-3);
		$campos .= ') ';

		$valores = 'VALUES (';
		foreach ($dados as $key => $value) {
			if($key!='cadastrar'){
				$valores .= "'".$value."' , ";
			}
		}
		$valores = substr($valores, 0,-3);
		$valores .= ')';

		$conexao = $this->conectar();
		$inserir = "INSERT INTO cliente ".$campos.$valores;
		$stmt_cliente = $conexao->prepare($inserir);
		try{
			$stmt_cliente->execute();
			$id = $conexao->lastInsertId();
			$registro = $this->registrar('cliente', $id, 'Cliente cadastrado', '1');
			return $id;
		}catch(Exception $e){
			return $e->getMessage();
		}
	}

	public function ver($id){
		$status = $this->conectar();
		$query = "SELECT * FROM cliente WHERE id =".$id;
		$stmt_cliente = $status->prepare($query);
		$stmt_cliente->execute();
		$lista = $stmt_cliente->fetchAll();
		return $lista;
	}

	public function listar(){
		$status = $this->conectar();
		$query = "SELECT * FROM cliente";
		$stmt_cliente = $status->prepare($query);
		$stmt_cliente->execute();
		$lista = $stmt_cliente->fetchAll();
		return $lista;
	}

	public function pesquisar($nome){
		$conexao = $this->conectar();
		$query = "SELECT * FROM cliente WHERE nome LIKE '%".$nome."%'";
		$stmt_cliente = $conexao->prepare($query);
		$stmt_cliente->execute();
		$lista = $stmt_cliente->fetchAll();
		return $lista;
	}

}
?>
