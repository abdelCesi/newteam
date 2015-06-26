<!-- Fichier: /app/View/Posts/edit.ctp -->


<h2>Editer une classe</h2>


<?php
//formulaire d'ajout , nommage des noms de colonnes pareil que ceux en base
	echo $this->Form->create('ClassesArticle');

	echo $this->Form->create('ClassesArticle');
	echo $this->Form->input('label');
	echo $this->Form->select('classe_id', $classesarticles);

	echo $this->Form->submit('Sauvegarder la classe', 
        array('after' => $this->Html->link('Annuler', array('action' => 'index'), array('class' => 'btn btn-default', 'style' => 'margin-left:10px'), "Etes-vous sûr de quitter cette page ?"))
    );
    echo $this->Form->end();

?>