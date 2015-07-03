<h4>
	<label for="Identifiant">
		<b>Identifiant :</b>
		<?php echo h($workingHour['WorkingHour']['id']); ?>
	</label>
</h4>
<h4>
	<label for="Team Code">
		<b>Code d'&eacute;quipe:</b>
		<?php echo h($workingHour['WorkingHour']['team_code']); ?>
	</label>
</h4>
<h4>
	<label for="Team Code">
		<b>Type :</b>
		<?php echo h($workingHour['WorkingHour']['category']); ?>
	</label>
</h4>
<h4>
	<label for="Site">
		<b>Description :</b>
		<?php echo h($workingHour['WorkingHour']['site']); ?>
	</label>
</h4>
<h4>
	<label for="Start Time">
		<b>Commence &agrave; :</b>
		<?php echo h($workingHour['WorkingHour']['start_time']); ?>
	</label>
</h4>
<h4>
	<label for="End Time">
		<b>Finit &agrave; :</b>
		<?php echo h($workingHour['WorkingHour']['end_time']); ?>
	</label>
</h4>

<table cellpadding = "0" cellspacing = "0"><tr><td class="actions"></td></tr></table>

<div class="related">
	<h3><?php echo __('Related Profiles'); ?></h3>
	<?php if (!empty($workingHour['Profile'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Profile Name'); ?></th>
	</tr>
	<?php foreach ($workingHour['Profile'] as $profile): ?>
		<tr>
			<td><?php echo $profile['id']; ?></td>
			<td><?php echo $profile['profile_name']; ?>
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
					array('controller' => 'profiles', 'action'=> 'delete', $profile['id']),
					array('escape' => false, 'style' => "float:right;margin-left:10px"),
					"Etes-vous sur de vouloir supprimer : ".$profile['profile_name']);
				?>

				<?= $this->Html->link(
					$btn_edit,
					array('controller' => 'profiles', 'action'=> 'edit', $profile['id']),
					array('escape' => false, 'style' => "float:right;margin-left:10px"));
				?>
				
				<?= $this->Html->link(
					$btn_view,
					array('controller' => 'profiles','action'=> 'View', $profile['id']),
					array('escape' => false, 'style' => "float:right;margin-left:10px"));
				?>

			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Lier un autre profil'), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
