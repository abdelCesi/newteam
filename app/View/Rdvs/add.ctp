
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
?>	
		
<?php
	echo $this->Form->input('start_time', array (
		'label' => 'Début', 
		'type' => 'datetime',
		'interval' => '15',
		'class'=>'',
		'style' => 'width: 100px;'));
?>	

<?php
	echo $this->Form->input('end_time', array (
		'label' => 'Fin  	 ', 
		'type' => 'datetime',
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