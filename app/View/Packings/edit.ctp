



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



<h2>Création d'un conditionnement</h2>

<?php
//formulaire d'ajout , nommage des noms de colonnes pareil que ceux en base
echo $this->Form->create('Packing');
		echo $this->Form->input('id');
        echo $this->Form->input('label');
        echo $this->Form->input('length_id');
		echo $this->Form->input('width_id');
		echo $this->Form->input('height_id');

	echo $this->Form->submit('Modifier', 
        array('after' => $this->Html->link('Annuler', array('action' => 'index'), array('class' => 'btn btn-default', 'style' => 'margin-left:10px'), "Etes-vous sûr de quitter cette page ?"))
    );
    echo $this->Form->end();

?>