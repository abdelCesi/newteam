

<div class="panel panel-default">
    <div class="panel-body">
        <div class="container">
            <h1>Listes des profils</h1>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('profile_name'); ?></th>
						<th><?php echo $this->Paginator->sort('working_hour_id'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($profiles as $profile): ?>
                        <tr>
                            <td>
                                <?= $profile['Profile']['id']; ?>
                            </td>
                            <td>
                                <?= $profile['Profile']['profile_name']; ?>
                            </td>
                            <td>
                                <?= $profile['Profile']['working_hour_id']; ?>

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
                                    array('controller' => 'Profiles','action'=> 'delete', $profile['Profile']['id']),
                                    array('escape' => false, 'style' => "float:right;margin-left:10px"),
                                    "Are you sure you wish to delete the City : ".$profile['Profile']['profile_name']
                                );
                                ?>

                                <?= $this->Html->link(
                                    $btn_edit,
                                    array('controller' => 'Profiles','action'=> 'edit', $profile['Profile']['id']),
                                    array('escape' => false, 'style' => "float:right;margin-left:10px"));
                                ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <?= $this->Html->link("Ajouter un profil", array('controller' => 'Profiles','action'=> 'add'), array( 'class' => 'btn btn-sm btn-primary')); ?>
        </div>
    </div>
</div>