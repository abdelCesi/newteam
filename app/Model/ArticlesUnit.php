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

    public function search($content) {
        $result = $this->find('all',
            array('order' => array('ArticlesUnit.id ASC'),
                'conditions' => array('OR' => array(
                    'RefArticle.reference LIKE' => '%'.$content.'%',
                    'ArticlesUnit.validity_date LIKE' => '%'.$content.'%',
                    'ArticlesUnit.nb_article LIKE' => '%'.$content.'%',
                    'Container.code LIKE' => '%'.$content.'%')
                )
            )
        );

        return $result;
    }

}
?>