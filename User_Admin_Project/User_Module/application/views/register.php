<html>
<head>
	<title>
		User Registeration
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

	     <h1>Registration</h1>
	     
	<form  action="<?php echo base_url('SaveUser')?>" method="post">

     <label for="firstname"><h4>First Name:</h4></label>
     <input type="text" name="first_name" id="firstname" size="35" pattern="[A-Za-z ]{0,15}" maxlength="15" autofocus required>

     <br><br><br>
     <label for="lastname"><h4>Last Name:</h4></label><input type="text" name="last_name" id="lastname" size="35" pattern="[A-Za-z ]{0,15}" maxlength="15" autofocus required>
     <br><br><br>
     <label for="eid"><h4>Email ID:</h4></label><input type="email" name="emailid" id="eid" size="35" pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" autofocus required>
     <br><br><br>
     <label for="pass"><h4>Password:</h4></label><input type="password" name="password" id="pass" size="35" pattern="[A-Za-z0-9 ]{0,8}" maxlength="8" autofocus required>
     <br><br><br>
     <span id='message'></span>
     
     <input type="submit" name="submit" id="sub" >&nbsp;&nbsp;&nbsp;
     <input type="reset" name="reset" id="reset">
     

	</form>
</body>
</html>