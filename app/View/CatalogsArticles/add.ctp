<!-- Fichier : /app/View/ClassesArticles/add.ctp -->

<h1>Ajouter un catalogue</h1>
<?php
echo $this->Form->create('CatalogsArticle');
echo $this->Form->input('label');
echo $this->Form->end('Sauvegarder le catalogue');
?>