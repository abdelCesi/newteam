

<div class="panel panel-default">
    <div class="panel-body">
        <div class="container">
            <h1>Listes des heures de travail</h1>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('team_code'); ?></th>
						<th><?php echo $this->Paginator->sort('category'); ?></th>
						<th><?php echo $this->Paginator->sort('site'); ?></th>
						<th><?php echo $this->Paginator->sort('start_time'); ?></th>
						<th><?php echo $this->Paginator->sort('end_time'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
					<?php foreach ($workingHours as $workingHour): ?>
						<tr>
							<td><?php echo h($workingHour['WorkingHour']['id']); ?>&nbsp;</td>
							<td><?php echo h($workingHour['WorkingHour']['team_code']); ?>&nbsp;</td>
							<td><?php echo h($workingHour['WorkingHour']['category']); ?>&nbsp;</td>
							<td><?php echo h($workingHour['WorkingHour']['site']); ?>&nbsp;</td>
							<td><?php echo h($workingHour['WorkingHour']['start_time']); ?>&nbsp;</td>
							<td><?php echo h($workingHour['WorkingHour']['end_time']); ?>&nbsp;
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
                                    $btn_delete,
                                    array('controller' => 'WorkingHours','action'=> 'delete', $workingHour['WorkingHour']['id']),
                                    array('escape' => false, 'style' => "float:right;margin-left:10px"),
                                    "Voulez vous supprimer cet horaire : ".$workingHour['WorkingHour']['id']
                                );
                                ?>

                                <?= $this->Html->link(
                                    $btn_edit,
                                    array('controller' => 'WorkingHours','action'=> 'edit', $workingHour['WorkingHour']['id']),
                                    array('escape' => false, 'style' => "float:right;margin-left:10px"));
                                ?>
								
								<?= $this->Html->link(
                                    $btn_view,
                                    array('controller' => 'WorkingHours','action'=> 'View', $workingHour['WorkingHour']['id']),
                                    array('escape' => false, 'style' => "float:right;margin-left:10px"));
                                ?>
							</td>
						</tr>
					<?php endforeach; ?>   
                    </tbody>
                </table>
            </div>
            <?= $this->Html->link("Ajouter un horaire de travail", array('controller' => 'WorkingHours','action'=> 'add'), array( 'class' => 'btn btn-sm btn-primary')); ?>
        </div>
    </div>
</div>
