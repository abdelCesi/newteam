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
                <h1>Conteneur</h1>
            </div>

            <div class="row">
              <div class="col-md-8">
                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                  <div class="btn-group" role="group">
                    <?php echo $this->Html->link(__('Nouveau Conteneur'), array('action' => 'add'), array( 'class' => 'btn btn-sm btn-default')); ?>
                  </div>
                  <div class="btn-group" role="group">
                    <?php echo $this->Html->link(__('Gérer les conditionnements'), array('controller' => 'packings', 'action' => 'index'), array( 'class' => 'btn btn-sm btn-default')); ?> 
                  </div>
                  <div class="btn-group" role="group">
                    <?php echo $this->Html->link(__('Gérer les unités articles'), array('controller' => 'articles_units', 'action' => 'index'), array( 'class' => 'btn btn-sm btn-default')); ?>
                  </div>
                  <div class="btn-group" role="group">
                    <?php echo $this->Html->link(__('Gérer les types de contenants'), array('controller' => 'ContainersTypes', 'action' => 'index'), array( 'class' => 'btn btn-sm btn-default')); ?>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <?php echo $this->Form->create('Container'); ?>
                <?php echo $this->Form->input('search', array(
                                                            'label' => false,
                                                            'placeholder' => 'Recherche ...',
                                                            'class' => 'form-control'
                                                            )); ?>
                <?php echo $this->Form->End(); ?>
              </div>
            </div>



            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('code'); ?></th>
						<th><?php echo $this->Paginator->sort('status', 'Etat'); ?></th>
                        <th><?php echo $this->Paginator->sort('containerType_id', 'Type de conteneur'); ?></th>
						<th><?php echo $this->Paginator->sort('place_id', 'Emplacement'); ?></th>
						<th><?php echo $this->Paginator->sort('packing_id', 'Conditionement'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($containers as $container): ?>
                        <tr>
							<td><?php echo h($container['Container']['id']); ?>&nbsp;</td>
							<td><?php echo h($container['Container']['code']); ?>&nbsp;</td>
							<td><?php echo h($container['Container']['status']); ?>&nbsp;</td>

                            <td>
                                <?php echo $this->Html->link($container['ContainersType']['label'], array('controller' => 'ContainersTypes', 'action' => 'view', $container['ContainersType']['id'])); ?>
                            </td>

							<td>
								<?php echo $this->Html->link($container['Place']['name'], array('controller' => 'places', 'action' => 'view', $container['Place']['id'])); ?>
							</td>
							<td>
								<?php echo $this->Html->link($container['Packing']['label'], array('controller' => 'packings', 'action' => 'view', $container['Packing']['id'])); ?>
							</td>
                            <td>

                                <?php
                                $btn_edit = "<button type='button' class='btn btn-default btn-xs' aria-label='Left Align'>
                                                <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
                                            </button>";

                                $btn_delete = "<button type='button' class='btn btn-default btn-xs' aria-label='Left Align'>
                                                <span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
                                            </button>";
                                ?>

                                <?= $this->Html->link(
                                    $btn_delete,
                                    array('controller' => 'Containers','action'=> 'delete', $container['Container']['id']),
                                    array('escape' => false, 'style' => "margin-left:10px"),
                                    "Are you sure you wish to delete the container : ".$container['Container']['id']
                                );
                                ?>

                                <?= $this->Html->link(
                                    $btn_edit,
                                    array('controller' => 'Containers','action'=> 'edit', $container['Container']['id']),
                                    array('escape' => false, 'style' => "float:left;margin-left:10px"));
                                ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
                                <p>
                <?php
                echo $this->Paginator->counter(array(
                    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
                ));
                ?>  </p>
                <div class="paging">
                <?php
                    echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
                    echo $this->Paginator->numbers(array('separator' => ''));
                    echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
                ?>
                </div>
            </div>
        </div>
    </div>
</div>


