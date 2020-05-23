<html>
<head>
	<title>
		User Login
	</title>
	<link rel="stylesheet" href="<?php echo base_url('css/register.css'); ?>">
	<style>
	  h1 {
        color: #B0B0B0;
        text-align: center;
        padding-top: 20px;
         }

    </style>
</head>
<body>
	     <h1>Login</h1>
	<form action="<?php echo base_url('FetchUser'); ?>" method="post">
     <label for="firstname"><h4>Name:</h4></label><input type="text" name="fullname" id="firstname" size="35" pattern="[A-Za-z]{0,10}" maxlength="10" autofocus required>
     <br><br><br>
     <label for="pass"><h4>Password:</h4></label><input type="password" name="password" id="pass" size="35" pattern="[A-Za-z0-9 ]{0,8}" maxlength="8" autofocus required>
     <br><br><br>
     
     <input type="submit" name="submit" id="sub">&nbsp;&nbsp;&nbsp;
     <input type="reset" name="reset" id="reset">
     

	</form>
</body>
</html>