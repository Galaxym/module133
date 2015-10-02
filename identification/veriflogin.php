<?php
	
	include '../templates/header.php';
	$pseudo = htmlspecialchars($_POST['pseudo']);
	$password = htmlspecialchars($_POST['password']);

	if(!empty($pseudo) && !empty($password))
	{
		if($pseudo == 'admin' && $password == '1234')
		{
			echo "Vous êtes connecté";
		}
		else
		{
			echo "Vos identifiants sont incorrects";
		}
	}

	include '../templates/footer.php';

?>