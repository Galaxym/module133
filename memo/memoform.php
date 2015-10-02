<?php
	
	header('Location: ./memo.php');

	$memotext = htmlspecialchars($_POST['memotext']);

	if(isset($_POST['memotext']))
	{
		$filememo = fopen('memo.csv', 'a+');
		$memocsv = $memotext."\nle ".date('d.m.Y')." à ".date('H:i')."\n".':::'."\n"; 
		fwrite($filememo, $memocsv);		
	}


?>