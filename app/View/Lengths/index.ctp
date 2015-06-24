<div class="lengths index">
	<h2><?php echo __('Lengths'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('length'); ?></th>
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
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li>Length</li>
		<li><?php echo $this->Html->link(__('New Length'), array('action' => 'add')); ?></li> </br>
		<li>Packing</li>
		<li><?php echo $this->Html->link(__('Manage Packing'), array('controller' => 'packings', 'action' => 'index')); ?> </li>
	</ul>
</div>
