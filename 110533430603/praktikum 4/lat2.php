<!DOCTYPE html
	PUBLIC "-//W3c//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml : lang="en" lang="en">

<head>
	<title>Set Session</title>
</head>

<body>

<?php

//inisialisasi data session
session_start();

// set session jika belum ada
if (!isset ($_SESSION['test'])) {
	$_SESSION['test'] = 'value';

} else {
	echo 'Session di-set <br />';
	// Mencetak semua elemen test
	echo 'Nilai: ' . $_SESSION['test'] . '<br />';

	//Mencetak semua elemen session
	print_r($_SESSION); 
}

?>
<p>
	Tekan Refresh (F5);

</body>
</html>
