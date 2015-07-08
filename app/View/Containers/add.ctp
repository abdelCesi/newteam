<h2>Ajouter un conteneur</h2>		
		
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
		 <li class="first"><?php echo $this->Html->link(__('Listes des conteneurs'), array('action' => 'index')); ?></li>

        <li><?php echo $this->Html->link(__('Gérer les types de contenants'), array('controller' => 'ContainersTypes', 'action' => 'index')); ?> </li>
	</ul>
 </div>
 

<?php
//formulaire d'ajout , nommage des noms de colonnes pareil que ceux en base
echo $this->Form->create('Container');

		echo $this->Form->input('code',array(
			'label' => 'Code du conteneur ',
            'class' => 'form-control'
			));
		echo $this->Form->input('status',array(
			'label' => 'Etat du conteneur ',
            'class' => 'form-control'
			));
		//echo $this->Form->input('containerType_id');
		echo $this->Form->input('containerType_id', array(
					      'options' => $containerstypes,
					      'empty' => '(choisissez)',
					      'label' => 'Type du conteneur ',
					      'class' => 'form-control'
						));
		//echo $this->Form->input('place_id');
		echo $this->Form->input('place_id', array(
					      'options' => $places,
					      'empty' => '(choisissez)',
					      'label' => 'Emplacement libre ',
					      'class' => 'form-control'
						));
		//echo $this->Form->input('packing_id');
		echo $this->Form->input('packing_id', array(
					      'options' => $packings,
					      'empty' => '(choisissez)',
					      'label' => 'Conditionement ',
					      'class' => 'form-control'
						));
		//echo $this->Form->input('Receptionorder');
		//echo $this->Form->input('Shippingorder');
		
	echo $this->Form->submit('Créer', 
        array('after' => $this->Html->link('Annuler', array('action' => 'index'), array('class' => 'btn btn-default', 'style' => 'margin-left:10px'), "Etes-vous sûr de quitter cette page ?"))
    );
    echo $this->Form->end();

?>