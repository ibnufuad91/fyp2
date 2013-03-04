<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {

	public $uses = array('User');

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('login','register');
	}
	
	public function isAuthorized($user){
		return true;
	}

	public function index(){
		$this->autoRender = false;
	}
	
	public function login(){
		$this->layout = 'login';
		if ($this->request->is('post')) {
			if ($this->Auth->login($this->request->data)) {
				return $this->redirect($this->Auth->redirectUrl());
			// Prior to 2.3 use ‘return $this->redirect($this->Auth->redirect());‘
			} else {
				$this->Session->setFlash(__('Username or password is incorrect'));
			}
		}
	}
	public function logout(){
		$this->redirect($this->Auth->logout());
	}
	
	public function register(){
		if($this->request->is('post')){
			if ($this->User->save($this->request->data)) {
				$id = $this->User->id;
				$this->request->data['User'] = array_merge($this->request->data['User'], array('id'=>$id)); 
				$this->Auth->login($this->request->data['User']);
				$this->redirect('/');
			}
		}
	}
}