<div class="pallets index">
	<h2><?php echo __('Pallets'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('container_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($pallets as $pallet): ?>
	<tr>
		<td><?php echo h($pallet['Pallet']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pallet['Container']['id'], array('controller' => 'containers', 'action' => 'view', $pallet['Container']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pallet['Pallet']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pallet['Pallet']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pallet['Pallet']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $pallet['Pallet']['id']))); ?>
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
		<li>Pallets</li>
		<li><?php echo $this->Html->link(__('New Pallet'), array('action' => 'add')); ?></li> </br>
		<li>Containers</li>
		<li><?php echo $this->Html->link(__('Manage Containers'), array('controller' => 'containers', 'action' => 'index')); ?> </li>
	</ul>
</div>
