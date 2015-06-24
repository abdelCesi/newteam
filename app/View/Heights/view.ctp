<div class="heights view">
<h2><?php echo __('Height'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($height['Height']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Height'); ?></dt>
		<dd>
			<?php echo h($height['Height']['height']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li>Height</li>
		<li><?php echo $this->Html->link(__('Manage Heights'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Height'), array('action' => 'add')); ?> </li> </br>
		<li>Packing</li>
		<li><?php echo $this->Html->link(__('Manage Packings'), array('controller' => 'packings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Packing'), array('controller' => 'packings', 'action' => 'add')); ?> </li>
	</ul>
</div>
