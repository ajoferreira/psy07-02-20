<?php
	// required headers
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Methods: POST");
	header("Access-Control-Max-Age: 3600");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

	require_once("database/connection.php");
	require_once("safe_json_encode.php");
	
	header('Content-Type: text/html; charset=utf-8');// para formatar corretamente os acentos

	

	$nome = $_GET['nome'];
	$email = $_GET['email'];
	$senha = $_GET['senha'];
	$endereco = $_GET['endereco'];
	$telefone = $_GET['telefone'];
	$cpf = $_GET['cpf'];

    $sql = "INSERT INTO `cadastro`(`nome`, `email`, `senha`, `endereco`, `telefone`, `cpf`) VALUES ('$nome','$email','$senha','$endereco','$telefone','$cpf')";

	
    $result = mysqli_query($conn, $sql);
	
    if($result){
		$response = array("status" =>1 , "msg" => "cadastrado com sucesso", "sql"=>$sql);
		http_response_code(200);
	} else {
		$response = array("status" =>1 , "msg" => "erro ao cadastrar");
		http_response_code(422);
	}

	echo safe_json_encode($response);
	
?>