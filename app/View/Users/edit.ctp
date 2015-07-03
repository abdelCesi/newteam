<h2>Edit User</h2>

<!-- Lister un nouvel utilisateur -->
<div class='upper-right-opt'>
    <?php echo $this->Html->link( 'List Users', array( 'action' => 'index' ) ); ?>
</div>

<?php

echo $this->Form->create('User');

    echo $this->Form->input('name');
    echo $this->Form->input('firstname');
    echo $this->Form->input('address');
    echo $this->Form->input('mail');
    echo $this->Form->input('phone_number');
	echo $this->Form->input('profile_name', array (
		'label' => 'Profil',
		'type' => 'select',
		'class'=>'form-control'));
	echo $this->Form->input('service_id', array (
		'label' => 'Service',
		'type' => 'select',
		'class'=>'form-control'));
    echo $this->Form->input('password', array('type'=>'password'));


echo $this->Form->end('Submit');
?>