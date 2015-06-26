

<h2>Ajouter un conteneur</h2>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
		
		
		
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
				 <li class="first"><?php echo $this->Html->link(__('Listes des conteneurs'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Gérer les cartons'), array('controller' => 'boxes', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Gérer les palettes'), array('controller' => 'pallets', 'action' => 'index')); ?> </li>
			</ul>
 </div>
 


<?php
//formulaire d'ajout , nommage des noms de colonnes pareil que ceux en base
echo $this->Form->create('Container');

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