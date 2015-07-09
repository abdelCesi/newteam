<div class="panel panel-default">
    <div class="panel-body">
        <div class="container">

            <div class="page-header">
                <h2>Ajouter une hauteur</h2>
            </div>

<?php
    echo $this->Form->create('Height');
    echo $this->Form->input('height', array('label' => 'Hauteur ', 'class' => 'form-control'));
    echo $this->Form->submit('Ajouter',
	        array('after' => $this->Html->link('Annuler', array('action' => 'index'), array('class' => 'btn btn-default', 'style' => 'margin-left:10px'), "Etes-vous sûr de quitter cette page ?"))
	    );
	echo $this->Form->end();
?>

        </div>
    </div>
</div>
