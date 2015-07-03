<h4>
	<label for="Identifiant">
		<b>Identifiant :</b>
		<?php echo h($profile['Profile']['id']); ?>
	</label>
</h4>
<h4>
	<label for="Profile Name">
		<b>Nom du profil :</b>
		<?php echo h($profile['Profile']['profile_name']); ?>
	</label>
</h4>
<h4>
	<label for="Working Hour">
		<?php echo $this->Html->link('Horaire de travail :', array('controller' => 'working_hours', 'action' => 'view', $profile['WorkingHour']['id'])); ?><br />		
		<?php echo "&nbsp;&nbsp;&nbsp;&nbsp;Team : ".$profile['WorkingHour']['team_code'];?><br />
		<?php echo "&nbsp;&nbsp;&nbsp;&nbsp;Start at : ".$profile['WorkingHour']['start_time'];?><br />
		<?php echo "&nbsp;&nbsp;&nbsp;&nbsp;End at : ".$profile['WorkingHour']['end_time']; ?>
	</label>
</h4>

<table cellpadding = "0" cellspacing = "0"><tr><td class="actions"></td></tr></table>

<div class="related">
	<h3><?php echo __('Fonctionnalit&eacute;s ratach&eacute;es &agrave; ce profil'); ?></h3>
	<?php if (!empty($profile['Functionnality'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nom'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($profile['Functionnality'] as $functionnality): ?>
		<tr>
			<td><?php echo $functionnality['id']; ?></td>
			<td><?php echo $functionnality['name']; ?></td>
			<td><?php echo $functionnality['function_type']; ?></td>
			<td><?php echo $functionnality['description']; ?>
				<?php
					$btn_view = "<button type='button' class='btn btn-default btn-xs' aria-label='Left Align'>
									<span class='glyphicon glyphicon-info-sign' aria-hidden='true'></span>
								</button>";
								
					$btn_edit = "<button type='button' class='btn btn-default btn-xs' aria-label='Left Align'>
									<span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
								</button>";

					$btn_delete = "<button type='button' class='btn btn-default btn-xs' aria-label='Left Align'>
									<span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
								</button>";
				?>

				<?= $this->Html->link(
					$btn_delete,
					array('controller' => 'functionnalities', 'action'=> 'delete', $functionnality['id']),
					array('escape' => false, 'style' => "float:right;margin-left:10px"),
					"Etes-vous sur de vouloir supprimer : ".$functionnality['name']);
				?>

				<?= $this->Html->link(
					$btn_edit,
					array('controller' => 'functionnalities', 'action'=> 'edit', $functionnality['id']),
					array('escape' => false, 'style' => "float:right;margin-left:10px"));
				?>
				
				<?= $this->Html->link(
					$btn_view,
					array('controller' => 'functionnalities','action'=> 'View', $functionnality['id']),
					array('escape' => false, 'style' => "float:right;margin-left:10px"));
				?>
				
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
