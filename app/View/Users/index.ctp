<h2>User List</h2>

<!-- Lien pour ajouter d'un nouveau utilisateur -->
<div class='upper-right-opt'>
	<?php echo $this->Html->link( '+ Add a new user', array( 'action' => 'add' ) ); ?>
</div>

<table style='padding:5px;'>
	<!-- table heading -->
	<tr style='background-color:#fff;'>
		<th>ID</th>
		<th>Username</th>
		<th>Firstname</th>
		<th>Address</th>
		<th>Mail</th>
		<th>Phone_Number</th>
		<th>Password</th>
		<th>Status</th>
		<th>Actions</th>
	</tr>

<?php


	foreach( $users as $user ){

		echo "<tr>";
			echo "<td>{$user['User']['id']}</td>";
			echo "<td>{$user['User']['name']}</td>";
			echo "<td>{$user['User']['firstname']}</td>";
			echo "<td>{$user['User']['address']}</td>";
			echo "<td>{$user['User']['mail']}</td>";
            echo "<td>{$user['User']['phone_number']}</td>";
			echo "<td>{$user['User']['password']}</td>";
			echo "<td>{$user['User']['status']}</td>";

			//modifier et supprimer des actions
			echo "<td class='actions'>";
			echo $this->Html->link( 'Edit', array('action' => 'edit', $user['User']['id']) );

			echo $this->Form->postLink( 'Delete', array(
						'action' => 'delete',
						$user['User']['id']), array(
							'confirm'=>'Etes vous sûr de vouloir supprimer cet utilisateur?' ) );
			echo "</td>";
		echo "</tr>";
	}
?>

</table>