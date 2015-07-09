<div class="panel panel-default">
    <div class="panel-body">
        <div class="container">

        <div class="page-header">
	        <h2>Longueur</h2>
	    </div>

	    <div class="row">
           <div class="col-md-8">
               <div class="btn-group btn-group-justified" role="group" aria-label="...">

                    <div class="btn-group" role="group">
                       <a class="btn btn-sm btn-default" <?php echo $this->Html->link(__('Ajouter une longueur'), array('action' => 'add')); ?></a>
                    </div>
                    <div class="btn-group" role="group">
                       <a class="btn btn-sm btn-default" <?php echo $this->Html->link(__('Gérer le conditionnement'), array('controller' => 'packings', 'action' => 'index')); ?></a>
                    </div>
                </div>
            </div>
     </div>
    <p>
    <div class="table-responsive">
          <table class="table table-hover table-bordered">
                <thead>
                <tr>
                        <th><?php echo $this->Paginator->sort('id'); ?></th>
                        <th><?php echo $this->Paginator->sort('length', 'Longueur'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($lengths as $length): ?>
                <tr>
                    <td><?php echo h($length['Length']['id']); ?>&nbsp;</td>
                    <td><?php echo h($length['Length']['length']); ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('action' => 'view', $length['Length']['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $length['Length']['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $length['Length']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $length['Length']['id']))); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
                </tbody>
                </table>
                <p>
                <?php
                echo $this->Paginator->counter(array(
                    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
                ));
                ?>	</p>
                <div class="paging">
                <?php
                    echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
                    echo $this->Paginator->numbers(array('separator' => ''));
                    echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
                ?>
                </div>
            </div>
         </div>
    </div>
</div>