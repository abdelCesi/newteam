<div class="dates form">
<?php echo $this->Form->create('Date'); ?>
	<fieldset>
		<legend><?php echo __('Add Date'); ?></legend>
	<?php
		echo $this->Form->input('date_rdv');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Dates'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Rdvs'), array('controller' => 'rdvs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rdv'), array('controller' => 'rdvs', 'action' => 'add')); ?> </li>
	</ul>
</div>
