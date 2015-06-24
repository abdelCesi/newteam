<div class="heights form">
<?php echo $this->Form->create('Height'); ?>
	<fieldset>
		<legend><?php echo __('Add Height'); ?></legend>
	<?php
		echo $this->Form->input('height');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li>Height</li>
		<li><?php echo $this->Html->link(__('Back'), array('action' => 'index')); ?></li> </br>
	</ul>
</div>
