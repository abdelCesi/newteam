<?php
class ArticlesUnit extends AppModel{
	public $validate = array(
		'validity_date' => array('rule' => 'notEmpty')
	);

    public $belongsTo = array(
        'RefArticle' => array(
            'className' => 'RefArticle',
            'foreignKey' => 'ref_article_id'
        ),
        'Container' => array(
            'className' => 'Container',
            'foreignKey' => 'container_id'
        )
    );

}
?>