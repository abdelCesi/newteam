
<div class="panel panel-default">
    <div class="panel-body">
        <div class="container">

            <div class="page-header">
                <h1>Conditionnements</h1>
			</div>

			<div class="row">
                <div class="col-md-8">
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">

                    <div class="btn-group" role="group">
                        <a class="btn btn-sm btn-default" <?php echo $this->Html->link(__('Ajouter conditionnement'), array('action' => 'add')); ?></a>
                    </div>
                    <div class="btn-group" role="group">
                        <a class="btn btn-sm btn-default" <?php echo $this->Html->link(__('Gérer longueur'), array('controller' => 'lengths', 'action' => 'index')); ?></a>
                    </div>

                    <div class="btn-group" role="group">
                        <a class="btn btn-sm btn-default" <?php echo $this->Html->link(__('Gérer largeur'), array('controller' => 'widths', 'action' => 'index')); ?></a>
                    </div>

                    <div class="btn-group" role="group">
                        <a class="btn btn-sm btn-default" <?php echo $this->Html->link(__('Gérer hauteur'), array('controller' => 'heights', 'action' => 'index')); ?></a>
                    </div>

                    <div class="btn-group" role="group">
                         <a class="btn btn-sm btn-default" <?php echo $this->Html->link(__('Gérer les conteneurs'), array('controller' => 'containers', 'action' => 'index')); ?></a>
                    </div>

                    </div>
                </div>
            </div>
            <p>
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


