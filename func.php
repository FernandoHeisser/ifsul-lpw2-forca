<?php
	function ganhou_ou_perdeu(){
		if(isset($_SESSION['vida']) and empty($_SESSION['vida'])){
			echo 'Você Perdeu o Jogo!';
			session_destroy();				
		}
		elseif(isset($_SESSION['array']) and isset($_SESSION['palavra']) and $_SESSION['array'][0] == $_SESSION['palavra']){
			echo 'Você Ganhou o Jogo!';
			session_destroy();
		}
		elseif(isset($_SESSION['resposta']) and isset($_SESSION['array']) and $_SESSION['resposta'] == $_SESSION['array'][0]){
			echo 'Você Ganhou o Jogo!';
			session_destroy();
		}
		elseif(isset($_SESSION['resposta']) and isset($_SESSION['array']) and $_SESSION['resposta'] != $_SESSION['array'][0]){
			echo 'Você Perdeu o Jogo!';
			session_destroy();
		}
		elseif(isset($_SESSION['palavra'])){
			$tratamento = $_SESSION['palavra'];
			$array = array();
			
			for($i=0;$i<strlen($tratamento);$i++) {
				$array[$i] = $tratamento[$i];
			}
			$tratamento = implode(' ', $array);
			echo $tratamento;
		}
		else{
			echo 'Comece digitando uma Letra.';
		}	
	}
	function conectaBanco(){
		$servidor="localhost";
		$usuario="root";
		$senha="";
		$banco="forca";

		$connection=mysqli_connect($servidor, $usuario, $senha);
		$sla=mysqli_select_db($connection, $banco);
		return $connection;
	}
	function consultaPalavra(){
		$v = rand(1,6);

		if($v == 1){
			$f = rand(1,10);
			$connection=conectaBanco();
			$insere="SELECT * FROM Animais WHERE ID=$f";
			$ins=mysqli_query($connection, $insere) or die(mysqli_error($connection));
			$row = mysqli_fetch_array($ins);
			//echo $row['Nome'];
			mysqli_close($connection);
			return $row['Nome'].'/Animais';
		}
		elseif($v == 2){
			$f = rand(1,10);
			$connection=conectaBanco();
			$insere="SELECT * FROM Comidas WHERE ID=$f";
			$ins=mysqli_query($connection, $insere) or die(mysqli_error($connection));
			$row = mysqli_fetch_array($ins);
			//echo $row['Nome'];
			mysqli_close($connection);
			return 	$row['Nome'].'/Comidas';
		}
		elseif($v == 3){
			$f = rand(1,10);
			$connection=conectaBanco();
			$insere="SELECT * FROM Objetos WHERE ID=$f";
			$ins=mysqli_query($connection, $insere) or die(mysqli_error($connection));
			$row = mysqli_fetch_array($ins);
			//echo $row['Nome'];
			mysqli_close($connection);
			return $row['Nome'].'/Objetos';
		}
		elseif($v == 4){
			$f = rand(1,10);
			$connection=conectaBanco();
			$insere="SELECT * FROM Carros WHERE ID=$f";
			$ins=mysqli_query($connection, $insere) or die(mysqli_error($connection));
			$row = mysqli_fetch_array($ins);
			//echo $row['Nome'];
			mysqli_close($connection);
			return $row['Nome'].'/Carros';
		}
		elseif($v == 5){
			$f = rand(1,10);
			$connection=conectaBanco();
			$insere="SELECT * FROM Paises WHERE ID=$f";
			$ins=mysqli_query($connection, $insere) or die(mysqli_error($connection));
			$row = mysqli_fetch_array($ins);
			//echo $row['Nome'];
			mysqli_close($connection);
			return $row['Nome'].'/Paises';
		}
		elseif($v == 6){
			$f = rand(1,10);
			$connection=conectaBanco();
			$insere="SELECT * FROM Frutas WHERE ID=$f";
			$ins=mysqli_query($connection, $insere) or die(mysqli_error($connection));
			$row = mysqli_fetch_array($ins);
			//echo $row['Nome'];
			mysqli_close($connection);
			return $row['Nome'].'/Frutas';
		}
	}
	function executaPalavra($palavra){
		$array1 = explode('/', $palavra);
		$palavra = $array1[0];
		$tema = $array1[1];
		return [$palavra, $tema];
	}
	function geraVida(){
		$array = array();
		$i = 0;
		$connection=conectaBanco();
		$insere="SELECT * FROM Corpo";
		$ins=mysqli_query($connection, $insere) or die(mysqli_error($connection));
		while($row = mysqli_fetch_array($ins)){
			$array[$i] = $row['Nome'];
			$i++;
		}
		mysqli_close($connection);
		return $array;	
	}
	function perdeVida($array){
		if(!empty($array[0])){
			unset($array[0]);
			return $array;
		}
		elseif(!empty($array[1])){
			unset($array[1]);
			return $array;	
		}
		elseif(!empty($array[2])){
			unset($array[2]);
			return $array;
		}
		elseif(!empty($array[3])){
			unset($array[3]);
			return $array;
		}
		elseif(!empty($array[4])){
			unset($array[4]);
			return $array;
		}
		elseif(!empty($array[5])){
			unset($array[5]);
			return $array;
		}
	}
	function printaVida(){
		if(isset($_SESSION['vida'])){	
			$array = $_SESSION['vida'];
			if(empty($array[5])){
				echo "<p style='color:red; margin: 0;'>Perdeu a Cabeça!<br>Perdeu o Jogo!</p>";
			}
			else{
				echo "<p style='color:#0069D9; margin: 0;'>Ainda tem a Cabeça!</p>";
			}
			if(empty($array[4])){
				echo "<p style='color:red; margin: 0;'>Perdeu o Torax.</p>";
			}
			else{
				echo "<p style='color:#0069D9; margin: 0;'>Ainda tem o Torax!</p>";
			}
			if(empty($array[3])){
				echo "<p style='color:red; margin: 0;'>Perdeu o Braço Esquerdo!</p>";
			}
			else{
				echo "<p style='color:#0069D9; margin: 0;'>Ainda tem o Braço Esquerdo!</p>";
			}
			if(empty($array[2])){
				echo "<p style='color:red; margin: 0;'>Perdeu o Braço Direito!</p>";
			}
			else{
				echo "<p style='color:#0069D9; margin: 0;'>Ainda tem o Braço Direito!</p>";
			}
			
			if(empty($array[1])){
				echo "<p style='color:red; margin: 0;'>Perdeu a Perna Esquerda!</p>";
			}
			else{
				echo "<p style='color:#0069D9; margin: 0;'>Ainda tem a Perna Esquerda!</p>";
			}
			if(empty($array[0])){
				echo "<p style='color:red; margin: 0;'>Perdeu a Perna Direita!</p>";
			}
			else{
				echo "<p style='color:#0069D9; margin: 0;'>Ainda tem a Perna Direita!</p>";
			}
		}
	}
	function exibePalavra($palavra, $letra){
		if(isset($_SESSION['palavra'])){
			$session = $_SESSION['palavra'];

			$size = strlen($palavra);
			for($i=0;$i<$size;$i++){ 
				if($palavra[$i]==$letra){
					$session[$i]=$letra;
				}
			}
			return $session;
		}
		else{
			$size = strlen($palavra);
			for($i=0;$i<$size;$i++){ 
				if($palavra[$i]!=$letra){
					$palavra[$i]='_';
				}
			}
			return $palavra;
		}
	}
?>