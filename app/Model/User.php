<?php
/**
 * Created by PhpStorm.
 * User: Geezy-PC
 * Date: 08/05/15
 * Time: 21:27
 */

class User extends AppModel {
    public $name = 'User';
    public $displayField = 'name';

 // Restriction champs formulaires
    public $validate = array(
        'firstname'=>array(
            'Entrer votre prénom svp.'=>array(
                'rule'=>'notEmpty',
                'message'=>'Entrer votre prénom svp.'
            )
        ),
        'username'=>array(
            'Le nom d&rsquo;utilisateur doit être compris entre 5 et 15 caractères.'=>array(
                'rule'=>array('between', 5, 15),
                'message'=>'Le nom d&rsquo;utilisateur doit être compris entre 5 et 15 caractères.'
            ),
            'Ce nom d&rsquo;utilisateur est déjà pris'=>array(
                'rule'=>'isUnique',
                'message'=>'Ce nom d&rsquo;utilisateur est déjà pris .'
            )
        ),
        'mail'=>array(
            'Valider l&rsquo;email'=>array(
                'rule'=>array('email'),
                'message'=>'Veuillez entrer une adresse email valable svp.'
            )
        ),

        'password'=>array(
            'Veuillez entrer votre mot de passe svp.'=>array(
                'rule'=>array('between', 5, 10),
                'message'=>'Veuillez entrer un mot de passe valide svp'
            )
        ),

         'phone_number'=>array(
            'Veuillez entrer votre n° de téléphone svp.'=>array(
                'rule'=>array('between',10, 10),
                'message'=>'Veuillez entrer un n° de téléphone valide svp'
            )
        )
    );

}
?>