<?php
session_start();
	include_once __DIR__ . '/vendor/autoload.php';

	$dotenv = Dotenv\Dotenv::create(__DIR__ .'/config');
	$dotenv->load();

	if(filter_input(INPUT_POST, 'btn_submit', FILTER_SANITIZE_STRING)){
		$password = $_POST['pass'];

		if (md5($password) == $_ENV['MD5_C']) {
			$_SESSION['logged_pass'] = true;
			header("Location: itens.php");
		//echo "entrou";
		}
		else{
			$_SESSION['logged_pass'] = false;

			if( $_SERVER['REQUEST_METHOD'] == "POST" ):
	            $_SESSION['msg'] = "Incorrect code!";
	        else:
	            $_SESSION['msg'] = "";
	        endif;
			header("Location: login.php");

		}
	}
	else{
			$password = "";
			// header("Location: index.php");
	}

	
	


	// verifica se o botão foi clicado
	// $btn_submit = filter_input(INPUT_POST, 'btn_submit', FILTER_SANITIZE_STRING);

	// $password = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);


	// if(!empty($password)){
	// 	if(md5($password) != $_ENV['MD5_C']){
	// 		$_SESSION['msg'] = "Code incorrect!";
	// 		header("Location: index.php");
	// 	}
	// 	else{
	// 		header("Location: itens.php");
	// 	}
	// }
	// else{
	// 	$_SESSION['msg'] = "Code field is empty!";
	// 	header("Location: index.php");
	// }


	// if($btn_submit){

	// 	$password = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);

	// 	if(!empty($password)){
	// 		if(md5($password) != $_ENV['MD5_C']){
	// 			$_SESSION['msg'] = "Code incorrect!";
	// 			header("Location: login.php");
	// 		}
	// 		else{
	// 			header("Location: itens.php");
	// 		}
	// 	}
	// 	else{
	// 		$_SESSION['msg'] = "Code field is empty!";
	// 		header("Location: index.php");
	// 	}
	// }
	// else{
	// 	$_SESSION['msg'] = "Page not found!";
	// 	header("Location: login.php");
	// }
	


	// $_SESSION['logged_pass'] = $password;

	// if(!isset($_SESSION['logged_pass'])){
	// 	header("Location: login.php");
	// }
?>