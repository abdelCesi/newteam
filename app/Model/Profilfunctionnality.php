<?php
App::uses('AppModel', 'Model');
/**
 * Profilfunctionnality Model
 *
 * @property Profile $Profile
 * @property Functionnalitie $Functionnalitie
 */
class Profilfunctionnality extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Profile' => array(
			'className' => 'Profile',
			'foreignKey' => 'profile_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Functionnalitie' => array(
			'className' => 'Functionnalitie',
			'foreignKey' => 'functionnalitie_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
