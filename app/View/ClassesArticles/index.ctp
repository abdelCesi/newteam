<!-- File: /app/View/Classes/index.ctp -->

<h1>Les classes</h1>
<h5><?php echo $this->Html->link('Ajouter une classe', array('action' => 'add')); ?></h5>
<table>
    <tr>
        <th>Id</th>
        <th>Libellé</th>
        <th>Parent</th>
        <th>Action</th>
    </tr>

    <!-- Here is where we loop through our $classes array, printing out class info -->

    <?php foreach ($classesarticles as $class): ?>
    <tr>
        <td><?php echo $class['ClassesArticle']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($class['ClassesArticle']['label'],
            array('controller' => 'classesarticles', 'action' => 'view', $class['ClassesArticle']['id'])); ?>
        </td>
        <td>
            <?php 
                echo $class['ClassesArticle']['classe_id']; 
                echo ' - ';
                echo $class['Supervisor']['label'];
            ?>
        </td>
        <td>
            <?php echo $this->Html->link('Editer', array('action' => 'edit', $class['ClassesArticle']['id'])); ?>
            <?php echo $this->Form->postLink('Supprimer', array('action' => 'delete', $class['ClassesArticle']['id']),
                                            array('confirm' => 'Are you sure ?')); ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($class); ?>
</table>