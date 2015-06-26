<!-- Fichier : /app/View/ClassesArticles/add.ctp -->

<h1>Ajouter un catalogue</h1>

<?php
//formulaire d'ajout , nommage des noms de colonnes pareil que ceux en base
	echo $this->Form->create('CatalogsArticle');

	echo $this->Form->input('label');

	echo $this->Form->submit('Créer', 
		array('after' => $this->Html->link('Annuler', array('action' => 'index'), array('class' => 'btn btn-default', 'style' => 'margin-left:10px'), "Etes-vous sûr de quitter cette page ?"))
	);
	echo $this->Form->end();




?>