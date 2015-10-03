		<?php 
		
		session_start();
		include '../templates/header.php'; ?>

		<h2>Déconnexion</h2>
		<?php

		if(!isset($_SESSION['login']))
		{
			echo '<p>Vous n\'êtes pas connecté</p>';
		}
		else
		{ ?>
		<p>Voulez-vous vraiment vous déconnecter ?</p>
		<table>
			<tr>
				<td><a href="./logout.php">Oui</a></td>
				<td><a href="../index.php">Non</a></td>
			</tr>
		</table>
		<?php include '../templates/footer.php'; 
		} ?>