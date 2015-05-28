<?php
	class ClientesDAO{
		
		private $cli_codigo;
		private $cli_nome;
		private $cli_cgc;
		private $cli_contato;
		private $cli_telefone;
		private $cli_email;

		public function setCli_codigo(){
			$this->cli_codigo = $cli_codigo;
		}

		public function getCli_codigo(){
			return $cli_codigo;
		}

		public function setCli_nome(){
			$this->cli_nome = $cli_nome;
		}

		public function getCli_nome(){
			return $cli_nome;
		}

		public function setCli_cgc(){
			$this->cli_cgc = $cli_cgc;
		}

		public function getCli_cgc(){
			return $cli_cgc;
		}

		public function setCli_contato(){
			$this->cli_contato = $cli_contato;
		}

		public function getCli_contato(){
			return $cli_contato;
		}

		public function getCli_telefone(){
			$this->cli_telefone = $cli_telefone;
		}

		public function setCli_telefone(){
			return $cli_telefone;
		}

		public function getCli_email(){
			$this->cli_email = $cli_email;
		}

		public function setCli_email(){
			return $cli_email;
		}		
	}
?>