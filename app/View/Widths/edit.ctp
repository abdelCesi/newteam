<div class="widths form">
<?php echo $this->Form->create('Width'); ?>
	<fieldset>
		<legend><?php echo __('Edit Width'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('width');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li>Width</li>
		<li><?php echo $this->Html->link(__('Manage Widths'), array('action' => 'index')); ?></li> </br>
		<li>Packing</li>
		<li><?php echo $this->Html->link(__('Manage Packings'), array('controller' => 'packings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Packing'), array('controller' => 'packings', 'action' => 'add')); ?> </li>
	</ul>
</div>
