<?php 
  class DatabaseConnect {

  	private $server = 'localhost';
		private $username = 'root';
		private $password = ''; // $password = '';
		private $database = '19php01_mvc_basic';

		protected function connect() {
			// thuc hien ket noi database
			$connect = mysqli_connect($this->server, $this->username, $this->password, $this->database);

			// utf-8 connect
			mysqli_set_charset($connect,"utf8");

			// kiem tra ket noi database
			if ($connect === FALSE) {
				echo "Connect fail ".mysqli_connect_error();
			}
			return $connect;
		}
	}
?>