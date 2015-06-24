<?php
App::uses('AppController', 'Controller');
/**
 * Lengths Controller
 *
 * @property Length $Length
 * @property PaginatorComponent $Paginator
 */
class LengthsController extends AppController {

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
		$this->Length->recursive = 0;
		$this->set('lengths', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Length->exists($id)) {
			throw new NotFoundException(__('Invalid length'));
		}
		$options = array('conditions' => array('Length.' . $this->Length->primaryKey => $id));
		$this->set('length', $this->Length->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Length->create();
			if ($this->Length->save($this->request->data)) {
				$this->Session->setFlash(__('The length has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The length could not be saved. Please, try again.'));
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
		if (!$this->Length->exists($id)) {
			throw new NotFoundException(__('Invalid length'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Length->save($this->request->data)) {
				$this->Session->setFlash(__('The length has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The length could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Length.' . $this->Length->primaryKey => $id));
			$this->request->data = $this->Length->find('first', $options);
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
		$this->Length->id = $id;
		if (!$this->Length->exists()) {
			throw new NotFoundException(__('Invalid length'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Length->delete()) {
			$this->Session->setFlash(__('The length has been deleted.'));
		} else {
			$this->Session->setFlash(__('The length could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
