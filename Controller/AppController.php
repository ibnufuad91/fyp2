<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	public $uses = array('User');
	
	public $bc = array();
	
	public $layout = 'main';

	public $components = array(//'Auth',
		'Auth' => array(
			'authenticate' => array(
				'Blowfish' => array(
					'scope' => array('User.is_active' => true)
				),
				'Form' => array(
					'fields' => array('username'=>'email')
				)
			),
			'loginAction' => array('controller' => 'users', 'action' => 'login'),
			'loginRedirect'=>array('controller' => 'mains', 'action' => 'index'),
			'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
			'authorize' => array('Controller')
		),
		'Session',
		'Cookie'
	);
	
	public function isAuthorized($user=null){
		return false;
	}
	
	public function beforeFilter(){
		$this->Auth->allow('index');
	}
}
