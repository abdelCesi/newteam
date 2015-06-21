<!-- Fichier: /app/View/RefArticles/edit.ctp -->

<h1>Editer une référence article</h1>
<?php
echo $this->Form->create('RefArticle');
echo $this->Form->input('reference');
echo $this->Form->input('label');
echo $this->Form->input('weight');
//echo $this->Form->select('classe_id', $classesarticles);
//echo $this->Form->select('catalog_id', $catalogsarticles);
echo $this->Form->input('classe_id', array(
					      'options' => $classesarticles,
					      'empty' => '(choisissez)'
						));
echo $this->Form->input('catalog_id', array(
					      'options' => $catalogsarticles,
					      'empty' => '(choisissez)'
						));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Sauvegarder la référence');
?>