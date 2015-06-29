
<h2>Ajout d'une fonctionnalité</h2>

<?php
//formulaire d'ajout , nommage des noms de colonnes pareil que ceux en base
echo $this->Form->create('Functionnality');
	
	echo $this->Form->input('id');
    echo $this->Form->input('name');
    echo $this->Form->input('function_type');
    echo $this->Form->input('description');


	echo $this->Form->submit('Modifier', 
        array('after' => $this->Html->link('Annuler', array('action' => 'index'), array('class' => 'btn btn-default', 'style' => 'margin-left:10px'), "Etes-vous sûr de quitter cette page ?"))
    );
    echo $this->Form->end();

?>