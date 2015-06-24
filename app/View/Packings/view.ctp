<div class="packings view">
<h2><?php echo __('Packing'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($packing['Packing']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Length'); ?></dt>
		<dd>
			<?php echo $this->Html->link($packing['Length']['length'], array('controller' => 'lengths', 'action' => 'view', $packing['Length']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Width'); ?></dt>
		<dd>
			<?php echo $this->Html->link($packing['Width']['width'], array('controller' => 'widths', 'action' => 'view', $packing['Width']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Height'); ?></dt>
		<dd>
			<?php echo $this->Html->link($packing['Height']['height'], array('controller' => 'heights', 'action' => 'view', $packing['Height']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li>Packing</li>
		<li><?php echo $this->Html->link(__('Manage Packings'), array('action' => 'index')); ?> </li> </br>
		<li>Length</li>
		<li><?php echo $this->Html->link(__('Manage Lengths'), array('controller' => 'lengths', 'action' => 'index')); ?> </li> </br>
		<li>Width</li>
		<li><?php echo $this->Html->link(__('Manage Widths'), array('controller' => 'widths', 'action' => 'index')); ?> </li> </br>
		<li>Height</li>
		<li><?php echo $this->Html->link(__('Manage Heights'), array('controller' => 'heights', 'action' => 'index')); ?> </li> </br>
		<li>Container</li>
		<li><?php echo $this->Html->link(__('Manage Containers'), array('controller' => 'containers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Container'), array('controller' => 'containers', 'action' => 'add')); ?> </li>
	</ul>
</div>
