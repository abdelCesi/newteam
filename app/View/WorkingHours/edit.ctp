

<h2>Modifier un horaire de travail</h2>

<!-- Page de modification d'un horaire de travail -->

<?php
//formulaire de modification , nommage des noms de colonnes pareil que ceux en base
	echo $this->Form->create('WorkingHour', array('inputDefaults'=>array('div'=>'false', 'label'=>false)));

		echo $this->Form->input('id');
		echo $this->Form->input('team_code', array ('label' => 'Code de l\'équipe '));
		echo $this->Form->input('category', array ('label' => 'Catégorie '));
		echo $this->Form->input('site', array ('label' => 'Site'));
		echo $this->Form->input('start_time', array ('label' => 'Heure de départ'));
		echo $this->Form->input('end_time', array ('label' => 'Heure de fin'));

	echo $this->Form->submit('Valider', 
        array('after' => $this->Html->link('Annuler', array('action' => 'index'), array('class' => 'btn btn-default', 'style' => 'margin-left:10px'), "Etes-vous sûr de quitter cette page ?"))
    );

?>
