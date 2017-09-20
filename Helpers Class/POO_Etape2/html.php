<?php
	
	class Html {

	//Il existe un constructeur par défaut

	public function linkCSS($style){
		return "<link rel='stylesheet' type='text/css' href=".$style.">";
	}

	public function baliseMeta($type, $name, $content){
		return "<meta ".$type."=".$name." content=".$content.">";
	}

	/**
	 * @param  [type]
	 * @param  [type]
	 * @param  [type]
	 * @param  [type]
	 * @return [type]
	 */
	public function linkImage($source, $alt, $height, $width){
		return "<img src=".$source." alt=".$alt." height=".$height." width=".$width.">";
	}

	/**
	 * @param  [type]
	 * @param  [type]
	 * @return [type]
	 */
	public function createLink($url,$text){
		return "<a href=".$url.">".$text."</a>";
	}

	/**
	 * @param  [type]
	 * @return [type]
	 */
	public function linkJavaScript($source){
		return "<script type=text/Javascript src=".$source."></script>";
	}

}

	$html = new Html();
	echo $html->linkCSS("styles.css");	
	echo $html->baliseMeta("name","Nadia B.","Vive l'orientée objet!");
	echo $html->linkImage("https://static.wamiz.fr/images/news/facebook/article/14-fb-59257efbca6e2.jpg","explication image",64,64);
	echo $html->createLink("https://www.google.be","Lien");	
	echo $html->linkJavaScript("masource");


?>