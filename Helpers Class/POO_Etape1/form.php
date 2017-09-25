<?php
	
	class Form {
		private $action;
		private $nom; 
		private $prenom;


		public function __construct(){

		}

		public function getAction(){
			return $this->action;
		}

		public function getNom(){
			return $this->nom;
		}

		public function getprenom(){
			return $this->action;
		}

		public function setAction(){
			$this->action;
		}

		public function setNom($nom){
			$this->nom = $nom;
		}

		public function setPrenom($pre){
			$this->prenom;
		}

		public function create($action){
			return '<form action='.$action.' method=GET>';
		}

		public function text($labelNom, $nom){
			$res = '<label>'.$labelNom.': </label>';

			return $res.' <input type="text" placeholder="Entrez votre "'.$labelNom.' name='.$nom.'><br/>';
		}

		public function textOther($labelPrenom, $prenom){
			$res = '<label>'.$labelPrenom.': </label>';
			return $res.'<input type="text" name='.$prenom.' placeholder="Entrez votre prenom">';
		}

		public function select($labelSelect){
			$res = "<br/><label>".$labelSelect."</label><br/>";
			
			$res .= "<select> ";
			$res .= " <option value='femme'>Femme</option>";
			$res .= " <option value='homme'>Homme</option>";
			$res .= " </select><br/>";

			return $res."<br/>";
		}

		public function submit($button){
			return '<button type="submit">'.$button.'</button>';
		}

		public function textarea($labelTextArea, $name){
			$res = "<label>".$labelTextArea."</label><br/>";
			return $res.' <textarea name='. $labelTextArea.'></textarea>';
		}

		public function radio($name){
			$res = "<br/><br/><label>Statut</label>";
			$res = $res."<br/><input type='radio' name=".$name."value='employé'"." checked>employé<br/>";
			return $res."<input type='radio' name=".$name."value='ouvrier'"." checked>ouvrier<br/>";
		}


		public function checkbox($labelCheckbox,$name){
			$res = "<br/><label>".$labelCheckbox."</label><br/>";

			$res .= "<input type='checkbox' value='hobby' name=".$name.">Cuisiner<br/>";
			$res .= "<input type='checkbox' value='hobby' name=".$name.">Se promener<br/>";
			$res .= "<input type='checkbox' value='hobby' name=".$name.">Lire<br/>";

			return $res;
		}


		public function end(){
			return '</form>';
		}

	}

	$form = new Form();
	echo $form->create('form.php');
	echo $form->text('nom','nom');		
	echo $form->textOther('prenom','prenom');
	echo $form->select('Genre: '); 
	echo $form->textarea('Message','textarea');
	echo $form->radio('statut');
	echo $form->checkbox('Hobby','hobby');
	echo "<br/><br/>";
	echo $form->submit('Modifier');
	echo $form->end();

?>
