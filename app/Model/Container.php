<?php
App::uses('AppModel', 'Model');

class Container extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty')
			),
		),
		'code' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty')
			),
		),
		'status' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty')
			),
		),
		'packing_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty')
			),
		),
		'containerType_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty')
			),
		),
		'place_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'required' => false
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
		'Place',
		'Packing',
		'ContainersType'
	);

/**
 * hasMany associations
 *
 * @var array
 */
	/*public $hasMany = array(
		'ArticlesUnit',
		'Moveorder',
		'ContainersReceptionorder',
		'ContainersShippingorder'
	);*/


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	/*public $hasAndBelongsToMany = array(
		'Shippingorder',
		'Receptionorder'
	);*/

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
