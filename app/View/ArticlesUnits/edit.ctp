
<h2>Modification d'une unité article</h2>


<?php
//formulaire d'ajout , nommage des noms de colonnes pareil que ceux en base
echo $this->Form->create('User');
		echo $this->Form->input('id');
		echo $this->Form->input('container_id');
		echo $this->Form->input('validity_date');
		echo $this->Form->input('ref_article_id');
		
	echo $this->Form->submit('Créer', 
        array('after' => $this->Html->link('Annuler', array('action' => 'index'), array('class' => 'btn btn-default', 'style' => 'margin-left:10px'), "Etes-vous sûr de quitter cette page ?"))
    );
    echo $this->Form->end();




?>