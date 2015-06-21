<div class="dates view">
<h2><?php echo __('Date'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($date['Date']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Rdv'); ?></dt>
		<dd>
			<?php echo h($date['Date']['date_rdv']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Date'), array('action' => 'edit', $date['Date']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Date'), array('action' => 'delete', $date['Date']['id']), array(), __('Are you sure you want to delete # %s?', $date['Date']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dates'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Date'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rdvs'), array('controller' => 'rdvs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rdv'), array('controller' => 'rdvs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Rdvs'); ?></h3>
	<?php if (!empty($date['Rdv'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Start Time'); ?></th>
		<th><?php echo __('End Time'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($date['Rdv'] as $rdv): ?>
		<tr>
			<td><?php echo $rdv['id']; ?></td>
			<td><?php echo $rdv['start_time']; ?></td>
			<td><?php echo $rdv['end_time']; ?></td>
			<td><?php echo $rdv['user_id']; ?></td>
			<td><?php echo $rdv['date_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'rdvs', 'action' => 'view', $rdv['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'rdvs', 'action' => 'edit', $rdv['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'rdvs', 'action' => 'delete', $rdv['id']), array(), __('Are you sure you want to delete # %s?', $rdv['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Rdv'), array('controller' => 'rdvs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
