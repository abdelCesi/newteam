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
		$workingHours = $this->Functionnality->Profile->WorkingHour->find('list', array(
		'fields' => array('WorkingHour.id','WorkingHour.team_code','WorkingHour.start_time','WorkingHour.end_time')));
		$functionnality = $this->set('functionnalities', $this->Functionnality->find('list'));
		$profile =  $this->set('profiles', $this->Functionnality->Profile->find('list'));
		//$this->set(compact('dependencies', 'workingHours'));
		$this->set(compact('profiles', 'functionnalities'));
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
		
		//On obtient l'ID de la fonctionnalit� � associer
		$id = $this->request->params['pass'][0];

		//On d�finie l' id de la fonctionnalit� 
		$this->Functionnality->id = $id;

		//On v�rifie si une fonctionnalit� existe avec cet id
		if( $this->Functionnality->exists() ){
			if( $this->request->is( 'post' ) || $this->request->is( 'put' ) ){
				if( $this->Functionnality->Profilfunctionnality->save( $this->request->data ) ){
					$this->Session->setFlash('Profil affect&eacute;.');
					return $this->redirect($this->here);
				}else{
					$this->Session->setFlash('Impossible d&rsquo;affecter le profil. S&rsquo;il vous pla�t , essayez de nouveau .');
				}
			}else{
				// lecture des donn�es de l'utilisateur
				//remplissage de notre formulaire en html automatiquement
				$this->request->data = $this->Functionnality->read();
				
			}

		}else{
			//Si il nnous allons indiquer � l'utilisateur qu'il n'y a pas l'utilisateur
			$this->Session->setFlash('Le profil de la fonctionnalit&eacute; que vous essayez de modifier n&rsquo;existe pas .');
			//$this->redirect(array('action' => 'view'));
		}
	}

}


