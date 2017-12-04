<?php

	class DataBase{
		private $bdd;

		public function connexion($database, $login, $password){
			try{
				// On se connecte à MySQL
				$this->bdd = new PDO('mysql:host=localhost;dbname='.$database.';charset=utf8', $bdd->quote($login), $bdd->quote($password));
				$this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);				
			}catch(Exception $e){
				// En cas d'erreur, on affiche un message et on arrête tout
	        	die('Erreur : '.$e->getMessage());
			}
		}

		//Enregistrer un nouvel utilisatieur dans la base de donnée avec validation
		public function register($username, $email, $password){
			$bdd->prepare('INSERT INTO user(username, email, password) 
						   VALUES ('.$bdd->quote($username).', '.$bdd->quote($email).', '.$bdd->quote($password)') ')->execute();
		}

		//Connecter un utilisateur (sessions)
		public function connecter($username, $password){

			if(!empty($username) && !empty($password){
				session_start ();
				$_SESSION['username'] = $username; 
				$_SESSION['password'] = $password;
			}else{
				$_SESSION['error'] = "Erreur lors de la connexion..";
			}
		}

		//Déconnecter un utilisateur (sessions)
		public function deconnecter(){
			session_unset();

			//Initialiser le tableau des variables de session
			$_SESSION = array();

			//Détruit la session
			session_destroy();
			die();
		}

		//Mettre à jour son nom dans la base de donnée
		public function updateName($id, $name){
			$this->bdd->prepare("UPDATE user 
						   		 SET name = '$name'
				          		 WHERE id = ".$id)->execute();
		}

		//Mettre à jour son email dans la base de donnée
		public function updateEmail($id, $email){
			$this->bdd->prepare("UPDATE user 
						   		 SET email = '$email'
				           		 WHERE id = ".$id)->execute();
		}

		//Supprimer de la base de donnée un user
		public function deleteUser($id){
			$this->bdd->prepare("DELETE 
						  		 FROM user 
						  		 WHERE id = ".$id)->execute();
		}


	}

?>



