<div class="panel panel-default">
    <div class="panel-body">
        <div class="container">

            <div class="page-header">
                <h2>Ajouter un type de conteneur</h2>
            </div>

<?php
	echo $this->Form->create('ContainersType');
	echo $this->Form->input('label', array('label' => 'Type de conteneur ','class' => 'form-control'));
	echo $this->Form->submit('Créer', 
	        array('after' => $this->Html->link('Annuler', array('action' => 'index'), array('class' => 'btn btn-default', 'style' => 'margin-left:10px'), "Etes-vous sûr de quitter cette page ?"))
	    );
	echo $this->Form->end();
?>

        </div>
    </div>
</div>