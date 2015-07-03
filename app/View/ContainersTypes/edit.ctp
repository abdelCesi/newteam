<h2>Modifier un type de conteneur</h2>

<?php
	echo $this->Form->create('ContainersType');
	echo $this->Form->input('id');
	echo $this->Form->input('label');
	echo $this->Form->submit('Modifier', 
        array('after' => $this->Html->link('Annuler', array('action' => 'index'), array('class' => 'btn btn-default', 'style' => 'margin-left:10px'), "Etes-vous sûr de quitter cette page ?"))
    );
	echo $this->Form->end();
?>