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
	
	public function associateFct($id = null) {
		if (!$this->Profile->exists($id)) {
			throw new NotFoundException(__('Invalid profile'));
		}
		
			if ($this->request->is('post')) {
			$this->Profilfunctionnality->create();
			if ($this->Profilfunctionnality->save($this->request->data)) {
				$this->Session->setFlash(__('The Profilfunctionnality has been saved.'));
				return $this -> redirect(array('action' => 'index'));
			}
		}
	}
	
	public function editDyna(){
		$id = $this->request->params['pass'][0];

        //On définie l' id du profil
        $this->Profile->id = $id;
		  if( $this->Profile->exists() ){
            if( $this->request->is( 'post' ) || $this->request->is( 'put' ) ){
                if( $this->Profile->save( $this->request->data ) ){
                    $this->Session->setFlash('Profil modifié.');
					$this->here;
                }else{
                    $this->Session->setFlash('Impossible de modifier le profil. S&rsquo;il vous plaît , essayez de nouveau .');
                }
            }else{
                // lecture des données de l'utilisateur
                //remplissage de notre formulaire en html automatiquement
                $this->request->data = $this->Profile->read();
				
            }

        }else{
            //Si il nnous allons indiquer à l'utilisateur qu'il n'y a pas l'utilisateur
            $this->Session->setFlash('Le profil que vous essayez de modifier n&rsquo;existe pas .');
            //$this->redirect(array('action' => 'view'));
        }
	}
	
}
