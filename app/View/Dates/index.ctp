

<div class="panel panel-default">
    <div class="panel-body">
        <div class="container">
            <h1>Liste Date</h1>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($dates as $Date): ?>
                        <tr>
                            <td>
                                <?= $Date['Date']['id']; ?>
                            </td>
                            <td>
                                <?= $Date['Date']['date_rdv']; ?>
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
                                    array('controller' => 'Dates','action'=> 'delete', $Date['Date']['id']),
                                    array('escape' => false, 'style' => 'margin-left:10px'),
                                    "Are you sure you wish to delete the Date : ".$Date['Date']['id']
                                );
                                ?>

                                <?= $this->Html->link(
                                    $btn_edit,
                                    array('controller' => 'Dates','action'=> 'edit', $Date['Date']['id']),
                                    array('escape' => false, 'style' => 'float:left;margin-left:10px'));
                                ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <?= $this->Html->link("Ajouter une date", array('controller' => 'Dates','action'=> 'add'), array( 'class' => 'btn btn-sm btn-primary')); ?>
        </div>
    </div>