<div class="packings index">
	<h2><?php echo __('Packings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('length_id'); ?></th>
			<th><?php echo $this->Paginator->sort('width_id'); ?></th>
			<th><?php echo $this->Paginator->sort('height_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($packings as $packing): ?>
	<tr>
		<td><?php echo h($packing['Packing']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($packing['Length']['length'], array('controller' => 'lengths', 'action' => 'view', $packing['Length']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($packing['Width']['width'], array('controller' => 'widths', 'action' => 'view', $packing['Width']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($packing['Height']['height'], array('controller' => 'heights', 'action' => 'view', $packing['Height']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $packing['Packing']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $packing['Packing']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $packing['Packing']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $packing['Packing']['id']))); ?>
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
		<li>Packing</li>
		<li><?php echo $this->Html->link(__('New Packing'), array('action' => 'add')); ?></li> </br>
		<li>Length</li>
		<li><?php echo $this->Html->link(__('Manage Lengths'), array('controller' => 'lengths', 'action' => 'index')); ?> </li> </br>
		<li>Width</li>
		<li><?php echo $this->Html->link(__('Manage Widths'), array('controller' => 'widths', 'action' => 'index')); ?> </li> </br>
		<li>Height</li>
		<li><?php echo $this->Html->link(__('Manage Heights'), array('controller' => 'heights', 'action' => 'index')); ?> </li> </br>
		<li>Container</li>
		<li><?php echo $this->Html->link(__('Manage Containers'), array('controller' => 'containers', 'action' => 'index')); ?> </li>
	</ul>
</div>
