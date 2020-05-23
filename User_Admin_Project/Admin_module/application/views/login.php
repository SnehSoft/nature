<html>
<head>
	<title>
		Admin Login
	</title>
	<link rel="stylesheet" href="<?php echo base_url('css/login.css'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
	  h1 {
        color: #B0B0B0;
        text-align: center;
        padding-top: 20px;
         }

     @media only screen and (max-width:800px) {
  /* For tablets: */
  .main {
    width: 80%;
    padding: 0;
  }
  
}
@media only screen and (max-width:500px) {
  /* For mobile phones: */
  .main {
    width: 80%;
  }
}
<
    </style>
</head>
<body>
    <div class="main">
	     <h1>Login</h1>
	<form action="<?php echo base_url('FetchAdmin'); ?>" method="post">
     <label for="uname"><h4>Username:</h4></label><input type="text" name="username" id="uname" size="35" pattern="[A-Za-z]{0,10}" maxlength="10" autofocus required>
     <br><br><br>
     <label for="pass"><h4>Password:</h4></label><input type="password" name="password" id="pass" size="35" pattern="[A-Za-z0-9 ]{0,8}" maxlength="8" autofocus required>
     <br><br><br>
     
     <input type="submit" name="submit" id="sub">&nbsp;&nbsp;&nbsp;
     <input type="reset" name="reset" id="reset">
     

	</form>
</div>
</body>
</html>