<div class="profiles form">
<?php echo $this->Form->create('Profile'); ?>
	<fieldset>
		<legend><?php echo __('Edit Profile'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('profile_name');
		echo $this->Form->input('working_hour_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
<dl><dt class="actions"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Profile.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Profile.id'))); ?></dt></dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Profiles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Profilfunctionnalities'), array('controller' => 'profilfunctionnalities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Functionnalities'), array('controller' => 'functionnalities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Working Hours'), array('controller' => 'working_hours', 'action' => 'index')); ?> </li>		
	</ul>
</div>
