<div class="containers view">
<h2><?php echo __('Container'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($container['Container']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($container['Container']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($container['Container']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Place'); ?></dt>
		<dd>
			<?php echo $this->Html->link($container['Place']['name'], array('controller' => 'places', 'action' => 'view', $container['Place']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Packing'); ?></dt>
		<dd>
			<?php echo $this->Html->link($container['Packing']['id'], array('controller' => 'packings', 'action' => 'view', $container['Packing']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li>Containers</li>
		<li><?php echo $this->Html->link(__('Back'), array('action' => 'index')); ?> </li> </br>
		<li>Packings</li>
		<li><?php echo $this->Html->link(__('Manage Packings'), array('controller' => 'packings', 'action' => 'index')); ?> </li> </br>
		<li>Articles Units</li>
		<li><?php echo $this->Html->link(__('Manage Articles Units'), array('controller' => 'articles_units', 'action' => 'index')); ?> </li> </br>
		<li>Boxes</li>
		<li><?php echo $this->Html->link(__('Manage Boxes'), array('controller' => 'boxes', 'action' => 'index')); ?> </li> </br>
		<li>Pallets</li>
		<li><?php echo $this->Html->link(__('Manage Pallets'), array('controller' => 'pallets', 'action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Articles Units'); ?></h3>
	<?php if (!empty($container['ArticlesUnit'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Container Id'); ?></th>
		<th><?php echo __('Validity Date'); ?></th>
		<th><?php echo __('Ref Article Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($container['ArticlesUnit'] as $articlesUnit): ?>
		<tr>
			<td><?php echo $articlesUnit['id']; ?></td>
			<td><?php echo $articlesUnit['container_id']; ?></td>
			<td><?php echo $articlesUnit['validity_date']; ?></td>
			<td><?php echo $articlesUnit['ref_article_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'articles_units', 'action' => 'view', $articlesUnit['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'articles_units', 'action' => 'edit', $articlesUnit['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'articles_units', 'action' => 'delete', $articlesUnit['id']), array(), __('Are you sure you want to delete # %s?', $articlesUnit['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
<div class="related">
	<h3><?php echo __('Related Moveorders'); ?></h3>
	<?php if (!empty($container['Moveorder'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Order Id'); ?></th>
		<th><?php echo __('Container Id'); ?></th>
		<th><?php echo __('Placefrom'); ?></th>
		<th><?php echo __('Placeto'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($container['Moveorder'] as $moveorder): ?>
		<tr>
			<td><?php echo $moveorder['id']; ?></td>
			<td><?php echo $moveorder['order_id']; ?></td>
			<td><?php echo $moveorder['container_id']; ?></td>
			<td><?php echo $moveorder['placefrom']; ?></td>
			<td><?php echo $moveorder['placeto']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'moveorders', 'action' => 'view', $moveorder['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'moveorders', 'action' => 'edit', $moveorder['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'moveorders', 'action' => 'delete', $moveorder['id']), array(), __('Are you sure you want to delete # %s?', $moveorder['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
<div class="related">
	<h3><?php echo __('Related Receptionorders'); ?></h3>
	<?php if (!empty($container['Receptionorder'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Order Id'); ?></th>
		<th><?php echo __('Carrier Id'); ?></th>
		<th><?php echo __('Supplier Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($container['Receptionorder'] as $receptionorder): ?>
		<tr>
			<td><?php echo $receptionorder['id']; ?></td>
			<td><?php echo $receptionorder['order_id']; ?></td>
			<td><?php echo $receptionorder['carrier_id']; ?></td>
			<td><?php echo $receptionorder['supplier_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'receptionorders', 'action' => 'view', $receptionorder['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'receptionorders', 'action' => 'edit', $receptionorder['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'receptionorders', 'action' => 'delete', $receptionorder['id']), array(), __('Are you sure you want to delete # %s?', $receptionorder['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
<div class="related">
	<h3><?php echo __('Related Shippingorders'); ?></h3>
	<?php if (!empty($container['Shippingorder'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Order Id'); ?></th>
		<th><?php echo __('Carrier Id'); ?></th>
		<th><?php echo __('Store Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($container['Shippingorder'] as $shippingorder): ?>
		<tr>
			<td><?php echo $shippingorder['id']; ?></td>
			<td><?php echo $shippingorder['order_id']; ?></td>
			<td><?php echo $shippingorder['carrier_id']; ?></td>
			<td><?php echo $shippingorder['store_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'shippingorders', 'action' => 'view', $shippingorder['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'shippingorders', 'action' => 'edit', $shippingorder['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'shippingorders', 'action' => 'delete', $shippingorder['id']), array(), __('Are you sure you want to delete # %s?', $shippingorder['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
