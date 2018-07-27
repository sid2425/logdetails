<?php 
include_once('dbconfig.php');
if(isset($_POST['submit']))
{
    $date=$_POST['Date'];
    $remarks=$_POST['remarks'];
    $verified='Likith Raja Singh';
    $sql = "UPDATE logdetails SET remarks='$remarks',verifiedby='$verified' WHERE date='$date' ";
    if (mysqli_query($conn, $sql)) {
        header('Location:logform1.php?msg');
    } 
    else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    
}
?>