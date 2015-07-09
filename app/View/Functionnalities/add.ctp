<div class="panel panel-default">
    <div class="panel-body">
        <div class="container">

            <div class="page-header">
                <h2>Ajout d'une fonctionnalité</h2>
            </div>

<?php
    //formulaire d'ajout , nommage des noms de colonnes pareil que ceux en base
    echo $this->Form->create('Functionnality');

        echo $this->Form->input('name', array('label' => 'Nom ','class' => 'form-control'));
        echo $this->Form->input('function_type', array('label' => 'Type de fonction ', 'class' => 'form-control'));
        echo $this->Form->input('description', array('label' => 'Description ', 'class' => 'form-control'));

        echo $this->Form->submit('Créer',
            array('after' => $this->Html->link('Annuler', array('action' => 'index'), array('class' => 'btn btn-default', 'style' => 'margin-left:10px'), "Etes-vous sûr de quitter cette page ?"))
        );
        echo $this->Form->end();

?>

        </div>
    </div>
</div>