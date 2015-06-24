<?php
App::uses('AppController', 'Controller');
/**
 * Heights Controller
 *
 * @property Height $Height
 * @property PaginatorComponent $Paginator
 */
class HeightsController extends AppController {

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
		$this->Height->recursive = 0;
		$this->set('heights', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Height->exists($id)) {
			throw new NotFoundException(__('Invalid height'));
		}
		$options = array('conditions' => array('Height.' . $this->Height->primaryKey => $id));
		$this->set('height', $this->Height->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Height->create();
			if ($this->Height->save($this->request->data)) {
				$this->Session->setFlash(__('The height has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The height could not be saved. Please, try again.'));
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
		if (!$this->Height->exists($id)) {
			throw new NotFoundException(__('Invalid height'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Height->save($this->request->data)) {
				$this->Session->setFlash(__('The height has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The height could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Height.' . $this->Height->primaryKey => $id));
			$this->request->data = $this->Height->find('first', $options);
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
		$this->Height->id = $id;
		if (!$this->Height->exists()) {
			throw new NotFoundException(__('Invalid height'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Height->delete()) {
			$this->Session->setFlash(__('The height has been deleted.'));
		} else {
			$this->Session->setFlash(__('The height could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
