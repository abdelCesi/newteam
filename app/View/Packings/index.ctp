
<div class="panel panel-default">
    <div class="panel-body">
        <div class="container">
            <h1>Conditionnements</h1>
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
				<li><?php echo $this->Html->link(__('Ajouter un conditionnement'), array('action' => 'add')); ?></li>

				<li><?php echo $this->Html->link(__('Gérer longueur'), array('controller' => 'lengths', 'action' => 'index')); ?> </li>

				<li><?php echo $this->Html->link(__('Gérer largeur'), array('controller' => 'widths', 'action' => 'index')); ?> </li>

				<li><?php echo $this->Html->link(__('Gérer hauteur'), array('controller' => 'heights', 'action' => 'index')); ?> </li>

				<li><?php echo $this->Html->link(__('Gérer les conteneurs'), array('controller' => 'containers', 'action' => 'index')); ?> </li>
			</ul>
 </div>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
                        <th><?php echo $this->Paginator->sort('label', 'Libellé'); ?></th>
						<th><?php echo $this->Paginator->sort('length_id', 'Longueur'); ?></th>
						<th><?php echo $this->Paginator->sort('width_id', 'Largeur'); ?></th>
						<th><?php echo $this->Paginator->sort('height_id', 'Hauteur'); ?></th>
						<th class="actions">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($packings as $packing): ?>
						<tr>
                            <td><?php echo h($packing['Packing']['id']); ?></td>
							<td><?php echo h($packing['Packing']['label']); ?></td>
							<td>
								<?php echo $this->Html->link($packing['Length']['length'], array('controller' => 'lengths', 'action' => 'view', $packing['Length']['id'])); ?>
							</td>
							<td>
								<?php echo $this->Html->link($packing['Width']['width'], array('controller' => 'widths', 'action' => 'view', $packing['Width']['id'])); ?>
							</td>
							<td>
								<?php echo $this->Html->link($packing['Height']['height'], array('controller' => 'heights', 'action' => 'view', $packing['Height']['id'])); ?>
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
                                    array('controller' => 'Packings','action'=> 'delete', $packing['Packing']['id']),
                                    array('escape' => false, 'style' => "margin-left:10px"),
                                    "Are you sure you wish to delete the container : ".$packing['Packing']['id']
                                );
                                ?>

                                <?= $this->Html->link(
                                    $btn_edit,
                                    array('controller' => 'Packings','action'=> 'edit', $packing['Packing']['id']),
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


