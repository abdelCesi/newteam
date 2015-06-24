<div class="widths view">
<h2><?php echo __('Width'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($width['Width']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Width'); ?></dt>
		<dd>
			<?php echo h($width['Width']['width']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li>Width</li>
		<li><?php echo $this->Html->link(__('Manage Widths'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Width'), array('action' => 'add')); ?> </li> </br>
		<li>Packing</li>
		<li><?php echo $this->Html->link(__('Manage Packings'), array('controller' => 'packings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Packing'), array('controller' => 'packings', 'action' => 'add')); ?> </li>
	</ul>
</div>
