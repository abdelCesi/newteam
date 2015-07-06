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

    /*public $hasMany = array(
        'ArticlesUnit' => array(
            'className' => 'ArticlesUnit',
            'foreignKey' => 'ref_article_id'
        )
    );*/  

    public function search($content) {
        $result = $this->find('all',
            array('order' => array('RefArticle.id ASC'),
                'conditions' => array('OR' => array(
                    'RefArticle.reference LIKE' => '%'.$content.'%',
                    'RefArticle.label LIKE' => '%'.$content.'%',
                    'CatalogsArticle.label LIKE' => '%'.$content.'%',
                    'ClassesArticle.label LIKE' => '%'.$content.'%')
                )
            )
        );

        return $result;
    }

}

?>