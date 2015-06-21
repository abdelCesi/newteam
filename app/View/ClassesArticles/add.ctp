<!-- Fichier : /app/View/ClassesArticles/add.ctp -->

<h1>Ajouter une classe</h1>
<?php
echo $this->Form->create('ClassesArticle');
echo $this->Form->input('label');
echo $this->Form->select('classe_id', $classesarticles);
echo $this->Form->end('Sauvegarder la classe');
?>