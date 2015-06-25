
<div class="panel panel-default">
    <div class="panel-body">
        <div class="container">
            <h1>Fonctionnalités</h1>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('name'); ?></th>
						<th><?php echo $this->Paginator->sort('function_type'); ?></th>
						<th><?php echo $this->Paginator->sort('description'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($functionnalities as $functionnality): ?>
                        <tr>
                            <td>
                                <?php echo h($functionnality['Functionnality']['id']); ?>&nbsp;
                            </td>
							<td>
                                <?php echo h($functionnality['Functionnality']['name']); ?>&nbsp;
                            </td>
  							<td>
                                <?php echo h($functionnality['Functionnality']['function_type']); ?>&nbsp;
                            </td>
														<td>
                                <?php echo h($functionnality['Functionnality']['description']); ?>&nbsp;
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
										'controller' => 'functionnalities',
										'action'=> 'delete', 
										$functionnality['Functionnality']['id']),
                                    array(
										'escape' => false, 
										'style' => "margin-left:10px"),
                                    "Etes-vous sur de vouloir supprimer : ".$functionnality['Functionnality']['name']
                                );
                                ?>

                                <?= $this->Html->link(
                                    $btn_edit,
                                    array(
										'controller' => 'functionnalities',
										'action'=> 'edit',
										$functionnality['Functionnality']['id']),
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
               <?= $this->Html->link("Ajouter une fonctionnalité", array('controller' => 'Functionnalities','action'=> 'add'), array( 'class' => 'btn btn-sm btn-primary')); ?>
        </div>
    </div>
</div>


