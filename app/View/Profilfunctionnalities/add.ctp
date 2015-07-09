<div class="panel panel-default">
    <div class="panel-body">
        <div class="container">

            <div class="page-header">
                <h2>Ajouter d'une association Profil/Fonctionnalit&eacute;</h2>
            </div>

<!-- Page d'ajout d'une association Profil/Fonctionnalite -->

        <?php
        //formulaire d'ajout , nommage des noms de colonnes pareil que ceux en base
            echo $this->Form->create('Profilfunctionnality',
                array('inputDefaults'=>array('div'=>'false', 'label'=>false)));

            echo $this->Form->input('profile_id',
                    array('type'=>'select','options'=>$profiles, 'label' => 'Nom du profil&nbsp;'));
            echo $this->Form->input('functionnality_id',
                    array('type'=>'select','options'=>$functionnalities, 'label' => 'Nom de la fonctionnalit&eacute;&nbsp;'));

            echo $this->Form->submit('Valider',
                array('after' => $this->Html->link('Annuler', array('action' => 'index'), array('class' => 'btn btn-default', 'style' => 'margin-left:10px')))
            );

        ?>
</div>
</div>
</div>
