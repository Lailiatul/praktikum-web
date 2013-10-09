<!-- ALGORITMA
1. Starr
2. User memasukkan username dan pasword
3. User mengklik button Login
4. jika username dan pasword memiliki value maka login berhasil
5. jika kosong maka akan ada warning untuk memberi value pada username dan password
-->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 

<head>
<title>Demo Login</title>
<style type="text/css">
<!--
.huruf {
color: #ffd700;
font-size: 14px;
font-weight: bold;
text-decoration: none;
}
.border1 {
margin: auto;
border: 2px solid red;
background: #4b0008;
margin-top:100px;
width: 300px;
height: 270px;
border-width: medium; }
.border2 {
height: auto;
background: #4b0008;
padding: 5px 40px 5px 40px;
}
body {
background-color: #e9967a;
}

-->
</style>
</head>

<?php 
    if($_POST){ 
		$user = $_POST['user']; //membuat variabel user
        $password = $_POST['password']; // membuat variabel password
    $error = array();// membuat variabel error sebagai array
        if(empty($user)){ // jika variabel user bernilai null / kosong
      $error['user'] = 'Silahkan isikan username anda'; // maka pesan error user akan muncul
        }
    if(empty($password)){ // jika variabel password kosong 
      $error['password'] = 'Silahkan isikan password anda'; // maka error password akan muncul
    }
    if(empty($error)){
            //prosess data
        }
    }
?>
<form name="form-name" method="post" action="">
<div class="border1">
<div class="border2">
<h3 align="center"><font color="yellow" size="10">LOGIN</font></h3>
<hr size="4" style="border-color: #c0c0c0;"/>
    <dl>
      <dt>User:</dt>
      <dd>
	  <!--membuat form input 'user' dan akan di transfer pada variabel user-->
    <input name="user" id="user" type="text" value="<?php echo isset($_POST['user']) ? $_POST['user'] : '';?>" />
    <div style="color:red"><?php echo isset($error['user']) ? $error['user'] : '';?></div>
      </dd>
	  <!--membuat form input 'password' dan akan di transfer pada variabel password-->
      <dt>Password:</dt>
      <dd>
    <input name="password" id="password" type="text" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '';?>" />
    <div style="color:red"><?php echo isset($error['password']) ? $error['password'] : '';?></div>
      </dd>
      <dd>
	  <!--membuat button submit dengan value submit-->>
    <input name="submit" id="submit" type="Submit" value="Submit" />
      </dd>
    </dl>
</form>

