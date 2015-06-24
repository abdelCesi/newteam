<?php
App::uses('AppController', 'Controller');
/**
 * Widths Controller
 *
 * @property Width $Width
 * @property PaginatorComponent $Paginator
 */
class WidthsController extends AppController {

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
		$this->Width->recursive = 0;
		$this->set('widths', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Width->exists($id)) {
			throw new NotFoundException(__('Invalid width'));
		}
		$options = array('conditions' => array('Width.' . $this->Width->primaryKey => $id));
		$this->set('width', $this->Width->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Width->create();
			if ($this->Width->save($this->request->data)) {
				$this->Session->setFlash(__('The width has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The width could not be saved. Please, try again.'));
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
		if (!$this->Width->exists($id)) {
			throw new NotFoundException(__('Invalid width'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Width->save($this->request->data)) {
				$this->Session->setFlash(__('The width has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The width could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Width.' . $this->Width->primaryKey => $id));
			$this->request->data = $this->Width->find('first', $options);
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
		$this->Width->id = $id;
		if (!$this->Width->exists()) {
			throw new NotFoundException(__('Invalid width'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Width->delete()) {
			$this->Session->setFlash(__('The width has been deleted.'));
		} else {
			$this->Session->setFlash(__('The width could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
