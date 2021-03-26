<!doctype html>
	<head>
		<?php session_start(); include("func.php"); ?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Forca</title>
		<link href="bootstrap.css" rel="stylesheet">
		<link href="form-validation.css" rel="stylesheet">
	</head>
	<body class="bg-light">
		    <div class="container">
				<h1 style="float: right; margin-top: 10%;">Forca</h1>
				<div class="py-5">
				    <h6><?php if(!empty($_SESSION['mensagem'])){echo $_SESSION['mensagem'];} ?></h6>
				    <p><?php printaVida() ?></p>
				</div>
				<div class="py-5 text-center">
				    <h1><?php ganhou_ou_perdeu() ?></h1>
			    </div>
			    <div class="row">
			        	<div class="col-md-4 order-md-2 mb-4">
			         <h4 class="d-flex justify-content-between align-items-center mb-3">
			            <span class="text-muted">Dicas</span>
			          </h4>
			          <ul class="list-group mb-3">
			            <li class="list-group-item d-flex justify-content-between lh-condensed">
			              <div>
			                <h6 class="my-0">Tema</h6>
			              </div>
			              <span class="text-muted"><?php if(!empty($_SESSION['array'])){echo $_SESSION['array'][1];} ?></span>
			            </li>
			            <li class="list-group-item d-flex justify-content-between lh-condensed">
			              <div>
			                <h6 class="my-0">Número de Letras</h6>
			              </div>
			              <span class="text-muted"><?php if(!empty($_SESSION['array'])){echo strlen($_SESSION['array'][0]);} ?></span>
			            </li>
			          </ul>
			        	</div>
				        	<div class="col-md-8 order-md-1">
					        <form name="form" method="post" action="controle.php" class="needs-validation">
				        	
				        	<div class="row">
				              <div class="col-md-3 mb-3">
				                <label for="letra">Digite uma Letra</label>
				                <input type="text" name="letra" class="form-control" autocomplete="off"> 
				              </div>
				              <div class="col-md-3 mb-3">
				                <label for="palavra">Arrisque uma palavra</label>
				                <input type="text" name="palavra" class="form-control" autocomplete="off">
				              </div>
				            </div>

				            <hr class="mb-2">
				            <button class="btn btn-primary btn-lg btn-block" name="teste" type="submit">Continuar</button>
				            <button class="btn btn-lg btn-block" name="swap" type="submit">Troca Palavra</button>
				        </form>
			    		</div>
			    </div>
			    <footer class="my-5 pt-5 text-muted text-center text-small">
			    	<p class="mb-1">2018 Fernando Heisser</p>
			    </footer>
			</div>

			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
			<script src="../../assets/js/vendor/popper.min.js"></script>
			<script src="../../dist/js/bootstrap.min.js"></script>
			<script src="../../assets/js/vendor/holder.min.js"></script>
			<script>
			      // Example starter JavaScript for disabling form submissions if there are invalid fields
			      (function() {
			        'use strict';

			        window.addEventListener('load', function() {
			          // Fetch all the forms we want to apply custom Bootstrap validation styles to
			          var forms = document.getElementsByClassName('needs-validation');

			          // Loop over them and prevent submission
			          var validation = Array.prototype.filter.call(forms, function(form) {
			            form.addEventListener('submit', function(event) {
			              if (form.checkValidity() === false) {
			                event.preventDefault();
			                event.stopPropagation();
			              }
			              form.classList.add('was-validated');
			            }, false);
			          });
			        }, false);
			      })();
			</script>
	</body>
</html>