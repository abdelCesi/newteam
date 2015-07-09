<div class="panel panel-default">
    <div class="panel-body">
        <div class="container">

            <div class="page-header">
                <h2>Ajouter une largeur</h2>
            </div>

<?php
    echo $this->Form->create('Width');
    echo $this->Form->input('width', array('label' => 'Largeur ', 'class' => 'form-control'));
	echo $this->Form->submit('Ajouter',
    	        array('after' => $this->Html->link('Annuler', array('action' => 'index'), array('class' => 'btn btn-default', 'style' => 'margin-left:10px'), "Etes-vous sûr de quitter cette page ?"))
    	    );
    	echo $this->Form->end();
    ?>

            </div>
        </div>
    </div>