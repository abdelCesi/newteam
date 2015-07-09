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
                <h2>Ajouter un conteneur</h2>             
            </div>
            
            <div class="row">
                 <div class="col-md-8">
                     <div class="btn-group btn-group-justified" role="group" aria-label="...">

                      <div class="btn-group" role="group">
                           <a class="btn btn-sm btn-default" <?php echo $this->Html->link(__('Listes des conteneurs'), array('action' => 'index')); ?></a>
                      </div>
            
                      <div class="btn-group" role="group">
                           <a class="btn btn-sm btn-default" <?php echo $this->Html->link(__('Gérer les types de contenants'), array('controller' => 'ContainersTypes', 'action' => 'index')); ?></a>
                      </div>

                    </div>
				</div>
			</div>

			<?php
				//formulaire d'ajout , nommage des noms de colonnes pareil que ceux en base
				echo $this->Form->create('Container');

						echo $this->Form->input('code',array(
							'label' => 'Code du conteneur ',
							'class' => 'form-control'
							));
						echo $this->Form->input('status',array(
							'label' => 'Etat du conteneur ',
							'class' => 'form-control'
							));
						//echo $this->Form->input('containerType_id');
						echo $this->Form->input('containerType_id', array(
										  'options' => $containerstypes,
										  'empty' => '(choisissez)',
										  'label' => 'Type du conteneur ',
										  'class' => 'form-control'
										));
						//echo $this->Form->input('place_id');
						echo $this->Form->input('place_id', array(
										  'options' => $places,
										  'empty' => '(choisissez)',
										  'label' => 'Emplacement libre ',
										  'class' => 'form-control'
										));
						//echo $this->Form->input('packing_id');
						echo $this->Form->input('packing_id', array(
										  'options' => $packings,
										  'empty' => '(choisissez)',
										  'label' => 'Conditionement ',
										  'class' => 'form-control'
										));
						//echo $this->Form->input('Receptionorder');
						//echo $this->Form->input('Shippingorder');

					echo $this->Form->submit('Créer',
						array('after' => $this->Html->link('Annuler', array('action' => 'index'), array('class' => 'btn btn-default', 'style' => 'margin-left:10px'), "Etes-vous sûr de quitter cette page ?"))
					);
					echo $this->Form->end();

				?>

            </div>
        </div>
    </div>