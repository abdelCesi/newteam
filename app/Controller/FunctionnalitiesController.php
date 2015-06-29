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
}
