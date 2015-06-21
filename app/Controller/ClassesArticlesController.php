<?php

class ClassesArticlesController extends AppController{
	public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('classesarticles', $this->ClassesArticle->find('all'));
    }	

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $class = $this->ClassesArticle->findById($id);
        if (!$class) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('class', $class);
    }	

    public function add() {
        //populate DDL
        $data = $this->ClassesArticle->find('list', array('fields' => array('id', 'label')));
        $this->set('classesarticles', $data);

        if ($this->request->is('post')) {
            $this->ClassesArticle->create();
            if ($this->ClassesArticle->save($this->request->data)) {
                $this->Session->setFlash(__('Your class has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your class.'));
        }
    }

    public function edit($id = null) {
        //populate DDL
        $data = $this->ClassesArticle->find('list', array('fields' => array('id', 'label')));
        $this->set('classesarticles', $data);
        
        if (!$id) {
            throw new NotFoundException(__('Invalid class'));
        }

        $class = $this->ClassesArticle->findById($id);
        if (!$class) {
            throw new NotFoundException(__('Invalid class'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->ClassesArticle->id = $id;
            if ($this->ClassesArticle->save($this->request->data)) {
                $this->Session->setFlash(__('Your class has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to update your class.'));
        }

        if (!$this->request->data) {
            $this->request->data = $class;
        }
    }

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->ClassesArticle->delete($id)) {
            $this->Session->setFlash(
                __('La classe avec id : %s a été supprimé.', h($id))
            );
        } else {
            $this->Session->setFlash(
                __('La classe avec l\'id: %s n\'a pas pu être supprimé.', h($id))
            );
        }

        return $this->redirect(array('action' => 'index'));
    }

}

?>