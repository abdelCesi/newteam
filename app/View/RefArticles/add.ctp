<!-- Fichier : /app/View/ClassesArticles/add.ctp -->
<div class="panel panel-default">
    <div class="panel-body">
        <div class="container">

            <div class="page-header">
                <h1>Ajouter une référence article</h1>
            </div>
<?php
        echo $this->Form->create('RefArticle');
        echo $this->Form->input('reference', array('label' => 'Référence article ', 'class' => 'form-control'));
        echo $this->Form->input('label', array('label' => 'Nom article ', 'class' => 'form-control'));
        echo $this->Form->input('weight', array('label' => 'Poids ','class' => 'form-control'));

        //echo $this->Form->label('ClassesArticle', 'Veuillez choisir une classe');
        //echo $this->Form->select('classe_id', $classesarticles,['empty' => '(choisissez)']);

        echo $this->Form->input('classe_id', array(
                                  'options' => $classesarticles,
                                  'empty' => '(choisissez)',
                                  'class' => 'form-control'
                                ));
        //echo $this->Form->label('CatalogsArticle', 'Veuillez choisir un catalogue');
        //echo $this->Form->select('catalog_id', $catalogsarticles,['empty' => '(choisissez)']);

        echo $this->Form->input('catalog_id', array(
                                  'label' => 'Catalogue ',
                                  'options' => $catalogsarticles,
                                  'empty' => '(choisissez)',
                                  'class' => 'form-control'
                                ));
        echo $this->Form->end('Sauvegarder la référence');
?>

        </div>
    </div>
</div>