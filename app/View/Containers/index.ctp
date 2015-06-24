<div class="containers index">
	<h2><?php echo __('Containers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('code'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('place_id'); ?></th>
			<th><?php echo $this->Paginator->sort('packing_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($containers as $container): ?>
	<tr>
		<td><?php echo h($container['Container']['id']); ?>&nbsp;</td>
		<td><?php echo h($container['Container']['code']); ?>&nbsp;</td>
		<td><?php echo h($container['Container']['status']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($container['Place']['name'], array('controller' => 'places', 'action' => 'view', $container['Place']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($container['Packing']['id'], array('controller' => 'packings', 'action' => 'view', $container['Packing']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $container['Container']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $container['Container']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $container['Container']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $container['Container']['id']))); ?>
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
		<li>Containers</li>
		<li><?php echo $this->Html->link(__('New Container'), array('action' => 'add')); ?></li> </br>
		<li>Packings</li>
		<li><?php echo $this->Html->link(__('Manage Packings'), array('controller' => 'packings', 'action' => 'index')); ?> </li> </br>
		<li>Articles Units</li>
		<li><?php echo $this->Html->link(__('Manage Articles Units'), array('controller' => 'articles_units', 'action' => 'index')); ?> </li> </br>
		<li>Boxes</li>
		<li><?php echo $this->Html->link(__('Manage Boxes'), array('controller' => 'boxes', 'action' => 'index')); ?> </li> </br>
		<li>Pallets</li>
		<li><?php echo $this->Html->link(__('Manage Pallets'), array('controller' => 'pallets', 'action' => 'index')); ?> </li>
	</ul>
</div>
