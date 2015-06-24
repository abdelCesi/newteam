<div class="boxes view">
<h2><?php echo __('Box'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($box['Box']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Container'); ?></dt>
		<dd>
			<?php echo $this->Html->link($box['Container']['id'], array('controller' => 'containers', 'action' => 'view', $box['Container']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li>Boxes</li>
		<li><?php echo $this->Html->link(__('Back'), array('action' => 'index')); ?> </li>
	</ul>
</div>
