<div class="widths form">
<?php echo $this->Form->create('Width'); ?>
	<fieldset>
		<legend><?php echo __('Add Width'); ?></legend>
	<?php
		echo $this->Form->input('width');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li>Width</li>
		<li><?php echo $this->Html->link(__('Back'), array('action' => 'index')); ?></li> </br>
	</ul>
</div>
