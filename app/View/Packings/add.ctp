<div class="packings form">
<?php echo $this->Form->create('Packing'); ?>
	<fieldset>
		<legend><?php echo __('Add Packing'); ?></legend>
	<?php
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
		<li><?php echo $this->Html->link(__('Back'), array('action' => 'index')); ?></li> </br>
	</ul>
</div>
