<form action="file:///C|/xampp/htdocs/?group=kalkulator_proses" method="post">
 <table>
 <tr>
 <h3>Program Kalkulator</h3>
 <td>Bilangan 1 = </td>
 <td><input type="text" name="bil1" /></td>
 </tr>
<tr>
 <td>Bilangan 2 = </td>
 <td><input type="text" name="bil2" /></td>
 </tr>
 <tr>
 <td colspan="2" align="center">
 <input type="submit" name="tambah" value=" + "/>
 <input type="submit" name="kurang" value=" - "/>
 <input type="submit" name="kali" value=" * "/>
 <input type="submit" name="bagi" value=" / "/>
 </td>
 </tr>
 </table>
 </form>
 <?php
 $bil1 = $_POST["bil1"];
 $bil2 = $_POST["bil2"];
if($bil1=="" && $bil2=="")
 {
 echo "silahkan mengisikan bilangan 1 dan bilangan 2";
 }
 else
 {
 if(isset($_POST["tambah"]))
 {
 $hasil = $bil1+$bil2;
 echo "hasil tambah adalah = $hasil";
  }
 else if(isset($_POST["kurang"]))
 {
 $hasil = $bil1-$bil2;
 echo "hasil kurang adalah = $hasil";
 }
 else if(isset($_POST["kali"]))
 {
 $hasil = $bil1*$bil2;
 echo "hasil kali adalah = $hasil";
 }
 else if(isset($_POST["bagi"]))
 {
 $hasil = $bil1/$bil2;
 echo "hasil bagi adalah = $hasil";
 }
 }
 ?>