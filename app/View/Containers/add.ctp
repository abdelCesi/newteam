<div class="containers form">
<?php echo $this->Form->create('Container'); ?>
	<fieldset>
		<legend><?php echo __('Add Container'); ?></legend>
	<?php
		echo $this->Form->input('code');
		echo $this->Form->input('status');
		echo $this->Form->input('place_id');
		echo $this->Form->input('packing_id');
		echo $this->Form->input('Receptionorder');
		echo $this->Form->input('Shippingorder');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li>Containers</li>
		<li><?php echo $this->Html->link(__('Back'), array('action' => 'index')); ?></li> </br>
		<li>Boxes</li>
		<li><?php echo $this->Html->link(__('Manage Boxes'), array('controller' => 'boxes', 'action' => 'index')); ?> </li> </br>
		<li>Pallets</li>
		<li><?php echo $this->Html->link(__('Manage Pallets'), array('controller' => 'pallets', 'action' => 'index')); ?> </li>
	</ul>
</div>
