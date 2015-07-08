

<h2>Création d'un conditionnement</h2>

<?php
//formulaire d'ajout , nommage des noms de colonnes pareil que ceux en base
echo $this->Form->create('Packing');

		echo $this->Form->input('label', array(
			'label' => 'Libellé',
	      	'class' => 'form-control'
			));
		echo $this->Form->input('length_id', array(
			'label' => 'Longueur',
			'empty' => '(choisissez)',
	      	'class' => 'form-control'));
		echo $this->Form->input('width_id', array(
			'label' => 'Largeur',
			'empty' => '(choisissez)',
	      	'class' => 'form-control'));
		echo $this->Form->input('height_id', array(
			'label' => 'Hauteur',
			'empty' => '(choisissez)',
	      	'class' => 'form-control'));

	echo $this->Form->submit('Créer', 
        array('after' => $this->Html->link('Annuler', array('action' => 'index'), array('class' => 'btn btn-default', 'style' => 'margin-left:10px'), "Etes-vous sûr de quitter cette page ?"))
    );
    echo $this->Form->end();

?>