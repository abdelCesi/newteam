<?php

class ClassesArticle extends AppModel{
	public $validate = array(
		'label' => array('rule' => 'notEmpty')
	);

    public $hasMany = array(
	    'Underlings' => array(
	        'className' => 'ClassesArticle',
	        'foreignKey' => 'classe_id'
	    ),
        'RefArticle' => array(
            'className' => 'RefArticle',
            'foreignKey' => 'classe_id'
        ),
        'Place' => array(
        	'classeName' => 'Place',
        	'foreignKey' => 'classesArticle_id'
    	)
    );	

	//public $recursive = -1;
	public $belongsTo = array(
	    'Supervisor' => array(
	        'className' => 'ClassesArticle',
	        'foreignKey' => 'classe_id',
	        'order' => 'ClassesArticle.id'
	    ),
	);


}

?>