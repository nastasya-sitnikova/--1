<?php
session_start();
include("base.php");
$q="SELECT * FROM reg;";
$r=mysqli_query($a, $q) or die('error:'.mysqli_error());
if($n=mysqli_fetch_array($r)){
if (isset($_SESSION['ID'])){
echo '
<ul>
<li><a title="����� � �������" href="exit.php">�����</a></li>
</ul>
';
}
else {
echo '
<ul>
<li><a title="����� ��� ������������������ �� �����" href="auth.php">�����/������������������</a></li>
</ul>
';
}
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>����������� � �����������</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

    <!-- ������� -->

<h2> ������ �� ����� �� ����</h2>

</body>
</html>