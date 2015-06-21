<h2>Add New User</h2>

<!-- Page d'ajout d'un utilisateur -->
<div class='upper-right-opt'>
    <?php echo $this->Html->link( 'List Users', array( 'action' => 'index' ) ); ?>
</div>

<?php
//formulaire d'ajout , nommage des noms de colonnes pareil que ceux en base
echo $this->Form->create('User');

    echo $this->Form->input('name');
    echo $this->Form->input('firstname');
    echo $this->Form->input('address');
    echo $this->Form->input('mail');
    echo $this->Form->input('phone_number');
    echo $this->Form->input('password', array('type'=>'password'));
    echo $this->Form->input('status');

echo $this->Form->end('Submit');
?>