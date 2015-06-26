<?php
/**
 * Created by PhpStorm.
 * User: Geezy-PC
 * Date: 08/05/15
 * Time: 20:43
 */

class UsersController extends AppController {

    public $name = 'Users';

    public function index() {
        //pour récupérer tous les utilisateurs
        $this->set('users', $this->User->find('all'));
    }

    public function add(){

        //On vérifie si c'est une demande post
       if(!empty($this->request->data))
        if ($this->request->is('post')){

            //Sauvegarde utilisateur
            if ($this->User->save($this->request->data)){

                //Notification de l'enregistement
                $this->Session->setFlash('Utilisateur édité.');
                //redirection sur la list user
                $this->redirect(array('action' => 'index'));

            }else{
                //if save failed
                $this->Session->setFlash('Impossible de modifier l&rsquo;utilisateur. S&rsquo;il vous plaît , essayez de nouveau .');

            }
        }
    }

    public function view($id = null) {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid User'));
        }
        $options = array('conditions' => array('user.' . $this->User->primaryKey => $id));
        $this->set('user', $this->User->find('first', $options));
        $this->initMDP();
        $this->affectSrv();
    }

    public function edit() {
        //On obtient l'ID de l'utilisateur à éditer
        $id = $this->request->params['pass'][0];

        //On définie l' id de l'utilisateur
        $this->User->id = $id;

        //On vérifie si un utilisateur existe avec cet id
        if( $this->User->exists() ){

            if( $this->request->is( 'post' ) || $this->request->is( 'put' ) ){

                if( $this->User->save( $this->request->data ) ){

                    $this->Session->setFlash('Utilisateur édité.');

                    $this->redirect(array('action' => 'index'));

                }else{
                    $this->Session->setFlash('Impossible de modifier l&rsquo;utilisateur. S&rsquo;il vous plaît , essayez de nouveau .');
                }

            }else{

                // lecture des données de l'utilisateur
                //remplissage de notre formulaire en html automatiquement
                $this->request->data = $this->User->read();
            }

        }else{
            //Si il nnous allons indiquer à l'utilisateur qu'il n'y a pas l'utilisateur
            $this->Session->setFlash('L&rsquo;utilisateur que vous essayez de modifier n&rsquo;existe pas .');
            $this->redirect(array('action' => 'index'));


        }


    }

    public function delete() {
        $id = $this->request->params['pass'][0];


        if( $this->request->is('get') ){

            $this->Session->setFlash('Méthode Delete n&rsquo;est pas autorisé ');
            $this->redirect(array('action' => 'index'));


        }else{

            if( !$id ) {
                $this->Session->setFlash('Id invalide pour l&rsquo;utilisateur');
                $this->redirect(array('action'=>'index'));

            }else{

                if( $this->User->delete( $id ) ){

                    $this->Session->setFlash('L&rsquo;utilisateur a été supprimé .');

                    $this->redirect(array('action'=>'index'));

                }else{

                    $this->Session->setFlash('Impossible de supprimer l&rsquo;utilisateur .');
                    $this->redirect(array('action' => 'index'));
                }
            }
        }
    }

    public function initMDP(){
        //On obtient l'ID de l'utilisateur à éditer
        $id = $this->request->params['pass'][0];

        //On définie l' id de l'utilisateur
        $this->User->id = $id;

        //On vérifie si un utilisateur existe avec cet id
        if( $this->User->exists() ){
            if( $this->request->is( 'post' ) || $this->request->is( 'put' ) ){
                if( $this->User->save( $this->request->data ) ){
                    $this->Session->setFlash('Mot de passe édité.');
                }else{
                    $this->Session->setFlash('Impossible de modifier le mot de passe. S&rsquo;il vous plaît , essayez de nouveau .');
                }
            }else{
                // lecture des données de l'utilisateur
                //remplissage de notre formulaire en html automatiquement
                $this->request->data = $this->User->read();
            }

        }else{
            //Si il nnous allons indiquer à l'utilisateur qu'il n'y a pas l'utilisateur
            $this->Session->setFlash('Le mot de passe de l&rsquo;utilisateur que vous essayez de modifier n&rsquo;existe pas .');
            //$this->redirect(array('action' => 'view'));
        }

    }

    public function affectSrv( ){

        //populate DDL services
        //$dataServices = $this->User->Service->find('list', array('fields' => array('Service.id', 'Service.service_name')));
        //$this->set('services', $dataServices);

        //On obtient l'ID de l'utilisateur à éditer
        $id = $this->request->params['pass'][0];

        //On définie l' id de l'utilisateur
        $this->User->id = $id;

        //On vérifie si un utilisateur existe avec cet id
        if( $this->User->exists() ){
            if( $this->request->is( 'post' ) || $this->request->is( 'put' ) ){
                if( $this->User->save( $this->request->data ) ){
                    $this->Session->setFlash('Mot de passe édité.');
                }else{
                    $this->Session->setFlash('Impossible de modifier le mot de passe. S&rsquo;il vous plaît , essayez de nouveau .');
                }
            }else{
                // lecture des données de l'utilisateur
                //remplissage de notre formulaire en html automatiquement
                $this->request->data = $this->User->read();
            }

        }else{
            //Si il nnous allons indiquer à l'utilisateur qu'il n'y a pas l'utilisateur
            $this->Session->setFlash('Le mot de passe de l&rsquo;utilisateur que vous essayez de modifier n&rsquo;existe pas .');
            //$this->redirect(array('action' => 'view'));
        }
    }

}

?>