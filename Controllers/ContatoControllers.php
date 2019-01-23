<?php

namespace Controllers;

class ContatoControllers extends Controller{

	public function __construct(){
		$this->view = new \Views\MainView('contato');
	}

	public function executar(){
		$this->view->render(array('titulo'=>'Contato'));
	}
}


?>