<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
 
<head> 
  <title>Prefill Data Radio Button</title> 
</head> 
 
<body> 
 
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
    Jenis Kelamin 
    <input type="radio" name="sex" value="Pria" checked <!--membuat form radio botton 'sex' dengan value "pria"-->
          <?php 
      if ($_POST['sex'] == 'Pria') { //jika memilih value "pria" pada radio button 'sex'
        echo 'checked="checked"'; //value radio botton 'sex' akan tetap di cek
      } 
      ?> 
    />Pria 
    <input type="radio" name="sex" value="Wanita" <!--membuat form radio botton 'sex' dengan value "wanita"-->
      <?php 
      if ($_POST['sex'] == 'Wanita') { //jika memilih value "wanita" pada radio button 'sex'
        echo 'checked="checked"'; //value radio botton 'sex' akan tetap di cek
      } 
      ?> 
    />Wanita <br /> 
 
    <input type="submit" value="ok" /> <!--membuat form input, dengan value "ok"-->
  </form> 

<?php 
if (isset($_POST['sex'])) { //jika memilih value radio button 'sex'
  echo $_POST['sex']; //value radio botton 'sex' akan tetap di cek
} 
?> 
 
</body> 
 
</html> 