

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
		
<div class="panel panel-default">
    <div class="panel-body">
        <div class="container">
            <h1>Conteneur</h1>
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

				<li><?php echo $this->Html->link(__('Nouveau Conteneur'), array('action' => 'add')); ?></li>

				<li><?php echo $this->Html->link(__('Gérer les conditionnements'), array('controller' => 'packings', 'action' => 'index')); ?> </li>

				<li><?php echo $this->Html->link(__('Gérer les unités articles'), array('controller' => 'articles_units', 'action' => 'index')); ?> </li>

				<li><?php echo $this->Html->link(__('Gérer les cartons'), array('controller' => 'boxes', 'action' => 'index')); ?> </li>

				<li><?php echo $this->Html->link(__('Gérer les palettes'), array('controller' => 'pallets', 'action' => 'index')); ?> </li>
			</ul>
 </div>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('code'); ?></th>
						<th><?php echo $this->Paginator->sort('status'); ?></th>
						<th><?php echo $this->Paginator->sort('place_id'); ?></th>
						<th><?php echo $this->Paginator->sort('packing_id'); ?></th>
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
            </div>
        </div>
    </div>
</div>


