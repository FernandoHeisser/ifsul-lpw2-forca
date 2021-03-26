<?php
	include("func.php");
	session_start();
	
	if(isset($_POST['swap'])){
		unset($_SESSION['palavra']);
		$_SESSION['array'] = executaPalavra(consultaPalavra());
		$_SESSION['vida'] = geraVida();
		header('Location:index.php');
	}
	if(isset($_SESSION['array'])){
		if(!empty($_POST['palavra'])){
			$_SESSION['resposta'] = $_POST['palavra'];
			header('Location: index.php');
		}
		elseif(!empty($_POST['letra'])){
			
			$palavra = $_SESSION['array'][0];
			$letra = $_POST['letra'];

			if(stripos($palavra, $letra) === false){
    			$_SESSION['mensagem'] = 'Não tem a letra: '.$_POST['letra'];
    			
    			$_SESSION['vida'] = perdeVida($_SESSION['vida']);
    		}
    		else{ 
    			$_SESSION['mensagem'] = 'Tem a letra: '.$_POST['letra'];
				
				$_SESSION['palavra'] = exibePalavra($palavra, $letra);
    		}
    		header('Location: index.php');
		}
		else{
			header('Location: index.php');
		}
	}
	else{
		header('Location: index.php');
	}
?>