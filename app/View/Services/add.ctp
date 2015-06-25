<h2>Création d'un service</h2>

<!-- Page d'ajout d'un utilisateur -->


<?php
//formulaire d'ajout , nommage des noms de colonnes pareil que ceux en base
echo $this->Form->create('Service');

    echo $this->Form->input('service_name');


	echo $this->Form->submit('Créer', 
        array('after' => $this->Html->link('Annuler', array('action' => 'index'), array('class' => 'btn btn-default', 'style' => 'margin-left:10px'), "Etes-vous sûr de quitter cette page ?"))
    );
    echo $this->Form->end();




?>