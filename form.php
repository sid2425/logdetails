<!DOCTYPE html>
<html lang="en">
<head>
  <title>
      Log Details
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
        <h2>Log Details Form</h2>
        <form class="form-horizontal"  method="POST" action="action.php">
          <div class="form-group">
            <label class="control-label col-sm-2">Name:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  value="Thirthala Siddartha" name="name" readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Date Raised:</label>
            <div class="col-sm-10">          
              <input type="date" class="form-control" value="<?php echo date("Y-m-d"); ?>"  name="Date">
            </div>
          </div>
          <div class="form-group">
                <label class="control-label col-sm-2">Work Report:</label>
                <div class="col-sm-10">          
                  <input type="text" class="form-control" required  placeholder='Work Done Today' name="workreport">
                </div>
              </div>
              <div class="form-group">
            <label class="control-label col-sm-2">Time In:</label>
            <div class="col-sm-10">          
              <input type="time" class="form-control" required value="<?php date_default_timezone_set('Asia/Kolkata'); echo $date = date('H:i');?>"  name="timein">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Time Out:</label>
            <div class="col-sm-10">          
              <input type="time" class="form-control" required value="<?php echo $date = date('H:i'); ?>"  name="timeout">
            </div>
          </div>
          </div><br/>
          <div class="form-group">        
            <div align='center'>
              <button type="submit" name="submit" class="btn btn-danger">Submit</button>
            </div>
          </div>
        </form>
      </div>
</body>
</html>      