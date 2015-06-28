<h4>
	<label for="Identifiant">
		<b>Identifiant :</b>
		<?php echo h($user['User']['id']); ?>
	</label>
</h4>
<h4>
	<label for="Nom">
		<b>Nom :</b>
		<?php echo h($user['User']['name']); ?>
	</label>
</h4>
<h4>
	<label for="label">
		<b>Prénom :</b>
		<?php echo h($user['User']['firstname']); ?>
	</label>
</h4>
<h4>
	<label for="weight">
		<b>Adresse :</b>
		<?php echo h($user['User']['address']); ?>
	</label>
</h4>
<h4>
	<label for="classe">
		<b>Mail :</b>
		<?php echo h($user['User']['mail']); ?>
	</label>
</h4>
<h4>
	<label for="catalog">
		<b>Téléphone :</b>
		<?php echo h($user['User']['phone_number']); ?>
	</label>
</h4>
<h4>
	<label for="catalog">
		<b>Etat :</b>
		<?php echo h($user['User']['status']); ?>
	</label>
</h4>

<br />
<!-- Initialize password -->
<?php
	$init_pwd = "<a href='#initPwd' class='pull-left btn btn-sm btn-success' data-toggle='modal'>
					Changer le mot de passe
				</a>";
?>
<?= $this->Html->link(
    $init_pwd,
    array('controller' => 'Users','action'=> 'initMDP', $user['User']['id']),
    array('escape' => false, 'style' => "float:left;margin-left:10px"));
?>

<!-- Modal initialise password -->
<div id="initPwd" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modifier le mot de passe</h4>
            </div>
            <div class="modal-body">
            	<?php
					echo $this->Form->create('User');
				    echo $this->Form->input('password', array('type'=>'password'));
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

<!-- service affected -->
<?php
	$affect = "<a href='#affect_modal' class='pull-left btn btn-sm btn-success' data-toggle='modal'>
					Affecter à un service
				</a>";
?>
<?= $this->Html->link(
    $affect,
    array('controller' => 'Users','action'=> 'affectSrv', $user['User']['id']),
    array('escape' => false, 'style' => "float:left;margin-left:10px"));
?>
<!-- Modal initialise password -->
<div id="affect_modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Affecter l'utilisateur à un service</h4>
            </div>
            <div class="modal-body">
            	<?php
					echo $this->Form->create('User');
					echo $this->Form->input('service_id', array(
										      'options' => $services,
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
<?php
	$init_pwd = "<a href='#checkRDVdate' class='pull-left btn btn-sm btn-success' data-toggle='modal'>
					Consulter mes rdvs
				</a>";
?>
<?= $this->Html->link(
    $init_pwd,
    array('controller' => 'Users','action'=> 'checkRDVdate', $user['User']['id']),
    array('escape' => false, 'style' => "float:left;margin-left:10px"));
?>