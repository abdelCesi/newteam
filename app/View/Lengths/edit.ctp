<div class="lengths form">
<?php echo $this->Form->create('Length'); ?>
	<fieldset>
		<legend><?php echo __('Edit Length'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('length');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li>Length</li>
		<li><?php echo $this->Html->link(__('Manage Lengths'), array('action' => 'index')); ?></li> </br>
		<li>Packing</li>
		<li><?php echo $this->Html->link(__('Manage Packings'), array('controller' => 'packings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Packing'), array('controller' => 'packings', 'action' => 'add')); ?> </li>
	</ul>
</div>
