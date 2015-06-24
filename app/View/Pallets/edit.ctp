<div class="pallets form">
<?php echo $this->Form->create('Pallet'); ?>
	<fieldset>
		<legend><?php echo __('Edit Pallet'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('container_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li>Pallets</li>
		<li><?php echo $this->Html->link(__('Back'), array('action' => 'index')); ?></li>
	</ul>
</div>
