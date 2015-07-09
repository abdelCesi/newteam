<!-- Fichier : /app/View/ClassesArticles/add.ctp -->
<div class="panel panel-default">
    <div class="panel-body">
        <div class="container">

            <div class="page-header">
                <h1>Ajouter un catalogue</h1>
            </div>

<?php
    //formulaire d'ajout , nommage des noms de colonnes pareil que ceux en base
        echo $this->Form->create('CatalogsArticle');

        echo $this->Form->input('label', array('label' => 'Nom catalogue ', 'class' => 'form-control'));

        echo $this->Form->submit('Créer',
            array('after' => $this->Html->link('Annuler', array('action' => 'index'), array('class' => 'btn btn-default', 'style' => 'margin-left:10px'), "Etes-vous sûr de quitter cette page ?"))
        );
        echo $this->Form->end();
?>

        </div>
    </div>
</div>