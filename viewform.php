<?php 
include_once('dbconfig.php');
?>
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
      <li ><a href="logform1.php">Home</a></li>
      <li ><a href="viewform.php">Log Form Details</a></li>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<?php 
$sql = "SELECT * FROM `logdetails` WHERE date=CURDATE()";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { 
    while($row = mysqli_fetch_assoc($result)) {
    ?>
<div class="container">
        <h2>Work Report of Intern</h2>
        <form class="form-horizontal"  method="POST" action="task.php">
          <div class="form-group">
            <label class="control-label col-sm-2">Intern Name:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  value="<?php echo $row['name'];?>" readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Date Raised:</label>
            <div class="col-sm-10">          
              <input type="date" class="form-control" value="<?php echo $row['date'];?>"  name="Date">
            </div>
          </div>
          <div class="form-group">
                <label class="control-label col-sm-2">Work Report:</label>
                <div class="col-sm-10">          
                  <input type="text" class="form-control" required  value="<?php echo $row['workreport'];?>"  placeholder='Work Done Today' name="workreport">
                </div>
              </div>
              <div class="form-group">
            <label class="control-label col-sm-2">Time In:</label>
            <div class="col-sm-10">          
              <input type="time" class="form-control" required value="<?php echo $row['timein'];?>"  name="timein">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Time Out:</label>
            <div class="col-sm-10">          
              <input type="time" class="form-control" required value="<?php echo $row['timeout']; ?>"  name="timeout">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Remarks:</label>
            <div class="col-sm-10">          
              <input type="text" class="form-control" required placeholder="Remarks" required  name="remarks">
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
<?php } } ?>