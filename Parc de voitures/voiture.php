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

		/**
		 * @param [type]
		 * @param [type]
		 * @param [type]
		 * @param [type]
		 * @param [type]
		 * @param [type]
		 * @param [type]
		 */
		
		public function __construct($numero_immatriculation, $date_mise_en_circualtion, $kilometrage, $modele, $marque, $couleur, $poids){
			$this->numero_immatriculation = $numero_immatriculation;
			$this->date_mise_en_circualtion = $date_mise_en_circualtion;
			$this->kilometrage = $kilometrage;
			$this->modele = $modele;
			$this->marque = $marque;
			$this->couleur = $couleur;
 			$this->poids = $poids;
 			$this->statut = "";
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

			if($this->getKilometrage() < 100000){
				$this->setServi('low');
			}else if($this->getKilometrage() > 100000 && $this->getKilometrage() < 200000){
				$this->setServi('middle');
			}else{
				$this->setServi('high');
			}	

		}

		/**
		 * @param  int
		 * @return [type]
		 */
		public function rouler($kilometrageToAdd){
			$this->kilometrage += $kilometrageToAdd;
			
			if($this->kilometrage > 100000 && $this->kilometrage < 200000){
				$this->setServi('middle');
			}else{
				$this->setServi('high');
			}
		}

		/**
		 * Function qui calcule le nombre d'années depuis la date de mise en circulation
		 */
		public function calculDate(){
			$date = explode("/", $this->date_mise_en_circualtion);
			
			//$jour = $date[0];
            //$mois = $date[1];
            $annee = $date[2];
			
			return date('Y') - $annee;
		}


		public function setStatut($leStatut){
			$this->statut = $leStatut;
		}

		public function setTypeVehicule($type){
			return $this->typeVehicule = $type;
		}

		public function setServi($servi){
			$this->servi = $servi;
		}



		/**
		 * @return
		 */
		public function display($marque, $picture){
			echo "<br/>";
			echo "<table style='border: 1px solid black; border-collapse: collapse;' style='border:1px solid red'>";
				echo "<tr style='border: 1px solid black; border-collapse: collapse;'>";
					echo "<th colspan='2' style='border: 1px solid black; border-collapse: collapse;'>".$this->marque."</th>";
				echo "</tr>";

				echo "<tr>";
					echo "<td>"."<img src='".$picture."' alt='voiture' height='128' width='auto'>"."</td>";
					echo "<td style='border:1px solid green'>";
						echo "<ul>";
							echo "<li>".$this->marque."</li>";
							echo "<li>".$this->couleur."</li>";
							echo "<li>".$this->kilometrage." km</li>";
							echo "<li>".$this->numero_immatriculation."</li>";

						echo '</ul>'; 
					echo "</td>";
				echo "</tr>";
	
			echo "</table>";
		}


	}//End Class


	$vehicule = new Voiture('BE-1-PYX-205','03/10/2016', 124000, 'break', 'Fiat', 'bleu', 2500);

	if($vehicule->getMarque() == 'Audi'){
		$vehicule->setStatut('reserved');
	}else{
		$vehicule->setStatut('free');
	}


	if($vehicule->getPoids() > 3500){
		$vehicule->setTypeVehicule('commerciale');
	}else{
		$vehicule->setTypeVehicule('utilitaire');
	}

	$pays = $vehicule->getNumeroImmmatriculation();
	$pays = substr($pays,0,2);

	switch ($pays) {
		case 'BE':
			echo 'Voiture de Belgique<br/>';
			break;
		case 'FR':
			echo 'Voiture de  France<br/>';	
			break;
		case 'DE':
			echo "Voiture de 'Allemagne<br/>";
			break;
		default:
			break;
	}

	if($vehicule->getKilometrage() < 100000){
		$vehicule->setServi('low');
	}else if($vehicule->getKilometrage() > 100000 && $vehicule->getKilometrage() < 200000){
		$vehicule->setServi('middle');
	}else{
		$vehicule->setServi('high');
	}	


	echo "Nombre d'années depuis la date de mise en circulation: ".$vehicule->calculDate()."<br/>";

	$vehicule->rouler(100000);



	$vehicule->display("Fiat", "voiture.jpg");

?>
