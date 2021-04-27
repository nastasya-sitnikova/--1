<?php
session_start();
error_reporting(0);
$login=$_POST['log'];
$password=$_POST['pas'];
$password2=$_POST['pas2'];

include("base.php");
$q="SELECT * FROM reg;";
$r=mysqli_query($a, $q) or die('error:'.mysqli_error());
$t=true;
$m=true;
$p=true;
while($n=mysqli_fetch_array($r)){
if( $login==$n['log']){
   $t=false;
   echo 'Ћогин уже используетс€ другим пользователем';
   exit(); 
}
if( $password==$n['pass']){
   $t=false;
   echo 'Password уже используетс€ другим пользователем';
   exit(); 
}
}
	if($password == $password2 )
	  {
if ($t==true )
{

		 $password = md5($password);
$w="INSERT INTO reg(log, pass)VALUES('$login', '$password');";

$r=mysqli_query($a, $w);
echo '<script>alert("–егистраци€ прошла успешно, можете јвторизоватьс€ на сайте")</script>
<meta http-equiv="Refresh" content="0; URL=index.php">
';
}
	  }
	  	  else 
	  {
		echo '<script>alert("ѕовторите пароль")</script>
<meta http-equiv="Refresh" content="0; URL=index.php">
';
exit();
	  }


?>