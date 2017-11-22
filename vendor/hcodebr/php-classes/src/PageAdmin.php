<?php 

namespace Hcode;

class PageAdmin extends Page {

	public function __construct($opts = array(), $tpl_dir = "/views/admin/")  //pega o layout da view admin p evitar conflito
	{

		parent::__construct($opts, $tpl_dir); //reduz o codigo pois extende a classe Page aproveitando o cógigo pelo construtor

	}

}

?>