<div class="articlesUnits view">
<h2><?php echo __('Articles Unit'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($articlesUnit['ArticlesUnit']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Container'); ?></dt>
		<dd>
			<?php echo $this->Html->link($articlesUnit['Container']['id'], array('controller' => 'containers', 'action' => 'view', $articlesUnit['Container']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Validity Date'); ?></dt>
		<dd>
			<?php echo h($articlesUnit['ArticlesUnit']['validity_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ref Article'); ?></dt>
		<dd>
			<?php echo $this->Html->link($articlesUnit['RefArticle']['id'], array('controller' => 'ref_articles', 'action' => 'view', $articlesUnit['RefArticle']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Articles Unit'), array('action' => 'edit', $articlesUnit['ArticlesUnit']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Articles Unit'), array('action' => 'delete', $articlesUnit['ArticlesUnit']['id']), array(), __('Are you sure you want to delete # %s?', $articlesUnit['ArticlesUnit']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles Units'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Articles Unit'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ref Articles'), array('controller' => 'ref_articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ref Article'), array('controller' => 'ref_articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Containers'), array('controller' => 'containers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Container'), array('controller' => 'containers', 'action' => 'add')); ?> </li>
	</ul>
</div>
