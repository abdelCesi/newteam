<?php
App::uses('AppController', 'Controller');
/**
 * ContainersTypes Controller
 *
 * @property ContainersType $ContainersType
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ContainersTypesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ContainersType->recursive = 0;
		$this->set('containersTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ContainersType->exists($id)) {
			throw new NotFoundException(__('Invalid containers type'));
		}
		$options = array('conditions' => array('ContainersType.' . $this->ContainersType->primaryKey => $id));
		$this->set('containersType', $this->ContainersType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ContainersType->create();
			if ($this->ContainersType->save($this->request->data)) {
				$this->Session->setFlash(__('The containers type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The containers type could not be saved. Please, try again.'));
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
		if (!$this->ContainersType->exists($id)) {
			throw new NotFoundException(__('Invalid containers type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ContainersType->save($this->request->data)) {
				$this->Session->setFlash(__('The containers type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The containers type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ContainersType.' . $this->ContainersType->primaryKey => $id));
			$this->request->data = $this->ContainersType->find('first', $options);
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
		$this->ContainersType->id = $id;
		if (!$this->ContainersType->exists()) {
			throw new NotFoundException(__('Invalid containers type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ContainersType->delete()) {
			$this->Session->setFlash(__('The containers type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The containers type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
