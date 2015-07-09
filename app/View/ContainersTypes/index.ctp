<div class="panel panel-default">
    <div class="panel-body">
		<div class="container">

		    <div class="page-header">
                <h1>Types de contenants</h1>
            </div>
			
			<div class="row">
                <div class="col-md-8">
                     <div class="btn-group btn-group-justified" role="group" aria-label="...">

                    <div class="btn-group" role="group">
	            	    <a class="btn btn-sm btn-default" <?php echo $this->Html->link(__('Nouveau type de contenants'), array('action' => 'add')); ?></a>
	            	</div>

					<div class="btn-group" role="group">
					    <a class="btn btn-sm btn-default" <?php echo $this->Html->link(__('Gérer les contenants'), array('controller' => 'Containers', 'action' => 'index')); ?></a>
					</div>

					<div class="btn-group" role="group">
					    <a class="btn btn-sm btn-default" <?php echo $this->Html->link(__('Gérer les conditionnements'), array('controller' => 'packings', 'action' => 'index')); ?></a>
					</div>

					<div class="btn-group" role="group">
					    <a class="btn btn-sm btn-default" <?php echo $this->Html->link(__('Gérer les unités articles'), array('controller' => 'articles_units', 'action' => 'index')); ?></a>
					</div>

				</div>
              </div>
            </div>
            <p>

            <div class="table-responsive">
				<table  class="table table-hover table-bordered">
				<thead>
				<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('label', 'Libellé'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($containersTypes as $containersType): ?>
				<tr>
					<td><?php echo h($containersType['ContainersType']['id']); ?>&nbsp;</td>
					<td><?php echo h($containersType['ContainersType']['label']); ?>&nbsp;</td>
					<td>
                        <?php
                            $btn_view = "<button type='button' class='btn btn-default btn-xs' aria-label='Left Align'>
                                            <span class='glyphicon glyphicon-info-sign' aria-hidden='true'></span>
                                        </button>";

                            $btn_edit = "<button type='button' class='btn btn-default btn-xs' aria-label='Left Align'>
                                            <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
                                        </button>";

                            $btn_delete = "<button type='button' class='btn btn-default btn-xs' aria-label='Left Align'>
                                            <span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
                                        </button>";
                        ?>

                        <?= $this->Html->link(
                            $btn_view,
                            array('controller' => 'ContainersTypes','action'=> 'view', $containersType['ContainersType']['id']),
                            array('escape' => false, 'style' => "float:left;margin-left:10px"));
                        ?>

                        <?= $this->Html->link(
                            $btn_edit,
                            array('controller' => 'ContainersTypes','action'=> 'edit', $containersType['ContainersType']['id']),
                            array('escape' => false, 'style' => "float:left;margin-left:10px"));
                        ?>

                        <?= $this->Html->link(
                            $btn_delete,
                            array('controller' => 'ContainersTypes','action'=> 'view', $containersType['ContainersType']['id']),
                            array('escape' => false, 'style' => "margin-left:10px"),
                            "Are you sure you wish to delete the container type : ".$containersType['ContainersType']['id']
                        	);
                        ?>
					</td>
				</tr>
				<?php endforeach; ?>
				</tbody>
				</table>
				<p>
				<?php
				echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
				));
				?>	</p>
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
