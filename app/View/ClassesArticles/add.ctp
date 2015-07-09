<!-- Fichier : /app/View/ClassesArticles/add.ctp -->
<div class="panel panel-default">
    <div class="panel-body">
        <div class="container">

            <div class="page-header">
                <h2>Ajouter une classe</h2>
            </div>


<?php
    //formulaire d'ajout , nommage des noms de colonnes pareil que ceux en base
        echo $this->Form->create('ClassesArticle');

        echo $this->Form->create('ClassesArticle');
        echo $this->Form->input('label', array('label' => 'Nom de la classe ','class' => 'form-control'));
        echo "<p>Classe parent</p>";
        echo $this->Form->select('classe_id', $classesarticles, array ('class'=>'form-control'));

        echo $this->Form->submit('Sauvegarder la classe',
            array('after' => $this->Html->link('Annuler', array('action' => 'index'), array('class' => 'btn btn-default', 'style' => 'margin-left:10px'), "Etes-vous sûr de quitter cette page ?"))
        );
        echo $this->Form->end();

?>

        </div>
    </div>
</div>