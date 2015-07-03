

<h2>Ajouter un profil</h2>

<!-- Page d'ajout d'un profil -->

<?php
//formulaire d'ajout , nommage des noms de colonnes pareil que ceux en base
	echo $this->Form->create('Profile', array(
    'inputDefaults'=>array('div'=>'false', 'label'=>false)));
	
	echo $this->Form->input('profile_name',
			array ('label' => 'Nom du profil '));
	echo $this->Form->input('working_hour_id',
			array('type'=>'select','options'=>$workingHours, 'label' => 'Code de l\'&eacute;quipe pour les horaires&nbsp;'));

	echo $this->Form->submit('Valider', 
        array('after' => $this->Html->link('Annuler', array('action' => 'index'), array('class' => 'btn btn-default', 'style' => 'margin-left:10px')))
    );

?>