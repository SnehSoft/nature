<!DOCTYPE html>
<html>
<head>
	<title>Add Users</title>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	
    <style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   
   color: white;
   text-align: center;
}
</style>
</head>
<body style="background-color:#D0D0D0">
<nav class="navbar navbar-inverse">
<div class="container-fluid">
	<div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url('Home'); ?>">XYZ</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?php echo base_url('Home'); ?>">Home</a></li>
      <li class="active"><a href="<?php echo base_url('Add_Users'); ?>">Add Users</a></li>
      <li><a href="<?php echo base_url('Manage_Users'); ?>">Manage Users</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo base_url('Admin'); ?>"><span class="glyphicon glyphicon-log-in"></span> Close</a></li>
    </ul>
</div>
</nav>
<div class="container">
	<div class="well">Add Users</div>
<form class="form-horizontal" action="<?php echo base_url('SaveUser')?>" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="user_name" pattern="[A-Za-z ]{0,15}" maxlength="15" autofocus required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-4">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" autofocus required >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="address">Address:</label>
      <div class="col-sm-4">
        <textarea class="form-control" rows="5" id="address" placeholder="Enter address" name="address" pattern="[A-Za-z0-9 ]{0,99}" maxlength="100" autofocus required></textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="designation">Designation:</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" id="designation" placeholder="Enter designation" name="designation" pattern="[A-Za-z ]{0,20}" maxlength="20" autofocus required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="submit">Submit</button>
      </div>
    </div>
</form>
</div>
</body>
<div class="footer">
  <p>Copyright@2020</p>
</div>
</html>