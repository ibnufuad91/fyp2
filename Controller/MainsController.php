<?php
App::uses('AppController', 'Controller');

class MainsController extends AppController{
	public $uses = array();
	
	public function index(){
		$this->bc[] = array('name'=>'Main','url'=>Router::url(array('controller'=>$this->request->controller)));
		$this->set('bc', $this->bc);
	}
	
	public function config(){
		//$this->autoRender = false;
		echo 'abu';
	
	}
}