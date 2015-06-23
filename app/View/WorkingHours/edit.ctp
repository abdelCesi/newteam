<div class="workingHours form">
<?php echo $this->Form->create('WorkingHour'); ?>
	<fieldset>
		<legend><?php echo __('Edit Working Hour'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('team_code');
		echo $this->Form->input('category');
		echo $this->Form->input('site');
		echo $this->Form->input('start_time');
		echo $this->Form->input('end_time');
	?>
	</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
	<dl><dt class="actions"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('WorkingHour.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('WorkingHour.id'))); ?></dt></dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Working Hours'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profilfunctionnalities'), array('controller' => 'profilfunctionnalities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Functionnalities'), array('controller' => 'functionnalities', 'action' => 'index')); ?> </li>
	</ul>
</div>
