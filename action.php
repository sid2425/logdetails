<?php 
include_once('dbconfig.php');
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $date=$_POST['Date'];
  $workreport=$_POST['workreport'];
  $timein=$_POST['timein'];
  $timeout=$_POST['timeout'];
  //insert into database
  $sql = "INSERT INTO  logdetails (name,date,workreport,timein,timeout)
VALUES ('$name', '$date', '$workreport','$timein','$timeout')";

if (mysqli_query($conn, $sql)) {
   header('Location:logform.php?msg');
}
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>