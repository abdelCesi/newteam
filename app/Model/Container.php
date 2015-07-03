<?php
App::uses('AppModel', 'Model');
/**
 * Container Model
 *
 * @property Place $Place
 * @property Packing $Packing
 * @property ArticlesUnit $ArticlesUnit
 * @property Box $Box
 * @property Moveorder $Moveorder
 * @property Pallet $Pallet
 * @property Receptionorder $Receptionorder
 * @property Shippingorder $Shippingorder
 */
class Container extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'code' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'status' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		/*'place_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		'packing_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'containerType_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Place' => array(
			'className' => 'Place',
			'foreignKey' => 'place_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Packing' => array(
			'className' => 'Packing',
			'foreignKey' => 'packing_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ContainersType' => array(
			'className' => 'ContainersType',
			'foreignKey' => 'containerType_id'
		)
	);

	public $hasOne = array(
		'Box' => array(
			'className' => 'Box',
			'foreignKey' => 'container_id',
			'dependent' => false
		),
		'Pallet' => array(
			'className' => 'Pallet',
			'foreignKey' => 'container_id',
			'dependent' => false
		)
		);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'ArticlesUnit' => array(
			'className' => 'ArticlesUnit',
			'foreignKey' => 'container_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		/*'Box' => array(
			'className' => 'Box',
			'foreignKey' => 'container_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),*/
		'Moveorder' => array(
			'className' => 'Moveorder',
			'foreignKey' => 'container_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)/*,
		'Pallet' => array(
			'className' => 'Pallet',
			'foreignKey' => 'container_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)*/
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Receptionorder' => array(
			'className' => 'Receptionorder',
			'joinTable' => 'receptionorders_containers',
			'foreignKey' => 'container_id',
			'associationForeignKey' => 'receptionorder_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Shippingorder' => array(
			'className' => 'Shippingorder',
			'joinTable' => 'shippingorders_containers',
			'foreignKey' => 'container_id',
			'associationForeignKey' => 'shippingorder_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

	/**
	 * move container method
	 *
	 * @throws NotFoundException
	 * @param string $container_id, string &place_id
	 * @return boolean
	 */
	public function moveContainer($container_id, $place_id){

        /* Code emplacement */
        $place = new Place();
        /* end */

		$this->Container->id = $container_id;
		if (!$this->Container->exists()) {
			return false;
		}else{

            /* Code emplacement */
            $Place = $place->find('first', array(
                'conditions' => array('Place.id' => $this->Container->id)
            ));
            /* end */

			$this->Container->set('place_id', $place_id);

            /* Code emplacement */
            if ($place_id != '') {
                $Place->set('free', 1);
            }
            else {
                $Place->set('free', 0);
            }
            /* end */

			if ($this->Container->save()){
				return true;
			}else{
				return false;
			}
		}

	}

    public function search($content) {
        $result = $this->find('all',
            array('order' => array('Container.id ASC'),
                'conditions' => array('OR' => array(
                    'Container.id LIKE' => '%'.$content.'%',
                    'Container.code LIKE' => '%'.$content.'%',
                    'Container.status LIKE' => '%'.$content.'%',
                    'ContainersType.label LIKE' => '%'.$content.'%',
                    'Place.name LIKE' => '%'.$content.'%',
                    'Packing.label LIKE' => '%'.$content.'%')
                )
            )
        );

        return $result;
    }

}
