<!DOCTYPE html
	PUBLIC "-//W3c//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml : lang="en" lang="en">

<head>
	<title>Hapus Cookie</title>
</head>

<body>

<?php

//men-set nilai cookie
setcookie('nama_cookie','nilai_cookie');

if(isset($_COOKIE['nama_cookie'])) {
	echo 'cookie di-set <br />' ;
	//menghapis cookie, dengan masa berlaku 3 jam yang lalu
	setcookie('nama_cookie', '', time() - 3 * 3600);
	echo 'cookie dihapus';

} else {
	echo 'unset';
}

?>

<p>
echo 'Tekan Refresh (F5)';

</body>

</html>
