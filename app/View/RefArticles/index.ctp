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
            <?php echo $this->Html->link('Editer', array('action' => 'edit', $ref['RefArticle']['id'])); ?>
            <?php echo $this->Form->postLink('Supprimer', array('action' => 'delete', $ref['RefArticle']['id']),
                                            array('confirm' => 'Veuillez confirmer la suppression ?')); ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($ref); ?>
</table>
<?php echo $this->Paginator->numbers(array('first' => 2, 'last' => 2)); ?>