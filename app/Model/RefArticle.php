<?php

class RefArticle extends AppModel{
	public $validate = array(
		'reference' => array('rule' => 'notEmpty'),
		'label' => array('rule' => 'notEmpty'),
		'weight' => array('rule' => 'notEmpty')
	);

    public $belongsTo = array(
        'CatalogsArticle' => array(
            'className' => 'CatalogsArticle',
            'foreignKey' => 'catalog_id'
        ),
        'ClassesArticle' => array(
            'className' => 'ClassesArticle',
            'foreignKey' => 'classe_id'
        )
    );

    public $hasMany = array(
        'ArticlesUnit' => array(
            'className' => 'ArticlesUnit',
            'foreignKey' => 'ref_article_id'
        )
    );  

}

?>