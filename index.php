<?php
	/*
	*	Criação da constante mágica do php para os diretorios assim não sendo 
	* necessário a criação de require_once desnecessário, e facilitando
	* nas trocas de classes php de diretorios.
	*/

	function __autoload($c){

		$diretorios = array(
				'/',
				'app/',
				'css/',
				'js/',
				'php/'
			);
		foreach($diretorios as $dir) {
			if (file_exists($dir . $c . '.php')){
				require_once $dir . $c . ".php";
			}
		}
	}


?>
<!DOCTYPE html>

<html>
	<head lang="pt-BR">
		<title>Agenda PHP OO + AngularJS</title>
		<meta charset="utf-8">

		<!-- Arquivos CSS -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link href="css/style.css" rel="stylesheet">



	</head>

	<body ng-app="app">
		
		
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
					 	<span class="sr-only">Toggle navigation</span>
					 	<span class="icon-bar"></span>
					 	<span class="icon-bar"></span>
					 	<span class="icon-bar"></span>
					 </button> 
					 <a class="navbar-brand" href="#">Agenda KA</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#/">Dashboard</a>
						</li>
						<li>
							<a href="#/clientes">Clientes</a>
						</li>						
						<li>
							<a href="#/agenda">Agenda</a>
						</li>
						<li>
							<a href="#/">Sair</a>
						</li>
					</ul>
					<form class="navbar-form navbar-right" role="search">
						<div class="form-group">
							<input type="text" class="form-control" />
						</div> <button type="submit" class="btn btn-default">Pesquisar</button>
					</form>

				</div>
				</div>
			</nav>


			<div class="container">
				<div class="row clearfix">
					<div class="col-md-12 column" ng-view>

						
					</div>
				</div>
			</div>

			<footer class="footer">
				<div class="container	">

					<div class="col-md-12 column">
						<p>Desenvolvido por Agência KA</p>
					</div>
				</div>
			</footer>



		<!-- Arquivos JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.15/angular-route.min.js"></script>
		<script src="js/app.js"></script>

		<!-- Controllers -->
		<script src="app/controllers/ctrlPrincipal.js"></script> 
		<script src="app/controllers/ctrlDash.js"></script> 
		<script src="app/controllers/ctrlClientes.js"></script> 
		<script src="app/controllers/ctrlAgenda.js"></script> 

	</body>

</html>