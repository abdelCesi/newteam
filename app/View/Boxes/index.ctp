<div class="boxes index">
	<h2><?php echo __('Boxes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('container_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($boxes as $box): ?>
	<tr>
		<td><?php echo h($box['Box']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($box['Container']['id'], array('controller' => 'containers', 'action' => 'view', $box['Container']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $box['Box']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $box['Box']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $box['Box']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $box['Box']['id']))); ?>
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
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li>Boxes</li>
		<li><?php echo $this->Html->link(__('New Box'), array('action' => 'add')); ?></li> </br>
		<li>Containers</li>
		<li><?php echo $this->Html->link(__('Manage Containers'), array('controller' => 'containers', 'action' => 'index')); ?> </li>
	</ul>
</div>
