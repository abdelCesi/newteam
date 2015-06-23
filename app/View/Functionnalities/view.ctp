<div class="functionnalities view">
<h2><?php echo __('Functionnality'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($functionnality['Functionnality']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($functionnality['Functionnality']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Function Type'); ?></dt>
		<dd>
			<?php echo h($functionnality['Functionnality']['function_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($functionnality['Functionnality']['description']); ?>
			&nbsp;
		</dd>
	</dl>
	<table cellpadding = "0" cellspacing = "0">
		<tr>
			<td class="actions">
				<?php echo $this->Html->link(__('Edit Functionnality'), array('action' => 'edit', $functionnality['Functionnality']['id'])); ?> 
				<?php echo $this->Form->postLink(__('Delete Functionnality'), array('action' => 'delete', $functionnality['Functionnality']['id']), array(), __('Are you sure you want to delete # %s?', $functionnality['Functionnality']['id'])); ?> 
			</td>
		</tr>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>		
		<li><?php echo $this->Html->link(__('List Functionnalities'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profilfunctionnalities'), array('controller' => 'profilfunctionnalities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Functionnalities'), array('controller' => 'functionnalities', 'action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Profilfunctionnalities'); ?></h3>
	<?php if (!empty($functionnality['Profilfunctionnality'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Profile Id'); ?></th>
		<th><?php echo __('Functionnalitie Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($functionnality['Profilfunctionnality'] as $profilfunctionnality): ?>
		<tr>
			<td><?php echo $profilfunctionnality['id']; ?></td>
			<td><?php echo $profilfunctionnality['profile_id']; ?></td>
			<td><?php echo $profilfunctionnality['functionnalitie_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'profilfunctionnalities', 'action' => 'view', $profilfunctionnality['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'profilfunctionnalities', 'action' => 'edit', $profilfunctionnality['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'profilfunctionnalities', 'action' => 'delete', $profilfunctionnality['id']), array(), __('Are you sure you want to delete # %s?', $profilfunctionnality['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Profilfunctionnality'), array('controller' => 'profilfunctionnalities', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
