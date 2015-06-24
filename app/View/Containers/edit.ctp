<div class="containers form">
<?php echo $this->Form->create('Container'); ?>
	<fieldset>
		<legend><?php echo __('Edit Container'); ?></legend>
	<?php
		echo $this->Form->input('id');
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
	</ul>
</div>
