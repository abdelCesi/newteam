<div class="packings form">
<?php echo $this->Form->create('Packing'); ?>
	<fieldset>
		<legend><?php echo __('Edit Packing'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('length_id');
		echo $this->Form->input('width_id');
		echo $this->Form->input('height_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li>Packing</li>
		<li><?php echo $this->Html->link(__('Manage Packings'), array('action' => 'index')); ?></li> </br>
		<li>Length</li>
		<li><?php echo $this->Html->link(__('Manage Lengths'), array('controller' => 'lengths', 'action' => 'index')); ?> </li> </br>
		<li>Width</li>
		<li><?php echo $this->Html->link(__('Manage Widths'), array('controller' => 'widths', 'action' => 'index')); ?> </li> </br>
		<li>Height</li>
		<li><?php echo $this->Html->link(__('Manage Heights'), array('controller' => 'heights', 'action' => 'index')); ?> </li> </br>
		<li>Container</li>
		<li><?php echo $this->Html->link(__('Manage Containers'), array('controller' => 'containers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Container'), array('controller' => 'containers', 'action' => 'add')); ?> </li>
	</ul>
</div>
