<div class="functionnalities form">
<?php echo $this->Form->create('Functionnality'); ?>
	<fieldset>
		<legend><?php echo __('Edit Functionnality'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('function_type');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
<dl><dt class="actions"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Functionnality.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Functionnality.id'))); ?></dt></dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Functionnalities'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profilfunctionnalities'), array('controller' => 'profilfunctionnalities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Functionnalities'), array('controller' => 'functionnalities', 'action' => 'index')); ?> </li>
	</ul>
</div>
