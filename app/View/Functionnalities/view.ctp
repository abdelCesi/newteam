<h4>
	<label for="Identifiant">
		<b>Identifiant :</b>
		<?php echo h($functionnality['Functionnality']['id']); ?>
	</label>
</h4>
<h4>
	<label for="Fonctionnality Name">
		<b>Nom :</b>
		<?php echo h($functionnality['Functionnality']['name']); ?>
	</label>
</h4>
<h4>
	<label for="Fonctionnality Type">
		<b>Type :</b>
		<?php echo h($functionnality['Functionnality']['function_type']); ?>
	</label>
</h4>
<h4>
	<label for="Fonctionnality Description">
		<b>Description :</b>
		<?php echo h($functionnality['Functionnality']['description']); ?>
	</label>
</h4>

<table cellpadding = "0" cellspacing = "0"><tr><td class="actions"></td></tr></table>


<div class="related">
	<h3><?php echo __('Related Profils'); ?></h3>
		
		<!--Ajout d'une association profil fonctionnalité-->
		<?php
			$affect = "<a href='#affect_modal' class='pull-left btn btn-sm btn-success' data-toggle='modal'>
							Affecter un nouveau profil
						</a>";
		?>
		<?= $this->Html->link(
			$affect,
			array('controller' => 'Functionnalities','action'=> 'affectProfil', $functionnality['Functionnality']['id']),
			array('escape' => false, 'style' => "float:left;margin-left:10px"));
		?>
		<div id="affect_modal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Affecter la fonctionnalit&eacute; &agrave; un profil</h4>
					</div>
					<div class="modal-body">
						<?php
							echo $this->Form->create('Profilfunctionnality');
							echo $this->Form->input('functionnality_id', array('default'=>$functionnality['Functionnality']['id'], 'type' => 'hidden'));
							echo $this->Form->input('profile_id', array(
															      'options' => $profiles,
															      'empty' => '(choisissez)'
																));
						?>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
						<?php
						echo $this->Form->button('Enregister', array('class' => 'submit btn btn-primary'));
						?>
					</div>
				</div>
			</div>
		</div>
		
	<!--Liste des associations propre à la fonctionnalité regardé-->
	<?php if (!empty($functionnality['Profile'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nom'); ?></th>
		<th><?php echo __('Horaire'); ?></th>
	</tr>
	<?php foreach ($functionnality['Profile'] as $profile): ?>
		<tr>
			<td><?php echo $profile['id']; ?></td>
			<td><?php echo $profile['profile_name']; ?></td>
			<td><?php echo $profile['working_hour_id']; ?>

				<?php
				
				$btn_view = "<button type='button' class='btn btn-default btn-xs' aria-label='Left Align'>
								<span class='glyphicon glyphicon-info-sign' aria-hidden='true'></span>
							</button>";

				$btn_delete = "<button type='button' class='btn btn-default btn-xs' aria-label='Left Align'>
								<span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
							</button>";
				?>
												
				<?= $this->Html->link(
					$btn_delete,
					array('controller' => 'Profilfunctionnalities','action'=> 'deleteDynamic', $profile['Profilfunctionnality']['id']),
					array('escape' => false, 'style' => "float:right;margin-left:10px"),
					"Voulez vous supprimer l'association avec ce profil : ".$profile['profile_name']
				);
				?>
				
				<?= $this->Html->link(
					$btn_view,
					array('controller' => 'Profiles','action'=> 'View', $profile['id']),
					array('escape' => false, 'style' => "float:right;margin-left:10px"));
				?>
			</td>
			</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
