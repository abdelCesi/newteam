<div class="panel panel-default">
    <div class="panel-body">
        <div class="container">
            <h1>RDV</h1>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th><?php echo $this->Paginator->sort('id'); ?></th>
                        <th>Date de début</th>
                        <th>Date de fin</th>
                        <th>Créé par:</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($rdvs as $Rdv): ?>
                        <tr>
                            <td>
                                <?php echo h($Rdv['Rdv']['id']); ?>&nbsp;
                            </td>
							<td>
                                <?php echo h($Rdv['Rdv']['start_time']); ?>&nbsp;
                            </td>
                            <td>
                                <?php echo h($Rdv['Rdv']['end_time']); ?>&nbsp;
                            </td> 						
							<td>
                                <?php echo ($Rdv['User']['name']	); ?>&nbsp;
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
										'controller' => 'Rdvs',
										'action'=> 'delete', 
										$Rdv['Rdv']['id']),
                                    array(
										'escape' => false, 
										'style' => "margin-left:10px"),
                                    "Are you sure you wish to delete the rdv : ".$Rdv['Rdv']['id'] ." created by " . $Rdv['User']['name']
                                );
                                ?>

                                <?= $this->Html->link(
                                    $btn_edit,
                                    array(
										'controller' => 'Rdvs',
										'action'=> 'edit',
										$Rdv['Rdv']['id']),
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
               <?= $this->Html->link("Planifier un rdv", array('controller' => 'Rdvs','action'=> 'add'), array( 'class' => 'btn btn-sm btn-primary')); ?>
        </div>
    </div>
</div>


