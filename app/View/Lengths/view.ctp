<div class="lengths view">
<h2><?php echo __('Length'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($length['Length']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Length'); ?></dt>
		<dd>
			<?php echo h($length['Length']['length']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li>Length</li>
		<li><?php echo $this->Html->link(__('Manage Lengths'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Length'), array('action' => 'add')); ?> </li> </br>
		<li>Packing</li>
		<li><?php echo $this->Html->link(__('Manage Packings'), array('controller' => 'packings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Packing'), array('controller' => 'packings', 'action' => 'add')); ?> </li>
	</ul>
</div>
