<!-- File: /app/View/Classes/index.ctp -->


<div class="panel panel-default">
    <div class="panel-body">
        <div class="container">
            <h1>Les catalogues</h1>
            <div class="table-responsive">
			<h5><?php echo $this->Html->link('Ajouter un catalogue', array('action' => 'add'), array( 'class' => 'btn btn-sm btn-primary')); ?></h5>
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                    	<th>ID</th>
						<th>Libellé</th>
						<th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($catalogsarticles as $catalog): ?>
                        <tr>
                            <td>
                                <?= $catalog['CatalogsArticle']['id']; ?>
                            </td>
                            <td>
                                <?= $this->Html->link($catalog['CatalogsArticle']['label'],
										array('controller' => 'catalogsarticles', 'action' => 'view', $catalog['CatalogsArticle']['id']));?>
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
                                    array('controller' => 'CatalogsArticles','action'=> 'delete', $catalog['CatalogsArticle']['id']),
                                    array('escape' => false, 'style' => "margin-left:10px"),
                                    "Are you sure you wish to delete the User : ".$catalog['CatalogsArticle']['label']
                                );
                                ?>

                                <?= $this->Html->link(
                                    $btn_edit,
                                    array('controller' => 'CatalogsArticles','action'=> 'edit', $catalog['CatalogsArticle']['id']),
                                    array('escape' => false, 'style' => "float:left;margin-left:10px"));
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

