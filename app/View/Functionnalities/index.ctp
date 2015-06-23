<div class="functionnalities index">
	<h2><?php echo __('Functionnalities'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('function_type'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($functionnalities as $functionnality): ?>
	<tr>
		<td><?php echo h($functionnality['Functionnality']['id']); ?>&nbsp;</td>
		<td><?php echo h($functionnality['Functionnality']['name']); ?>&nbsp;</td>
		<td><?php echo h($functionnality['Functionnality']['function_type']); ?>&nbsp;</td>
		<td><?php echo h($functionnality['Functionnality']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $functionnality['Functionnality']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $functionnality['Functionnality']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $functionnality['Functionnality']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $functionnality['Functionnality']['id']))); ?>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Functionnality'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profilfunctionnalities'), array('controller' => 'profilfunctionnalities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Functionnalities'), array('controller' => 'functionnalities', 'action' => 'index')); ?> </li>
	</ul>
</div>