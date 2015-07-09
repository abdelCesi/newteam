<div class="panel panel-default">
    <div class="panel-body">
        <div class="container">

            <div class="page-header">
                <h2>Création d'un utilisateur</h2>
             </div>

<!-- Page d'ajout d'un utilisateur -->


<?php
    //formulaire d'ajout , nommage des noms de colonnes pareil que ceux en base
    echo $this->Form->create('User');

        echo $this->Form->input('name', array('label' => 'Nom', 'class' => 'form-control'));
        echo $this->Form->input('firstname', array('label' => 'Prénom ', 'class' => 'form-control'));
        echo $this->Form->input('address', array('label' => 'Adresse ', 'class' => 'form-control'));
        echo $this->Form->input('mail', array('label' => 'Mail ', 'class' => 'form-control'));
        echo $this->Form->input('phone_number', array('label' => 'Numéro de téléphone ', 'class' => 'form-control'));
        echo $this->Form->input('profile_name', array (
            'label' => 'Profil',
            'type' => 'select',
            'class'=>'form-control'));
        echo $this->Form->input('service_id', array (
            'label' => 'Service',
            'type' => 'select',
            'class'=>'form-control'));
        echo $this->Form->input('password', array('label' => 'Mot de passe ', 'type'=>'password', 'class' => 'form-control'));



        echo $this->Form->submit('Créer',
                    array('after' => $this->Html->link('Annuler',
                    array('action' => 'index'),
                    array('class' => 'btn btn-default',
                    'style' => 'margin-left:10px'), "Etes-vous sûr de quitter cette page ?"))
        );
        echo $this->Form->end();

?>

        </div>
    </div>
</div>