<?php
App::uses('AppController', 'Controller');
/**
 * WorkingHours Controller
 *
 * @property WorkingHour $WorkingHour
 * @property PaginatorComponent $Paginator
 */
class WorkingHoursController extends AppController {

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
		$this->WorkingHour->recursive = 0;
		$this->set('workingHours', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->WorkingHour->exists($id)) {
			throw new NotFoundException(__('Invalid working hour'));
		}
		$options = array('conditions' => array('WorkingHour.' . $this->WorkingHour->primaryKey => $id));
		$this->set('workingHour', $this->WorkingHour->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->WorkingHour->create();
			if ($this->WorkingHour->save($this->request->data)) {
				return $this->flash(__('The working hour has been saved.'), array('action' => 'index'));
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
		if (!$this->WorkingHour->exists($id)) {
			throw new NotFoundException(__('Invalid working hour'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->WorkingHour->save($this->request->data)) {
				return $this->flash(__('The working hour has been saved.'), array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('WorkingHour.' . $this->WorkingHour->primaryKey => $id));
			$this->request->data = $this->WorkingHour->find('first', $options);
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
		$this->WorkingHour->id = $id;
		if (!$this->WorkingHour->exists()) {
			throw new NotFoundException(__('Invalid working hour'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->WorkingHour->delete()) {
			return $this->flash(__('The working hour has been deleted.'), array('action' => 'index'));
		} else {
			return $this->flash(__('The working hour could not be deleted. Please, try again.'), array('action' => 'index'));
		}
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->WorkingHour->recursive = 0;
		$this->set('workingHours', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->WorkingHour->exists($id)) {
			throw new NotFoundException(__('Invalid working hour'));
		}
		$options = array('conditions' => array('WorkingHour.' . $this->WorkingHour->primaryKey => $id));
		$this->set('workingHour', $this->WorkingHour->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->WorkingHour->create();
			if ($this->WorkingHour->save($this->request->data)) {
				return $this->flash(__('The working hour has been saved.'), array('action' => 'index'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->WorkingHour->exists($id)) {
			throw new NotFoundException(__('Invalid working hour'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->WorkingHour->save($this->request->data)) {
				return $this->flash(__('The working hour has been saved.'), array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('WorkingHour.' . $this->WorkingHour->primaryKey => $id));
			$this->request->data = $this->WorkingHour->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->WorkingHour->id = $id;
		if (!$this->WorkingHour->exists()) {
			throw new NotFoundException(__('Invalid working hour'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->WorkingHour->delete()) {
			return $this->flash(__('The working hour has been deleted.'), array('action' => 'index'));
		} else {
			return $this->flash(__('The working hour could not be deleted. Please, try again.'), array('action' => 'index'));
		}
	}
}
