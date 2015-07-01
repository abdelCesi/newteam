<?php
App::uses('AppController', 'Controller');
/**
 * Containers Controller
 *
 * @property Container $Container
 * @property PaginatorComponent $Paginator
 */
class ContainersController extends AppController {

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
		$this->Container->recursive = 0;
		$this->set('containers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Container->exists($id)) {
			throw new NotFoundException(__('Invalid container'));
		}
		$options = array('conditions' => array('Container.' . $this->Container->primaryKey => $id));
		$this->set('container', $this->Container->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Container->create();
			if ($this->Container->save($this->request->data)) {
				$this->Session->setFlash(__('The container has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The container could not be saved. Please, try again.'));
			}
		}
		$places = $this->Container->Place->find('list');
		$packings = $this->Container->Packing->find('list',  array('fields' => array('Packing.id', 'Packing.label')));
		$receptionorders = $this->Container->Receptionorder->find('list');
		$shippingorders = $this->Container->Shippingorder->find('list');
		$this->set(compact('places', 'packings', 'receptionorders', 'shippingorders'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Container->exists($id)) {
			throw new NotFoundException(__('Invalid container'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Container->save($this->request->data)) {
				$this->Session->setFlash(__('The container has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The container could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Container.' . $this->Container->primaryKey => $id));
			$this->request->data = $this->Container->find('first', $options);
		}
		$places = $this->Container->Place->find('list');
		$packings = $this->Container->Packing->find('list',  array('fields' => array('Packing.id', 'Packing.label')));
		$receptionorders = $this->Container->Receptionorder->find('list');
		$shippingorders = $this->Container->Shippingorder->find('list');
		$this->set(compact('places', 'packings', 'receptionorders', 'shippingorders'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Container->id = $id;
		if (!$this->Container->exists()) {
			throw new NotFoundException(__('Invalid container'));
		}

		if ($this->Container->delete()) {
			$this->Session->setFlash(__('The container has been deleted.'));
		} else {
			$this->Session->setFlash(__('The container could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	/*public function moveContainer($container_id, $place_id){

		$this->Container->id = $container_id;
		//$this->Container->Place->id = $place_id;
		if (!$this->Container->exists()) {
			throw new NotFoundException(__('Invalid container'));
			//return false;
		}else{
			//$this->Container->read(null, 1);
			$this->Container->set('place_id', $place_id);
			if ($this->Container->save()){
				$this->Session->setFlash(__('The container has been moved.'));
				//return true;
			}else{
				$this->Session->setFlash(__('The container could not be moved. Please, try again.'));
				//return false;
			}	
			return $this->redirect(array('action' => 'index'));
		}

	}*/


}
