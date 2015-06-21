<!-- Fichier: /app/View/Posts/edit.ctp -->

<h1>Editer la classe</h1>
<?php
echo $this->Form->create('ClassesArticle');
echo $this->Form->input('label');
echo $this->Form->select('classe_id', $classesarticles);
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Sauvegarder la classe');
?>