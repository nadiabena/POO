<?php

	class Voiture{
		private $numero_immatriculation;
		private $date_mise_en_circualtion;
		private $kilometrage;
		private $modele;
		private $marque;
		private $couleur;
		private $poids;

		//Reserved or free
		private $statut;

		//Type de vehicule
		private $typeVehicule;

		//Beaucoup servi ou pas
		private $servi;

		//const
		private $usure;
		private static $low = 100000;
		private static $high = 200000;



		/**
		 * @param [type]
		 * @param [type]
		 * @param [type]
		 * @param [type]
		 * @param [type]
		 * @param [type]
		 * @param [type]
		 */
		function __construct($numero_immatriculation, $date_mise_en_circualtion, $kilometrage, $modele, $marque, $couleur, $poids){
			$this->numero_immatriculation = $numero_immatriculation;
			$this->date_mise_en_circualtion = $date_mise_en_circualtion;
			$this->kilometrage = $kilometrage;
			$this->modele = $modele;
			$this->marque = $$marque;
			$this->couleur = $$couleur;
 			$this->poids = $poids;
		}

		public function getNumeroImmmatriculation(){
			return $this->numero_immatriculation;
		}

		public function getDateMiseEnCirculation(){
			return $this->date_mise_en_circualtion;
		}

		public function getKilometrage(){
			return $this->kilometrage;
		}

		public function getModele(){
			return $this->modele;
		}

		public function getMarque(){
			return $this->marque;
		}

		public function getCouleur(){
			return $this->couleur;
		}

		/**
		 * @return float
		 */
		public function getPoids(){
			return $this->poids;
		}

		public function setCouleur($couleur){
			$this->couleur = $couleur;
		}

		public function setPoids($poids){
			$this->poids = $poids;
		}


		public function setKilometrage($kilometrage){
			$this->kilometrage = $kilometrage;

			if($this->usure){

			}
		}

		/**
		 * @param  [type]
		 * @return [type]
		 */
		public function rouler($kilometrageToAdd){
			$this->kilometrage += $kilometrageToAdd;
			$this->usure = 'high';
		}

		public function display(){

		}


	}



	$vehicule = new Voiture();

	if($vehicule->modele('Audi')){
		return "reserved";
	}else{
		return "free";
	}

	if($vehicule->getPoids() > 3.5){
		return "véhicule commerciale";
	}else{
		return "véhicule utilitaire";
	}


	if()

?>
