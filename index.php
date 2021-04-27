<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>�����/������������������ �� �����</title>
	<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css'>
	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
	<link href="css/style-reg.css" rel="stylesheet" type="text/css" />

</head>

<body>



<div class="box">
  <nav id="tabs" class="tabs">
    <a id="tabLogin" class="iconLogin active blueBox" title="�����"> �����</a>
    <a id="tabRegister" class="iconRegister greenBox" title="�����������"> �����������</a>
  </nav>

  <div class="containerWrapper">

    <!-- login container -->
    <div id="containerLogin" class="tabContainer active">
      <form action="auth.php" method="POST">
      <h2 class="loginTitle">�����������</h2>
      <div class="loginContent">
        <div class="inputWrapper">
          <input type="text" name="login1" placeholder="�����" required="" />
        </div>
        <div class="inputWrapper">
          <input type="password" name="password1" placeholder="������" required=""/>
        </div>
      </div>
      <button class="blueBox"><span class="iconLogin"></span> �����</button>
      <div class="clear"></div>
    </form>
    </div>

    <!-- register container -->
    <div id="containerRegister" class="tabContainer">
      <form action="register.php" method="POST">
        <h2 class="loginTitle">�����������</h2>
        <div class="registerContent">
          <div class="inputWrapper">
            <input type="text" name="log" placeholder="�����" required="" />
          </div>
          <div class="inputWrapper">
            <input type="password" name="pas" placeholder="������" required=""/>
          </div>   
          <div class="inputWrapper">
            <input type="password" name="pas2" placeholder="������������� ������" required=""/>
          </div>		  
        </div>
        <button class="greenBox"><span class="iconRegister"></span> ������������������</button>
        <div class="clear"></div>
      </form>
    </div>
    <div class="clear"></div>


  </div>
</div>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script src="js/index.js"></script>
</body>
</html>