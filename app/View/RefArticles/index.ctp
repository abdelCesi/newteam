<!-- File: /app/View/Classes/index.ctp -->

<div class="panel panel-default">
    <div class="panel-body">
        <div class="container">
            <h1>Les articles</h1>
            <div class="row">
              <div class="col-md-4">
                <h5>
                    <?php echo $this->Html->link('Ajouter une référence article', array('action' => 'add'), array( 'class' => 'btn btn-sm btn-primary')); ?>
                </h5>
              </div>
              <div class="col-md-8">
                <?php echo $this->Form->create('RefArticle'); ?>
                <?php echo $this->Form->input('search', array('label' => false,'placeholder' => 'Recherche ...')); ?>
                <?php echo $this->Form->End(); ?>
              </div>
            </div>
            <div class="table-responsive">
                <table  class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <!--<?php echo $this->Paginator->sort('id'); ?>-->
                        <th>Id</th>
                        <th>Référence</th>
                        <th>Libellé</th>
                        <th>Poids (Kg)</th>
                        <th>Classe</th>
                        <th>Catalogue</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <!-- Here is where we loop through our $refs array, printing out ref info -->
                    <tbody>
                    <?php foreach ($refarticles as $ref): ?>
                    <tr>
                        <td><?php echo $ref['RefArticle']['id']; ?></td>
                        <td>
                            <?php echo $this->Html->link($ref['RefArticle']['reference'],
                            array('controller' => 'refarticles', 'action' => 'view', $ref['RefArticle']['id'])); ?>
                        </td>
                        <td><?php echo $ref['RefArticle']['label']; ?></td>
                        <td><?php echo $ref['RefArticle']['weight']; ?></td>
                        <td><?php echo $ref['ClassesArticle']['label']; ?></td>
                        <td><?php echo $ref['CatalogsArticle']['label']; ?></td>
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
                                    array('controller' => 'refarticles','action'=> 'delete', $ref['RefArticle']['id']),
                                    array('escape' => false, 'style' => "margin-left:10px"),
                                    "Are you sure you wish to delete the User : ".$ref['RefArticle']['label']
                                );
                                ?>

                                <?= $this->Html->link(
                                    $btn_edit,
                                    array('controller' => 'refarticles','action'=> 'edit', $ref['RefArticle']['id']),
                                    array('escape' => false, 'style' => "float:left;margin-left:10px"));
                                ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                    <?php unset($ref); ?>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- <?php echo $this->Paginator->numbers(array('first' => 2, 'last' => 2)); ?> -->