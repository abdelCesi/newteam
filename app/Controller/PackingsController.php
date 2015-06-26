<?php
App::uses('AppController', 'Controller');
/**
 * Packings Controller
 *
 * @property Packing $Packing
 * @property PaginatorComponent $Paginator
 */
class PackingsController extends AppController {

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
		$this->Packing->recursive = 0;
		$this->set('packings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Packing->exists($id)) {
			throw new NotFoundException(__('Invalid packing'));
		}
		$options = array('conditions' => array('Packing.' . $this->Packing->primaryKey => $id));
		$this->set('packing', $this->Packing->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Packing->create();
			if ($this->Packing->save($this->request->data)) {
				$this->Session->setFlash(__('The packing has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The packing could not be saved. Please, try again.'));
			}
		}
		$lengths = $this->Packing->Length->find('list');
		$widths = $this->Packing->Width->find('list');
		$heights = $this->Packing->Height->find('list');
		$this->set(compact('lengths', 'widths', 'heights'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Packing->exists($id)) {
			throw new NotFoundException(__('Invalid packing'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Packing->save($this->request->data)) {
				$this->Session->setFlash(__('The packing has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The packing could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Packing.' . $this->Packing->primaryKey => $id));
			$this->request->data = $this->Packing->find('first', $options);
		}
		$lengths = $this->Packing->Length->find('list');
		$widths = $this->Packing->Width->find('list');
		$heights = $this->Packing->Height->find('list');
		$this->set(compact('lengths', 'widths', 'heights'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Packing->id = $id;
		if (!$this->Packing->exists()) {
			throw new NotFoundException(__('Invalid packing'));
		}

		if ($this->Packing->delete()) {
			$this->Session->setFlash(__('The packing has been deleted.'));
		} else {
			$this->Session->setFlash(__('The packing could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
