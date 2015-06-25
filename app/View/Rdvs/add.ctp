
<h2>Planifier un rdv</h2>

<!-- Page d'ajout d'un utilisateur -->

<?php
//formulaire d'ajout , nommage des noms de colonnes pareil que ceux en base
	echo $this->Form->create('Rdv', array(
    'inputDefaults'=>array('div'=>'false', 'label'=>false)));
	
	echo $this->Form->input('user_id', array (
		'label' => 'Organisateur',
		'type' => 'select',
		'class'=>'form-control'));

	echo $this->Form->input('date_id', array (
		'label' => $this->Html->link(__('Date [+]'), array('controller' => 'dates', 'action' => 'add')), 
		'type' => 'select',
		'class'=>'form-control '));
?>	
		
<table border='0' align: left>
			<tr class = "col-md-6" ><td>

<?php
	echo $this->Form->input('start_time', array (
		'label' => 'Début', 
		'type' => 'time',
		'interval' => '15',
		'class'=>'span8',
		'style' => 'margin: auto; width: 100px'));
?>	
</td><td>
<?php
	echo $this->Form->input('end_time', array (
		'label' => 'Fin  	 ', 
		'type' => 'time',
		'interval' => '15',
		'class'=>'span8',
		'style' => 'width: 100px;'));

?>	
	</td></tr>
</table>
<?php
	echo $this->Form->submit('Valider', 
        array('after' => $this->Html->link('Annuler', array('action' => 'index'), array('class' => 'btn btn-default', 'style' => 'margin-left:10px'), "Etes-vous sûr de quitter cette page ?"))
    );

?>