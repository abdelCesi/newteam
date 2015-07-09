<?php
App::uses('AppController', 'Controller');
/**
 * Functionnalities Controller
 *
 * @property Functionnality $Functionnality
 * @property PaginatorComponent $Paginator
 */
class FunctionnalitiesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Functionnality->recursive = 0;
		$this->set('functionnalities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Functionnality->exists($id)) {
			throw new NotFoundException(__('Invalid functionnality'));
		}
		$options = array('conditions' => array('Functionnality.' . $this->Functionnality->primaryKey => $id));
		$this->set('functionnality', $this->Functionnality->find('first', $options));
		
		$profile =  $this->set('profiles', $this->Functionnality->Profile->find('list'), array('fields' => array('Profile.id', 'Profile.profile_name')));
		$this->set(compact('dependencies', 'profiles'));
		$functionnality = $this->set('functionnalities', $this->Functionnality->find('list'));
		$profilfunctionnality =  $this->set('profilfunctionnalities', $this->Functionnality->Profilfunctionnality->find('list'));
		
		$this->set(compact('functionnalities','profilfunctionnalities'));
		$this->affectProfil();
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Functionnality->create();
			if ($this->Functionnality->save($this->request->data)) {
				$this->Session->setFlash(__('The functionnality has been saved.'));
				return $this -> redirect(array('action' => 'index'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Functionnality->exists($id)) {
			throw new NotFoundException(__('Invalid functionnality'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Functionnality->save($this->request->data)) {
				$this->Session->setFlash(__('The functionnality has been saved.'));
				return $this -> redirect(array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Functionnality.' . $this->Functionnality->primaryKey => $id));
			$this->request->data = $this->Functionnality->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Functionnality->id = $id;
		if (!$this->Functionnality->exists()) {
			throw new NotFoundException(__('Invalid functionnality'));
		}
		//$this->request->allowMethod('post', 'delete');
		if ($this->Functionnality->delete()) {
			$this->Session->setFlash(__('The functionnality has been deleted.'));
			return $this -> redirect(array('action' => 'index'));
		} else {
			$this->Session->setFlash(__('The functionnality could not be deleted. Please, try again.'));
			return $this -> redirect(array('action' => 'index'));
		}
	}
	
	public function affectProfil($id = null){
		
		//On obtient l'ID de la fonctionnalité à associer
		$id = $this->request->params['pass'][0];

		//On définie l' id de la fonctionnalité 
		$this->Functionnality->id = $id;

		//On vérifie si une fonctionnalité existe avec cet id
		if( $this->Functionnality->exists() ){
			if( $this->request->is( 'post' ) || $this->request->is( 'put' ) ){
				if( $this->Functionnality->Profilfunctionnality->save( $this->request->data ) ){
					$this->Session->setFlash('Profil affect&eacute;.');
					$this->here;
				}else{
					$this->Session->setFlash('Impossible d&rsquo;affecter le profil. S&rsquo;il vous plaît , essayez de nouveau .');
				}
			}else{
				//remplissage de notre formulaire en html automatiquement
				$this->request->data = $this->Functionnality->read();				
			}

		}else{
			$this->Session->setFlash('Le profil de la fonctionnalit&eacute; que vous essayez de modifier n&rsquo;existe pas .');
		}
	}
}


