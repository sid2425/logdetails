<!DOCTYPE html>
<html lang="en">
<head>
  <title>
      Home
  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">LOG-BOOK</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="logform.php">Home</a></li>
      <li ><a href="form.php">Log Form</a></li>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">

  <h3 style="text-align: center;"><img src="img/avatar-05.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">Welcome <span style="color: red;font-weight: bold;">Siddarth Thirthala</span>!</h3>
</div>
<?php 
if(isset($_GET['msg']))
{
  echo "<div class='alert alert-success'>
  <strong>Success!</strong>
  You Have succesfully added your log details.
</div>";
}?>
</body>
</html>
