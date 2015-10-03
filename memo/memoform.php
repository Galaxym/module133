<?php
	
	session_start();

	if(!isset($_SESSION['$memobypseudo']))
	{
		$_SESSION['$memobypseudo'] = array();
	}
	
	header('Location: ./memo.php');
	$_SESSION['memotext'] = htmlspecialchars($_POST['memotext']);

	if(isset($_POST['memotext']))
	{
		$filememo = fopen('memo.csv', 'a+');		
		$_SESSION['memocsv'] = $_SESSION['pseudo']."\n".$memotext."\nle ".date('d.m.Y')." à ".date('H:i')."\n".':::'."\n"; 		
		array_push($_SESSION['$memobypseudo'], $_SESSION['memotext']);
		fwrite($filememo, $_SESSION['memocsv']);
	}


?>