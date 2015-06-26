
<div class="panel panel-default">
    <div class="panel-body">
        <div class="container">
            <h1>Unité article</h1>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                    	<th>ID</th>
						<th>ID du conteneur</th>
						<th>Date de validité</th>
						<th>Id de la référence article</th>
						<th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($articlesUnits as $articlesUnit): ?>
                        <tr>
                            <td>
                                <?= $articlesUnit['ArticlesUnit']['id']; ?>
                            </td>
                            <td>
                                <?= $this->Html->link($articlesUnit['Container']['id'], array('controller' => 'containers', 'action' => 'view', $articlesUnit['Container']['id']));  ?>
                            </td>
							  <td>
                                <?= $articlesUnit['ArticlesUnit']['validity_date']; ?>
                            </td>
                            <td>
                                <?= $this->Html->link($articlesUnit['RefArticle']['id'], array('controller' => 'ref_articles', 'action' => 'view', $articlesUnit['RefArticle']['id']));?>
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
                                    array('controller' => 'ArticlesUnits','action'=> 'delete', $articlesUnit['ArticlesUnit']['id']),
                                    array('escape' => false, 'style' => "margin-left:10px"),
                                    "Are you sure you wish to delete the User : ".$articlesUnit['ArticlesUnit']['name']
                                );
                                ?>

                                <?= $this->Html->link(
                                    $btn_edit,
                                    array('controller' => 'ArticlesUnits','action'=> 'edit', $articlesUnit['ArticlesUnit']['id']),
                                    array('escape' => false, 'style' => "float:left;margin-left:10px"));
                                ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <?= $this->Html->link("Ajouter une unité article", array('controller' => 'ArticlesUnits','action'=> 'add'), array( 'class' => 'btn btn-sm btn-primary')); ?>
        </div>
    </div>
</div>

