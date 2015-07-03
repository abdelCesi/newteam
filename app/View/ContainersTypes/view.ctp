<div class="containersTypes view">
<h2><?php echo __('Containers Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($containersType['ContainersType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Label'); ?></dt>
		<dd>
			<?php echo h($containersType['ContainersType']['label']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Containers Type'), array('action' => 'edit', $containersType['ContainersType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Containers Type'), array('action' => 'delete', $containersType['ContainersType']['id']), array(), __('Are you sure you want to delete # %s?', $containersType['ContainersType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Containers Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Containers Type'), array('action' => 'add')); ?> </li>
	</ul>
</div>
