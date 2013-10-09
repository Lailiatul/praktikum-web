<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
 
<head> 
  <title>Data Seleksi</title> 
</head> 
 
<body> 
 
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
    Pekerjaan 
    <select name="job"> <!--membuat select 'job' -->
      <option value="Mahasiswa">Mahasiswa <!--membuat option dari form select yang berisi "mahasiswa" -->
      <option value="ABRI">ABRI <!--membuat option dari form select yang berisi "ABRI" -->
      <option value="PNS">PNS <!--membuat option dari form select yang berisi "PNS" -->
      <option value="Swasta">Swasta <!--membuat option dari form select yang berisi "SWASTA" -->
    </select> <br /> 
 
    <input type="submit" value="ok" /> <!--membuat submit dengan value ok-->
  </form> 
 
<?php 
if (isset($_POST['job'])) { //jika memilih value job
  echo $_POST['job']; //maka pilihan kan di dropdown
} 
?> 
 
</body> 