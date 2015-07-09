<?php
App::uses('AppController', 'Controller');
/**
 * Profiles Controller
 *
 * @property Profile $Profile
 * @property PaginatorComponent $Paginator
 */
class ProfilesController extends AppController {

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
		$this->Profile->recursive = 0;
		$this->set('profiles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Profile->exists($id)) {
			throw new NotFoundException(__('Invalid profile'));
		}
		$options = array('conditions' => array('Profile.' . $this->Profile->primaryKey => $id));
		$this->set('profile', $this->Profile->find('first', $options));
		$functionnality = $this->set('functionnalities', $this->Profile->Functionnality->find('list'));
		$profile =  $this->set('profiles', $this->Profile->find('list'));
		$this->set(compact('profiles', 'functionnalities'));
		$this->affectFct();
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Profile->create();
			if ($this->Profile->save($this->request->data)) {
				$this->Session->setFlash(__('The profile has been saved.'));
				return $this -> redirect(array('action' => 'index'));
			}
		}
		$workingHours = $this->Profile->WorkingHour->find('list', array(
		'fields' => array('WorkingHour.id','WorkingHour.team_code')));
		$this->set(compact('dependencies', 'workingHours'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Profile->exists($id)) {
			throw new NotFoundException(__('Invalid profile'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Profile->save($this->request->data)) {
				$this->Session->setFlash(__('The profile has been saved.'));
				return $this -> redirect(array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Profile.' . $this->Profile->primaryKey => $id));
			$this->request->data = $this->Profile->find('first', $options);
		}
		$workingHours = $this->Profile->WorkingHour->find('list', array(
		'fields' => array('WorkingHour.id','WorkingHour.team_code')));
		$this->set(compact('dependencies', 'workingHours'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Profile->id = $id;
		if (!$this->Profile->exists()) {
			throw new NotFoundException(__('Invalid profile'));
		}

		if ($this->Profile->delete()) {
			$this->Session->setFlash(__('The profile has been deleted.'));
			return $this -> redirect(array('action' => 'index'));
		} else {
			$this->Session->setFlash(__('The profile could not be deleted. Please, try again.'));
			return $this -> redirect(array('action' => 'index'));
		}
	}
	
	public function affectFct($id = null){
		
		//On obtient l'ID de la fonctionnalité à associer
		$id = $this->request->params['pass'][0];

		//On définie l' id de la fonctionnalité 
		$this->Profile->id = $id;

		//On vérifie si une fonctionnalité existe avec cet id
		if( $this->Profile->exists() ){
			if( $this->request->is( 'post' ) || $this->request->is( 'put' ) ){
				if( $this->Profile->Profilfunctionnality->save( $this->request->data ) ){
					$this->Session->setFlash('Fonctionnalit&eacute; affect&eacute;.');
					$this->here;
				}else{
					$this->Session->setFlash('Impossible d&rsquo;affecter la fonctionnalit&eacute;. S&rsquo;il vous plaît , essayez de nouveau .');
				}
			}else{
				//remplissage de notre formulaire en html automatiquement
				$this->request->data = $this->Profile->read();
				
			}

		}else{
			$this->Session->setFlash('La fonctionnalit&eacute; du profil que vous essayez de modifier n&rsquo;existe pas .');
		}
	}	
}
