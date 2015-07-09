<div class="panel panel-default">
    <div class="panel-body">
        <div class="container">

            <div class="page-header">
                <h2>Ajout d'une date</h2>
            </div>

<?php
    //formulaire d'ajout , nommage des noms de colonnes pareil que ceux en base
    echo $this->Form->create('Date');

        echo $this->Form->input('date_rdv', array ('label' => 'Date de rdv : ', 'class'=>'form-group-control'));

        echo $this->Form->submit('Créer',
            array('after' => $this->Html->link('Annuler', array('action' => 'index'), array('class' => 'btn btn-default', 'style' => 'margin-left:10px'), "Etes-vous sûr de quitter cette page ?"))
        );
        echo $this->Form->end();

?>

        </div>
    </div>
</div>