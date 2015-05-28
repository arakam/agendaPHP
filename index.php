<?php

	header('Content-tyoe: text/html; charset=utf-8');


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

	

	$t = new classTeste();
	$t->nome();
	
	echo "Porra funfa";


?>