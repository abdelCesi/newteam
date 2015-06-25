

<div class="panel panel-default">
    <div class="panel-body">
        <div class="container">
            <h1>Services</h1>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('service_name'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($services as $service): ?>
                        <tr>
                            <td>
                                <?php echo h($service['Service']['id']); ?>&nbsp;
                            </td>
							<td>
                                <?php echo h($service['Service']['service_name']); ?>&nbsp;
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
                                    array(
										'controller' => 'services',
										'action'=> 'delete', 
										$service['Service']['id']),
                                    array(
										'escape' => false, 
										'style' => "margin-left:10px"),
                                    "Are you sure you wish to delete the rdv : ".$service['Service']['service_name']
                                );
                                ?>

                                <?= $this->Html->link(
                                    $btn_edit,
                                    array(
										'controller' => 'services',
										'action'=> 'edit',
										$service['Service']['id']),
                                    array(
										'escape' => false, 
										'style' => "float:left;margin-left:10px"));
                                ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
               <?= $this->Html->link("Ajouter un service", array('controller' => 'services','action'=> 'add'), array( 'class' => 'btn btn-sm btn-primary')); ?>
        </div>
    </div>
</div>


