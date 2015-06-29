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


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Profilfunctionnality' => array(
			'className' => 'Profilfunctionnality',
			'foreignKey' => 'functionnality_id',
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

}
