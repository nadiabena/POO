<?php

	class User{
		private $id;
		private $username;
		private $email;
		private $password;
		private $connected;


		public function __construct($id, $username, $email, $password){
			$this->id = $id;
			$this->username = $username;
			$this->email = $email;
			$this->password = $password;
			$this->connected = "";
		}

		/**
		 * Getter
		 * @return int $id
		 */
		public function getId(){
			return $this->id;
		}

		public function getUsername(){
			return $this->username;
		}

		public function getEmail(){
			return $this->email;
		}

		public function getPassword(){
			return $this->password;
		}

		public function getConnected(){
			return $this->connected;
		}

		/**
		 * Setter
		 * @param int $id 
		 */
		public function setId($id){
			$this->id = $id;
		}

		public function setUsername($username){
			$this->username = $username;
		}

		public function setEmail($email){
			$this->email= $email;
		}

		public function setPassword($password){
			$this->password = $password;
		}

		public function setConnected($connected){
			$this->connected = $connected;
		}


	}

?>


