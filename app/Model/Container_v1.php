<?php
class ArticlesUnit extends AppModel{

	public $validate = array(
		'code' => array('rule' => 'notEmpty'),
        'status' => array('rule' => 'notEmpty')
	);

    public $hasMany = array(
        'ArticlesUnit' => array(
            'className' => 'ArticlesUnit',
            'foreignKey' => 'container_id'
        )
    ); 

}
?>
