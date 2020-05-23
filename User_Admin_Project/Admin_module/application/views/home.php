<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
      <li class="active"><a href="<?php echo base_url('Home'); ?>">Home</a></li>
      <li><a href="<?php echo base_url('Add_Users'); ?>">Add Users</a></li>
      <li><a href="<?php echo base_url('Manage_Users'); ?>">Manage Users</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo base_url('Admin'); ?>"><span class="glyphicon glyphicon-log-in"></span> Close</a></li>
    </ul>

</div>

</nav>
<div class="container">
	<img class="img-responsive" src="s.jpg" alt="picture">
</div>
</body>
<div class="footer">
  <p>Copyright@2020</p>
</div>
</html>