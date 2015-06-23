<div class="profilfunctionnalities view">
<h2><?php echo __('Profilfunctionnality'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($profilfunctionnality['Profilfunctionnality']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profile'); ?></dt>
		<dd>
			<?php echo $this->Html->link($profilfunctionnality['Profile']['id'], array('controller' => 'profiles', 'action' => 'view', $profilfunctionnality['Profile']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Functionnalitie'); ?></dt>
		<dd>
			<?php echo $this->Html->link($profilfunctionnality['Functionnalitie']['name'], array('controller' => 'functionnalities', 'action' => 'view', $profilfunctionnality['Functionnalitie']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
	<table cellpadding = "0" cellspacing = "0">
		<tr>
			<td class="actions">
				<?php echo $this->Html->link(__('Edit Profilfunctionnality'), array('action' => 'edit', $profilfunctionnality['Profilfunctionnality']['id'])); ?> 
				<?php echo $this->Form->postLink(__('Delete Profilfunctionnality'), array('action' => 'delete', $profilfunctionnality['Profilfunctionnality']['id']), array(), __('Are you sure you want to delete # %s?', $profilfunctionnality['Profilfunctionnality']['id'])); ?> 
			</td>
		</tr>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Profilfunctionnalities'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Functionnalities'), array('controller' => 'functionnalities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Working Hours'), array('controller' => 'working_hours', 'action' => 'index')); ?> </li>		
	</ul>
</div>
