<?php
App::uses('AppController', 'Controller');
/**
 * Rdvs Controller
 *
 * @property Rdv $Rdv
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class RdvsController extends AppController {

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
		$this->Rdv->recursive = 0;
		$this->set('rdvs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Rdv->exists($id)) {
			throw new NotFoundException(__('Invalid rdv'));
		}
		$options = array('conditions' => array('Rdv.' . $this->Rdv->primaryKey => $id));
		$this->set('rdv', $this->Rdv->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Rdv->create();
			if ($this->Rdv->save($this->request->data)) {
				$this->Session->setFlash(__('The rdv has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rdv could not be saved. Please, try again.'));
			}
		}
		$users = $this->Rdv->User->find('list');
		$dates = $this->Rdv->Date->find('list');
		$this->set(compact('users', 'dates'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Rdv->exists($id)) {
			throw new NotFoundException(__('Invalid rdv'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Rdv->save($this->request->data)) {
				$this->Session->setFlash(__('The rdv has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rdv could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Rdv.' . $this->Rdv->primaryKey => $id));
			$this->request->data = $this->Rdv->find('first', $options);
		}
		$users = $this->Rdv->User->find('list');
		$dates = $this->Rdv->Date->find('list');
		$this->set(compact('users', 'dates'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Rdv->id = $id;
		if (!$this->Rdv->exists()) {
			throw new NotFoundException(__('Invalid rdv'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Rdv->delete()) {
			$this->Session->setFlash(__('The rdv has been deleted.'));
		} else {
			$this->Session->setFlash(__('The rdv could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
