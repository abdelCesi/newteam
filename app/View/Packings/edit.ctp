
		
<div class="panel panel-default">
    <div class="panel-body">
        <div class="container">
            <h1>Conditionnements</h1>
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
    				<li><?php echo $this->Html->link(__('Ajouter un conditionnement'), array('action' => 'add')); ?></li>

    				<li><?php echo $this->Html->link(__('Gérer longueur'), array('controller' => 'lengths', 'action' => 'index')); ?> </li>

    				<li><?php echo $this->Html->link(__('Gérer largeur'), array('controller' => 'widths', 'action' => 'index')); ?> </li>

    				<li><?php echo $this->Html->link(__('Gérer hauteur'), array('controller' => 'heights', 'action' => 'index')); ?> </li>

    				<li><?php echo $this->Html->link(__('Gérer les conteneurs'), array('controller' => 'containers', 'action' => 'index')); ?> </li>
    			</ul>
            </div>
 </div>



<h2>Création d'un conditionnement</h2>

<?php
//formulaire d'ajout , nommage des noms de colonnes pareil que ceux en base
echo $this->Form->create('Packing');
		echo $this->Form->input('id');
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

	echo $this->Form->submit('Modifier', 
        array('after' => $this->Html->link('Annuler', array('action' => 'index'), array('class' => 'btn btn-default', 'style' => 'margin-left:10px'), "Etes-vous sûr de quitter cette page ?"))
    );
    echo $this->Form->end();

?>