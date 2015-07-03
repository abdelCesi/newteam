<?php
App::uses('AppModel', 'Model');
/**
 * Profile Model
 *
 * @property WorkingHour $WorkingHour
 * @property Profil $Profil
 */
class Profile extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'WorkingHour' => array(
			'className' => 'WorkingHour',
			'foreignKey' => 'working_hour_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'profile_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */	
	public $hasAndBelongsToMany = array( 'Functionnality' => array( 'className' => 'Functionnality', 'joinTable' => 'profilfunctionnalities') );
}
