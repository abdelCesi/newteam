<!-- Fichier : /app/View/ClassesArticles/add.ctp -->

<h1>Ajouter une référence article</h1>
<?php
echo $this->Form->create('RefArticle');
echo $this->Form->input('reference');
echo $this->Form->input('label');
echo $this->Form->input('weight');
//echo $this->Form->label('ClassesArticle', 'Veuillez choisir une classe');
//echo $this->Form->select('classe_id', $classesarticles,['empty' => '(choisissez)']);
echo $this->Form->input('classe_id', array(
					      'options' => $classesarticles,
					      'empty' => '(choisissez)'
						));
//echo $this->Form->label('CatalogsArticle', 'Veuillez choisir un catalogue');
//echo $this->Form->select('catalog_id', $catalogsarticles,['empty' => '(choisissez)']);
echo $this->Form->input('catalog_id', array(
					      'options' => $catalogsarticles,
					      'empty' => '(choisissez)'
						));
echo $this->Form->end('Sauvegarder la référence');
?>