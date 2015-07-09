<!--<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
</nav>-->

<div class="panel panel-default">
    <div class="panel-body">
        <div class="container">

            <div class="page-header">
                <h3 style="margin-bottom:0px;">Création d'une unité article</h3>
            </div>

           	<?php
            //formulaire d'ajout , nommage des noms de colonnes pareil que ceux en base
                echo $this->Form->create('ArticlesUnit');
                echo $this->Form->input('container_id', array('label' => 'Identifiant du conteneur ', 'class' => 'form-control'));
                echo $this->Form->input('validity_date', array('label' => 'Date de validité : '));
                echo $this->Form->input('nb_article', array('label' => 'Nombre articles ', 'class' => 'form-control'));
                echo $this->Form->input('ref_article_id', array('label' => 'Référence article ', 'class' => 'form-control'));

            echo $this->Form->submit('Créer',
                                 array('after' => $this->Html->link('Annuler',
                                 array('action' => 'index'),
                                 array('class' => 'btn btn-default',
                                 'style' => 'margin-left:10px'),
                                 "Etes-vous sûr de quitter cette page ?")));

            echo $this->Form->end();

            ?>

       </div>
    </div>
</div>