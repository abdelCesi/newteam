

<div class="panel panel-default">
    <div class="panel-body">
        <div class="container">
            <h1>Listes des associations Profil/Fonctionnalit&eacute;</h1>
			<div class="row">
              <div class="col-md-4">
                <h5>
                    <?= $this->Html->link("Ajouter une association", array('controller' => 'Profilfunctionnalities','action'=> 'add'), array( 'class' => 'btn btn-sm btn-primary')); ?>
                </h5>
              </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('profile_id'); ?></th>
						<th><?php echo $this->Paginator->sort('functionnality_id'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($profilfunctionnalities as $profilfunctionnality): ?>
                        <tr>
                            <td>
                                <?= $profilfunctionnality['Profilfunctionnality']['id']; ?>
                            </td>
                            <td>
                                <?= $profilfunctionnality['Profile']['profile_name']; ?>
                            </td>
                            <td>
                                <?=  $profilfunctionnality['Functionnalitie']['name']; ?>

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
                                    array('controller' => 'Profilfunctionnalities','action'=> 'delete', $profilfunctionnality['Profilfunctionnality']['id']),
                                    array('escape' => false, 'style' => "float:right;margin-left:10px"),
                                    "Voulez vous supprimer cette association : ".$profilfunctionnality['Profile']['profile_name'].'/'.$profilfunctionnality['Functionnalitie']['name']
                                );
                                ?>

                                <?= $this->Html->link(
                                    $btn_edit,
                                    array('controller' => 'Profilfunctionnalities','action'=> 'edit', $profilfunctionnality['Profilfunctionnality']['id']),
                                    array('escape' => false, 'style' => "float:right;margin-left:10px"));
                                ?>
								
								<?= $this->Html->link(
                                    $btn_view,
                                    array('controller' => 'Profilfunctionnalities','action'=> 'View', $profilfunctionnality['Profilfunctionnality']['id']),
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
