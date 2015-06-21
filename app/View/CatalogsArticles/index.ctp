<!-- File: /app/View/Classes/index.ctp -->

<h1>Les catalogues</h1>
<h5><?php echo $this->Html->link('Ajouter un catalogue', array('action' => 'add')); ?></h5>
<table>
    <tr>
        <th>Id</th>
        <th>Libellé</th>
        <th>Action</th>
    </tr>

    <!-- Here is where we loop through our $catalogs array, printing out catalog info -->

    <?php foreach ($catalogsarticles as $catalog): ?>
    <tr>
        <td><?php echo $catalog['CatalogsArticle']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($catalog['CatalogsArticle']['label'],
            array('controller' => 'catalogsarticles', 'action' => 'view', $catalog['CatalogsArticle']['id'])); ?>
        </td>
        <td>
            <?php echo $this->Html->link('Editer', array('action' => 'edit', $catalog['CatalogsArticle']['id'])); ?>
            <?php echo $this->Form->postLink('Supprimer', array('action' => 'delete', $catalog['CatalogsArticle']['id']),
                                            array('confirm' => 'Veuillez confirmer la suppression ?')); ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($catalog); ?>
</table>