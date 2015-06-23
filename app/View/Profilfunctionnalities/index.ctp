<div class="profilfunctionnalities index">
	<h2><?php echo __('Profilfunctionnalities'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('profile_id'); ?></th>
			<th><?php echo $this->Paginator->sort('functionnalitie_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($profilfunctionnalities as $profilfunctionnality): ?>
	<tr>
		<td><?php echo h($profilfunctionnality['Profilfunctionnality']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($profilfunctionnality['Profile']['id'], array('controller' => 'profiles', 'action' => 'view', $profilfunctionnality['Profile']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($profilfunctionnality['Functionnalitie']['name'], array('controller' => 'functionnalities', 'action' => 'view', $profilfunctionnality['Functionnalitie']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $profilfunctionnality['Profilfunctionnality']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $profilfunctionnality['Profilfunctionnality']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $profilfunctionnality['Profilfunctionnality']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $profilfunctionnality['Profilfunctionnality']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Profilfunctionnality'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Functionnalities'), array('controller' => 'functionnalities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Working Hours'), array('controller' => 'working_hours', 'action' => 'index')); ?> </li>		
	</ul>
</div>
