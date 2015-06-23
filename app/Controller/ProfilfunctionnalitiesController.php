<?php
App::uses('AppController', 'Controller');
/**
 * Profilfunctionnalities Controller
 *
 * @property Profilfunctionnality $Profilfunctionnality
 * @property PaginatorComponent $Paginator
 */
class ProfilfunctionnalitiesController extends AppController {

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
		$this->Profilfunctionnality->recursive = 0;
		$this->set('profilfunctionnalities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Profilfunctionnality->exists($id)) {
			throw new NotFoundException(__('Invalid profilfunctionnality'));
		}
		$options = array('conditions' => array('Profilfunctionnality.' . $this->Profilfunctionnality->primaryKey => $id));
		$this->set('profilfunctionnality', $this->Profilfunctionnality->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Profilfunctionnality->create();
			if ($this->Profilfunctionnality->save($this->request->data)) {
				return $this->flash(__('The profilfunctionnality has been saved.'), array('action' => 'index'));
			}
		}
		$profiles = $this->Profilfunctionnality->Profile->find('list');
		$functionnalities = $this->Profilfunctionnality->Functionnalitie->find('list');
		$this->set(compact('profiles', 'functionnalities'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Profilfunctionnality->exists($id)) {
			throw new NotFoundException(__('Invalid profilfunctionnality'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Profilfunctionnality->save($this->request->data)) {
				return $this->flash(__('The profilfunctionnality has been saved.'), array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Profilfunctionnality.' . $this->Profilfunctionnality->primaryKey => $id));
			$this->request->data = $this->Profilfunctionnality->find('first', $options);
		}
		$profiles = $this->Profilfunctionnality->Profile->find('list');
		$functionnalities = $this->Profilfunctionnality->Functionnalitie->find('list');
		$this->set(compact('profiles', 'functionnalities'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Profilfunctionnality->id = $id;
		if (!$this->Profilfunctionnality->exists()) {
			throw new NotFoundException(__('Invalid profilfunctionnality'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Profilfunctionnality->delete()) {
			return $this->flash(__('The profilfunctionnality has been deleted.'), array('action' => 'index'));
		} else {
			return $this->flash(__('The profilfunctionnality could not be deleted. Please, try again.'), array('action' => 'index'));
		}
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Profilfunctionnality->recursive = 0;
		$this->set('profilfunctionnalities', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Profilfunctionnality->exists($id)) {
			throw new NotFoundException(__('Invalid profilfunctionnality'));
		}
		$options = array('conditions' => array('Profilfunctionnality.' . $this->Profilfunctionnality->primaryKey => $id));
		$this->set('profilfunctionnality', $this->Profilfunctionnality->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Profilfunctionnality->create();
			if ($this->Profilfunctionnality->save($this->request->data)) {
				return $this->flash(__('The profilfunctionnality has been saved.'), array('action' => 'index'));
			}
		}
		$profiles = $this->Profilfunctionnality->Profile->find('list');
		$functionnalities = $this->Profilfunctionnality->Functionnalitie->find('list');
		$this->set(compact('profiles', 'functionnalities'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Profilfunctionnality->exists($id)) {
			throw new NotFoundException(__('Invalid profilfunctionnality'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Profilfunctionnality->save($this->request->data)) {
				return $this->flash(__('The profilfunctionnality has been saved.'), array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Profilfunctionnality.' . $this->Profilfunctionnality->primaryKey => $id));
			$this->request->data = $this->Profilfunctionnality->find('first', $options);
		}
		$profiles = $this->Profilfunctionnality->Profile->find('list');
		$functionnalities = $this->Profilfunctionnality->Functionnalitie->find('list');
		$this->set(compact('profiles', 'functionnalities'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Profilfunctionnality->id = $id;
		if (!$this->Profilfunctionnality->exists()) {
			throw new NotFoundException(__('Invalid profilfunctionnality'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Profilfunctionnality->delete()) {
			return $this->flash(__('The profilfunctionnality has been deleted.'), array('action' => 'index'));
		} else {
			return $this->flash(__('The profilfunctionnality could not be deleted. Please, try again.'), array('action' => 'index'));
		}
	}
}
