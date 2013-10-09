<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
  <title>Metode GET</title> 
</head> 
 
<body> 
 
 <!--membuat form-->
<form action="<?php $_SERVER['PHP_SELF'];?>" method="get"> <!--menggunakan metode GET untuk mengirim informasi ke kode PHP, untuk mengakses data-->
Nama 
<input type="text" name="nama" /> <br /> <!--membuat form input 'name' dengan tipe masukan text-->
 
<input type="submit" value="OK" /> <!--membuat tombol submit dengan nama OK-->
</form> 
 
<?php 
if (isset($_GET['nama'])) { // mendapatkan value dari form input nama
  echo 'Hallo, ' . $_GET['nama']; // jika ya maka maka setelah submit maka value yang telah diinput akan ditampilkan di dropdown
} 
?> 
 
</body> 
</html> 