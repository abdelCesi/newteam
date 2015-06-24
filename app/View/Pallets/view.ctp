<div class="pallets view">
<h2><?php echo __('Pallet'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pallet['Pallet']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Container'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pallet['Container']['id'], array('controller' => 'containers', 'action' => 'view', $pallet['Container']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li>Pallets</li>
		<li><?php echo $this->Html->link(__('Back'), array('action' => 'index')); ?> </li>
	</ul>
</div>
