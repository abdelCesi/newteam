
<h2>Modification d'une date</h2>

<?php
//formulaire d'ajout , nommage des noms de colonnes pareil que ceux en base
echo $this->Form->create('Date');

	
	echo $this->Form->input('id');
	echo $this->Form->input('date_rdv');

	echo $this->Form->submit('Modifier', 
        array('after' => $this->Html->link('Annuler', array('action' => 'index'), array('class' => 'btn btn-default', 'style' => 'margin-left:10px'), "Etes-vous sûr de quitter cette page ?"))
    );
    echo $this->Form->end();

?>