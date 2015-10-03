<?php

	session_start();

	$logins = array(
		'galax' => 'wutang',
		'admin' => '1234',
		'decrew' => 'husbad'
		);

	include '../templates/header.php';
	$enterlogin = htmlspecialchars($_POST['pseudo']);
	$enterpassword = htmlspecialchars($_POST['password']);
	$_SESSION['login'] = FALSE;


	if(!empty($enterlogin) && !empty($enterpassword))
	{

		foreach ($logins as $login => $password) 
		{
			if($enterlogin == $login && $enterpassword == $password)
			{
				$_SESSION['login'] = TRUE;
				$_SESSION['pseudo'] = $login;
			}

		}

		if($_SESSION['login'] == TRUE)
		{
			echo "Vous êtes connecté !";	
		}
		else
		{
			echo "Vos identifiants sont incorrects !";	
		}
	}
	else
	{
		echo "Veuillez entrer vos identifiants.";
	}

	include '../templates/footer.php';
?>