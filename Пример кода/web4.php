<!DOCTYPE html>
<html>
<head>
 <meta  charset="utf-8">
<link rel="stylesheet" type="text/css" href="web4.css">
<title>�������� ��� ��������</title>
</head>
<body>
<?php
	
	$famil1=$_POST['famil1'];
	$name1=$_POST['name1'];
	$otchet1=$_POST['otchet1'];
	$cebe1=$_POST['cebe1'];
	$datpog1=$_POST['datpog1'];
	$lovepred1 = $_POST['lovepred1'];
	$name = $_POST['loveprepod1'];

$user = fopen('f2.txt', 'w');


	echo "
���� �������:  $famil1 </br></br>
���� ���:  $name1 </br></br>
���� ��������: $otchet1 </br></br>
������� � ����:  $cebe1 </br></br>
���� ��������: $datpog1 </br></br>
������� �������:  $lovepred1 
";
echo '<p>������� �������������: </p>';
if (!empty($_POST['loveprepod1']))
 {
  $loveprepod1 = $_POST['loveprepod1'];
  foreach($loveprepod1 as $index => $go)
   {
    echo $go."<br>";
   };
 };

fwrite($user,$famil1."|".$name1."|".$otchet1."|".$cebe1."|".$datpog1."|".$lovepred1);
foreach ($name as $loveprepod1 ){
fwrite($user, " | " .$loveprepod1);
}

fclose($user);
?>
</BODY>
</HTML>