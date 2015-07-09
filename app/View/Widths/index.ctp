<div class="panel panel-default">
    <div class="panel-body">
        <div class="container">

    <div class="page-header">
	    <h2>Largeur</h2>
	</div>

            <div class="row">
                <div class="col-md-8">
                   <div class="btn-group btn-group-justified" role="group" aria-label="...">

                      <div class="btn-group" role="group">
                            <a class="btn btn-sm btn-default" <?php echo $this->Html->link(__('Ajouter une largeur'), array('action' => 'add')); ?></a>
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
                            <th><?php echo $this->Paginator->sort('width', 'Largeur'); ?></th>
                            <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                    </thead>
            <tbody>
            <?php foreach ($widths as $width): ?>
            <tr>
                <td><?php echo h($width['Width']['id']); ?>&nbsp;</td>
                <td><?php echo h($width['Width']['width']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $width['Width']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $width['Width']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $width['Width']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $width['Width']['id']))); ?>
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



