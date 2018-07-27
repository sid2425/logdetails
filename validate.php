<?php 
if(isset($_POST['submit']))
{$username=$_POST['Username'];
    $password=$_POST['Password'];
    if(($username=='Siddarth' || $username=='siddarth' || $username=='sid') && ($password=='sid2425'||$password=='sid'))
    {
        header('Location:logform.php');
    }
    else if(($username=='Likith' || $username=='likith' || $username=='admin') && ($password=='likith'||$password=='admin'))
    {
        header('Location:logform1.php');
    }
}
else 
{
    header('Location:index.html');
}
?>