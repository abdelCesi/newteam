<?php
App::uses('AppModel', 'Model');
/**
 * Functionnality Model
 *
 * @property Profil $Profil
 */
class Functionnality extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array( 'Profile' => array( 'className' => 'Profile', 'joinTable' => 'profilfunctionnalities') );

}
