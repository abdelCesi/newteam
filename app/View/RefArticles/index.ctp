<!-- File: /app/View/Classes/index.ctp -->

<h1>Les articles</h1>
<h5><?php echo $this->Html->link('Ajouter une référence article', array('action' => 'add')); ?></h5>
<table>
    <tr>
        <th><?php echo $this->Paginator->sort('id'); ?></th>
        <th>Référence</th>
        <th>Libellé</th>
        <th>Poids (Kg)</th>
        <th>Classe</th>
        <th>Catalogue</th>
        <th>Action</th>
    </tr>

    <!-- Here is where we loop through our $refs array, printing out ref info -->

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
                                    array('controller' => 'classesarticles','action'=> 'delete', $ref['RefArticle']['id']),
                                    array('escape' => false, 'style' => "margin-left:10px"),
                                    "Are you sure you wish to delete the User : ".$ref['RefArticle']['label']
                                );
                                ?>

                                <?= $this->Html->link(
                                    $btn_edit,
                                    array('controller' => 'classesarticles','action'=> 'edit', $ref['RefArticle']['id']),
                                    array('escape' => false, 'style' => "float:left;margin-left:10px"));
                                ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($ref); ?>
</table>
<?php echo $this->Paginator->numbers(array('first' => 2, 'last' => 2)); ?>