<?php
session_start();

$login1=$_POST['login1'];
$password1=md5($_POST['password1']);

include("base.php");
$q="SELECT * FROM reg;";
$r=mysqli_query($a, $q) or die('error:'.mysqli_error($a));
$t=false;
While($n=mysqli_fetch_array($r)){
   if( $login1==$n['log'] and $password1==$n['pass']){        
      $_SESSION['ID'] = $n['id_client'];
     
      $t=true;
       
	   echo '<script>alert("Ты вошел на сайт")</script>
<meta http-equiv="Refresh" content="0; URL=profile.php">
';       
       exit;
    }   
      
}
if ($t==false)

	 echo '<script>alert("Не верный логин или пароль!")</script>
<meta http-equiv="Refresh" content="0; URL=index.php">
'; 

?>





