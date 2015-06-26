<?php
App::uses('AppController', 'Controller');
/**
 * ArticlesUnits Controller
 *
 * @property ArticlesUnit $ArticlesUnit
 * @property PaginatorComponent $Paginator
 */
class ArticlesUnitsController extends AppController {

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
		$this->ArticlesUnit->recursive = 0;
		$this->set('articlesUnits', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ArticlesUnit->exists($id)) {
			throw new NotFoundException(__('Invalid articles unit'));
		}
		$options = array('conditions' => array('ArticlesUnit.' . $this->ArticlesUnit->primaryKey => $id));
		$this->set('articlesUnit', $this->ArticlesUnit->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ArticlesUnit->create();
			if ($this->ArticlesUnit->save($this->request->data)) {
				$this->Session->setFlash(__('The articles unit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The articles unit could not be saved. Please, try again.'));
			}
		}
		$refArticles = $this->ArticlesUnit->RefArticle->find('list');
		$containers = $this->ArticlesUnit->Container->find('list');
		$this->set(compact('refArticles', 'containers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ArticlesUnit->exists($id)) {
			throw new NotFoundException(__('Invalid articles unit'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ArticlesUnit->save($this->request->data)) {
				$this->Session->setFlash(__('The articles unit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The articles unit could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ArticlesUnit.' . $this->ArticlesUnit->primaryKey => $id));
			$this->request->data = $this->ArticlesUnit->find('first', $options);
		}
		$refArticles = $this->ArticlesUnit->RefArticle->find('list');
		$containers = $this->ArticlesUnit->Container->find('list');
		$this->set(compact('refArticles', 'containers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ArticlesUnit->id = $id;
		if (!$this->ArticlesUnit->exists()) {
			throw new NotFoundException(__('Invalid articles unit'));
		}
		
		if ($this->ArticlesUnit->delete()) {
			$this->Session->setFlash(__('The articles unit has been deleted.'));
		} else {
			$this->Session->setFlash(__('The articles unit could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
