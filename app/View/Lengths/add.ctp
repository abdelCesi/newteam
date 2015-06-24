<div class="lengths form">
<?php echo $this->Form->create('Length'); ?>
	<fieldset>
		<legend><?php echo __('Add Length'); ?></legend>
	<?php
		echo $this->Form->input('length');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li>Length</li>
		<li><?php echo $this->Html->link(__('Back'), array('action' => 'index')); ?></li> </br>
	</ul>
</div>
