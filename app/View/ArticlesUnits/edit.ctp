<div class="articlesUnits form">
<?php echo $this->Form->create('ArticlesUnit'); ?>
	<fieldset>
		<legend><?php echo __('Edit Articles Unit'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('container_id');
		echo $this->Form->input('validity_date');
		echo $this->Form->input('ref_article_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ArticlesUnit.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ArticlesUnit.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Articles Units'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Ref Articles'), array('controller' => 'ref_articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ref Article'), array('controller' => 'ref_articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Containers'), array('controller' => 'containers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Container'), array('controller' => 'containers', 'action' => 'add')); ?> </li>
	</ul>
</div>
