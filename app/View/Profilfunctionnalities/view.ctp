<h4>
	<label for="Identifiant">
		<b>Identifiant :</b>
		<?php echo h($profilfunctionnality['Profilfunctionnality']['id']); ?>
	</label>
</h4>
<h4>
	<label for="Profile Name">
		<b>Nom du profil :</b>
		<?php echo $this->Html->link($profilfunctionnality['Profile']['profile_name'], array('controller' => 'profiles', 'action' => 'view', $profilfunctionnality['Profile']['id'])); ?>
	</label>
</h4>
<h4>
	<label for="Functionnality Name">
		<b>Nom de la fonctionnalit&eacute; :</b>
		<?php echo $this->Html->link($profilfunctionnality['Functionnalitie']['name'], array('controller' => 'functionnalities', 'action' => 'view', $profilfunctionnality['Functionnalitie']['id'])); ?>
	</label>
</h4>