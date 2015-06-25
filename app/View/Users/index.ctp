

<div class="panel panel-default">
    <div class="panel-body">
        <div class="container">
            <h1>Listes des utilisateurs</h1>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                    	<th>ID</th>
						<th>Username</th>
						<th>Firstname</th>
						<th>Address</th>
						<th>Mail</th>
						<th>Phone_Number</th>
						<th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $User): ?>
                        <tr>
                            <td>
                                <?= $User['User']['id']; ?>
                            </td>
                            <td>
                                <?= $User['User']['name']; ?>
                            </td>
							  <td>
                                <?= $User['User']['firstname']; ?>
                            </td>
                            <td>
                                <?= $User['User']['address']; ?>
                            </td>
							  <td>
                                <?= $User['User']['mail']; ?>
                            </td>
                            <td>
                                <?= $User['User']['phone_number']; ?>
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
                                    array('controller' => 'Users','action'=> 'delete', $User['User']['id']),
                                    array('escape' => false, 'style' => "margin-left:10px"),
                                    "Are you sure you wish to delete the User : ".$User['User']['name']
                                );
                                ?>

                                <?= $this->Html->link(
                                    $btn_edit,
                                    array('controller' => 'Users','action'=> 'edit', $User['User']['id']),
                                    array('escape' => false, 'style' => "float:left;margin-left:10px"));
                                ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <?= $this->Html->link("Ajouter un utilisateur", array('controller' => 'Users','action'=> 'add'), array( 'class' => 'btn btn-sm btn-primary')); ?>
        </div>
    </div>
</div>

