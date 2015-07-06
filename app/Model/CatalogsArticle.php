<?php

class CatalogsArticle extends AppModel{
	public $validate = array(
		'label' => array('rule' => 'notEmpty')
	);

    /*public $hasMany = array(
        'RefArticle' => array(
            'className' => 'RefArticle',
            'foreignKey' => 'catalog_id'
        )
    );*/

}

?>