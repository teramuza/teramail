<?php session_start();
if(session_destroy()){ ?>
<html>
<head>
<title>Login - Arsip Surat Fobtera</title>
<link href="assets/css/login.css" rel="stylesheet" type="text/css">
</head>
<body>
<form name="formlogin" class="login-form" action="include/login.php" method="post">
	<p class="login-text">
	<span class="fa-stack fa-lg">
	  <i class="fa fa-circle fa-stack-2x"></i>
	  <i class="fa fa-lock fa-stack-1x"></i>
	 </span><br/><br/>
	 Arsip Surat WebTech Fobtera
	</p>
	<input type="text" class="login-username" autofocus="true" required="true" placeholder="Username" name="username"/>
	<input type="password" class="login-password" required="true" placeholder="Password" name="password"/>
	<input type="submit" name="login" value="Login" class="login-submit" />
</form>

<div class="underlay-photo"></div>
<div class="underlay-black"></div>

<div class="footer">Copyright &copy; 2018 PT Web Technology Fobtera Indonesia. Design By Teuku Raja</div>
</body>
</html>
<?php } ?>