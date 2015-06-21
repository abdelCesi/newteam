<!-- Fichier: /app/View/Posts/edit.ctp -->

<h1>Editer le catalogue</h1>
<?php
echo $this->Form->create('CatalogsArticle');
echo $this->Form->input('label');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Sauvegarder le catalogue');
?>