
<h2>Edition d'un conteneur</h2>



<?php
//formulaire d'ajout , nommage des noms de colonnes pareil que ceux en base
echo $this->Form->create('Container');

	echo $this->Form->input('id');
		echo $this->Form->input('code');
		echo $this->Form->input('status');
		echo $this->Form->input('place_id');
		echo $this->Form->input('packing_id');
		echo $this->Form->input('Receptionorder');
		echo $this->Form->input('Shippingorder');

	echo $this->Form->submit('Créer', 
        array('after' => $this->Html->link('Annuler', array('action' => 'index'), array('class' => 'btn btn-default', 'style' => 'margin-left:10px'), "Etes-vous sûr de quitter cette page ?"))
    );
    echo $this->Form->end();

?>