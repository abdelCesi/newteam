<?php

App::uses('AppController', 'Controller');

class ArticlesUnitsContoller extends AppController{
    public $helpers = array('Html', 'Form');
    public $components = array('Paginator');

    public function index() {
        $this->set('articles_units', $this->ArticlesUnit->find('all'));
    }   

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $unit = $this->ArticlesUnit->findById($id);
        if (!$unit) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('unit', $unit);
    }   

    public function add() {
        if ($this->request->is('post')) {
            $this->ArticlesUnit->create();
            if ($this->ArticlesUnit->save($this->request->data)) {
                $this->Session->setFlash(__('Your Article Unit has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your Article Unit.'));
        }
    }

    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid Article Unit'));
        }

        $unit = $this->ArticlesUnit->findById($id);
        if (!$unit) {
            throw new NotFoundException(__('Invalid Article Unit'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->ArticlesUnit->id = $id;
            if ($this->ArticlesUnit->save($this->request->data)) {
                $this->Session->setFlash(__('Your Article Unit has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to update your Article Unit.'));
        }

        if (!$this->request->data) {
            $this->request->data = $unit;
        }
    }

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->ArticlesUnit->delete($id)) {
            $this->Session->setFlash(
                __('L\'unité d\'article avec id : %s a été supprimé.', h($id))
            );
        } else {
            $this->Session->setFlash(
                __('L\'unité d\'article avec l\'id: %s n\'a pas pu être supprimé.', h($id))
            );
        }

        return $this->redirect(array('action' => 'index'));
    }

}

?>