<div class="rdvs view">
<h2><?php echo __('Rdv'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rdv['Rdv']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Time'); ?></dt>
		<dd>
			<?php echo h($rdv['Rdv']['start_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Time'); ?></dt>
		<dd>
			<?php echo h($rdv['Rdv']['end_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rdv['User']['name'], array('controller' => 'users', 'action' => 'view', $rdv['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rdv['Date']['date_rdv'], array('controller' => 'dates', 'action' => 'view', $rdv['Date']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rdv'), array('action' => 'edit', $rdv['Rdv']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rdv'), array('action' => 'delete', $rdv['Rdv']['id']), array(), __('Are you sure you want to delete # %s?', $rdv['Rdv']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rdvs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rdv'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dates'), array('controller' => 'dates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Date'), array('controller' => 'dates', 'action' => 'add')); ?> </li>
	</ul>
</div>
