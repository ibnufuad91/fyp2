<?php
App::uses('AppController', 'Controller');

class MembersController extends AppController {
	
	public function beforeFilter(){
		parent::beforeFilter();
		$this->bc[] = array('name'=>'Member','url'=>Router::url(array('controller'=>$this->request->controller, 'action'=>'index')));
	}
	
	public function isAuthorized($user){
		$current_user = $this->User->find('first', array('conditions'=>array('User.email'=>$user['Member']['email'])));
		if($current_user['User']['role'] == 'admin'){
			return true;
		}
		
		return false;
	}
	
	public function index(){
		$this->bc[] = array('name'=>'Biography','url'=>Router::url(array('controller'=>$this->request->controller, 'action'=>'index')));
		$this->set('bc', $this->bc);
	}

	public function academic(){
		$this->bc[] = array('name'=>'Academic','url'=>Router::url(array('controller'=>$this->request->controller)));
		$this->set('bc', $this->bc);
	}

	public function hsinfo(){
		$this->bc[] = array('name'=>'HALUAN Siswa Info','url'=>Router::url(array('controller'=>$this->request->controller)));
		$this->set('bc', $this->bc);
	}
	
	public function qcircle(){
		$this->bc[] = array('name'=>'Quality Circle','url'=>Router::url(array('controller'=>$this->request->controller)));
		$this->set('bc', $this->bc);
	}
	
	
}

