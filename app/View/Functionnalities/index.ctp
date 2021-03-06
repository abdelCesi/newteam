
<div class="panel panel-default">
    <div class="panel-body">
        <div class="container">

        <div class="page-header">
            <h1>Fonctionnalités</h1>
        </div>

        <div class="row">
           <div class="col-md-8">
                <div class="btn-group" role="group">
                    <?= $this->Html->link("Ajouter une fonctionnalité", array('controller' => 'Functionnalities','action'=> 'add'), array( 'class' => 'btn btn-sm btn-primary')); ?>
                </div>
           </div>
        </div>

        <p>

            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('name'); ?></th>
						<th><?php echo $this->Paginator->sort('function_type'); ?></th>
						<th><?php echo $this->Paginator->sort('description'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($functionnalities as $functionnality): ?>
                        <tr>
                            <td>
                                <?= $functionnality['Functionnality']['id']; ?>&nbsp;
                            </td>
							<td>
                                <?= ($functionnality['Functionnality']['name']) ?>&nbsp;
                            </td>
  							<td>
                                <?= $functionnality['Functionnality']['function_type']; ?>&nbsp;
                            </td>
							<td>
                                <?= $functionnality['Functionnality']['description']; ?>&nbsp;
                                
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
                                    array('controller' => 'functionnalities', 'action'=> 'delete', $functionnality['Functionnality']['id']),
                                    array('escape' => false, 'style' => "float:right;margin-left:10px"),
									"Etes-vous sur de vouloir supprimer : ".$functionnality['Functionnality']['name']
                                );
                                ?>

                                <?= $this->Html->link(
                                    $btn_edit,
                                    array('controller' => 'functionnalities', 'action'=> 'edit', $functionnality['Functionnality']['id']),
                                    array('escape' => false, 'style' => "float:right;margin-left:10px"));
                                ?>
								
								<?= $this->Html->link(
                                    $btn_view,
                                    array('controller' => 'functionnalities','action'=> 'View', $functionnality['Functionnality']['id']),
                                    array('escape' => false, 'style' => "float:right;margin-left:10px"));
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


