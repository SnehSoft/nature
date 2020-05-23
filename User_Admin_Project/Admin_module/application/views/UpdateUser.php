<!DOCTYPE html>
<html>
<head>
	<title>Update Users</title>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	
</head>
<body style="background-color:#D0D0D0">
<nav class="navbar navbar-inverse">
<div class="container-fluid">
	<div class="navbar-header">
      <a class="navbar-brand" href="#">XYZ</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo base_url('Home'); ?>">Home</a></li>
      <li><a href="<?php echo base_url('Add_Users'); ?>">Add Users</a></li>
      <li><a href="<?php echo base_url('Manage_Users'); ?>">Manage Users</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
</div>
</nav>
<div class="container">
	<div class="well">Update User</div>
<form class="form-horizontal" action="<?php echo base_url('Update_User')?>" method="post">
  <?php 
      foreach($userdata as $udata)
      {

      
  ?>

    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-4">
        <input type="hidden" name="user_id" value="<?php echo $udata['user_id']; ?>">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="user_name" value="<?php echo $udata['user_name']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-4">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $udata['email']; ?>">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="address">Address:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" value="<?php echo $udata['address']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="designation">Designation:</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" id="designation" placeholder="Enter designation" name="designation" value="<?php echo $udata['designation']; ?>">
      </div>
    </div>
    <?php } ?>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="submit">Update</button>
      </div>
    </div>
  
</form>
</div>
</body>
</html>