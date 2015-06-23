<div class="workingHours index">
	<h2><?php echo __('Working Hours'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('team_code'); ?></th>
			<th><?php echo $this->Paginator->sort('category'); ?></th>
			<th><?php echo $this->Paginator->sort('site'); ?></th>
			<th><?php echo $this->Paginator->sort('start_time'); ?></th>
			<th><?php echo $this->Paginator->sort('end_time'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($workingHours as $workingHour): ?>
	<tr>
		<td><?php echo h($workingHour['WorkingHour']['id']); ?>&nbsp;</td>
		<td><?php echo h($workingHour['WorkingHour']['team_code']); ?>&nbsp;</td>
		<td><?php echo h($workingHour['WorkingHour']['category']); ?>&nbsp;</td>
		<td><?php echo h($workingHour['WorkingHour']['site']); ?>&nbsp;</td>
		<td><?php echo h($workingHour['WorkingHour']['start_time']); ?>&nbsp;</td>
		<td><?php echo h($workingHour['WorkingHour']['end_time']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $workingHour['WorkingHour']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $workingHour['WorkingHour']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $workingHour['WorkingHour']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $workingHour['WorkingHour']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Working Hour'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profilfunctionnalities'), array('controller' => 'profilfunctionnalities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Functionnalities'), array('controller' => 'functionnalities', 'action' => 'index')); ?> </li>
	</ul>
</div>
