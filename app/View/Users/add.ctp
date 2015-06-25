<h2>Création d'un utilisateur</h2>

<!-- Page d'ajout d'un utilisateur -->


<?php
//formulaire d'ajout , nommage des noms de colonnes pareil que ceux en base
echo $this->Form->create('User');

    echo $this->Form->input('name');
    echo $this->Form->input('firstname');
    echo $this->Form->input('address');
    echo $this->Form->input('mail');
    echo $this->Form->input('phone_number');
    echo $this->Form->input('password', array('type'=>'password'));
    echo $this->Form->input('status');

	echo $this->Form->submit('Créer', 
        array('after' => $this->Html->link('Annuler', array('action' => 'index'), array('class' => 'btn btn-default', 'style' => 'margin-left:10px'), "Etes-vous sûr de quitter cette page ?"))
    );
    echo $this->Form->end();




?>