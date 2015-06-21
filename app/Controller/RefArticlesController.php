<?php

class RefArticlesController extends AppController{
	public $helpers = array('Html', 'Form');
    public $components = array('Paginator');

    public $paginate = array(
        'limit' => 1,
        'order' => array(
            'RefArticle.label' => 'asc'
        )
    );

    public function index() {
        $this->set('refarticles', $this->RefArticle->find('all'));
        $this->set('refarticles', $this->Paginator->paginate());
    }	

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $ref = $this->RefArticle->findById($id);
        if (!$ref) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('ref', $ref);
    }	

    public function add() {

        //populate DDL classes article
        $dataClasses = $this->RefArticle->ClassesArticle->find('list', array('fields' => array('ClassesArticle.id', 'ClassesArticle.label')));
        $this->set('classesarticles', $dataClasses);

        //populate DDL catalog article
        $dataCatalogs = $this->RefArticle->CatalogsArticle->find('list', array('fields' => array('CatalogsArticle.id', 'CatalogsArticle.label')));
        $this->set('catalogsarticles', $dataCatalogs);

        if ($this->request->is('post')) {
            $this->RefArticle->create();
            if ($this->RefArticle->save($this->request->data)) {
                $this->Session->setFlash(__('Your ref has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your ref.'));
        }
    }

    public function edit($id = null) {

        //populate DDL classes article
        $dataClasses = $this->RefArticle->ClassesArticle->find('list', array('fields' => array('ClassesArticle.id', 'ClassesArticle.label')));
        $this->set('classesarticles', $dataClasses);

        //populate DDL catalog article
        $dataCatalogs = $this->RefArticle->CatalogsArticle->find('list', array('fields' => array('CatalogsArticle.id', 'CatalogsArticle.label')));
        $this->set('catalogsarticles', $dataCatalogs);
        
        if (!$id) {
            throw new NotFoundException(__('Invalid ref'));
        }

        $ref = $this->RefArticle->findById($id);
        if (!$ref) {
            throw new NotFoundException(__('Invalid ref'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->RefArticle->id = $id;
            if ($this->RefArticle->save($this->request->data)) {
                $this->Session->setFlash(__('Your ref has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to update your ref.'));
        }

        if (!$this->request->data) {
            $this->request->data = $ref;
        }
    }

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->RefArticle->delete($id)) {
            $this->Session->setFlash(
                __('La reference d\'article avec id : %s a été supprimé.', h($id))
            );
        } else {
            $this->Session->setFlash(
                __('La reference d\'article avec l\'id: %s n\'a pas pu être supprimé.', h($id))
            );
        }

        return $this->redirect(array('action' => 'index'));
    }

}

?>