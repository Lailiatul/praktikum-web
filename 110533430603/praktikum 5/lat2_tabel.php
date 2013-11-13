<!DOCTYPE html PUBLIC "-//W3c//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml : lang="en" lang="en">
<head>
	<title>Menciptakan Tabel</title>
</head>

<body>

<?php
require_once './koneksi1.php';

$sql = 'CREATE TABLE mahasiswa (
	nim VARCHAR(12) NOT NULL,
	nama VARCHAR(40) NOT NULL,
	alamat VARCHAR(100),
	PRIMARY KEY (nim)
	) ENGINE=MyISAM;';

$res = mysql_query($sql);
if ($res) {
	echo 'Tabel Created';
	mysql_close($res);
} else {
	echo mysql_error();
}

?>

</body>
</html>