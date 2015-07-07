<?php

class CatalogsArticlesController extends AppController{
	public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('catalogsarticles', $this->CatalogsArticle->find('all'));
    }	

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $catalog = $this->CatalogsArticle->findById($id);
        if (!$catalog) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('catalog', $catalog);
    }	

    public function add() {
        if ($this->request->is('post')) {
            $this->CatalogsArticle->create();
            if ($this->CatalogsArticle->save($this->request->data)) {
                $this->Session->setFlash(__('Your catalog has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your catalog.'));
        }
    }

    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid catalog'));
        }

        $catalog = $this->CatalogsArticle->findById($id);
        if (!$catalog) {
            throw new NotFoundException(__('Invalid catalog'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->CatalogsArticle->id = $id;
            if ($this->CatalogsArticle->save($this->request->data)) {
                $this->Session->setFlash(__('Your catalog has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to update your catalog.'));
        }

        if (!$this->request->data) {
            $this->request->data = $catalog;
        }
    }

    public function delete($id) {
        /*if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }*/

        if ($this->CatalogsArticle->delete($id)) {
            $this->Session->setFlash(
                __('Le catalogue avec id : %s a été supprimé.', h($id))
            );
        } else {
            $this->Session->setFlash(
                __('Le catalogue avec l\'id: %s n\'a pas pu être supprimé.', h($id))
            );
        }

        return $this->redirect(array('action' => 'index'));
    }

}

?>