<html >
                                    <head>
                                     <meta charset="UTF-8">
                                     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
                                   
                                     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
                                     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
                                     
                                     <title>Login page</title>
                                     
                                   </head>
                                   <body><?php
                                   if(isset($_GET['logout']))
{
  echo "<div class='alert alert-success'>
  <strong>Success!</strong>
  You Have succesfully logged out.
</div>";
}?>
                                     <div class="container">
                                       <h1></h1>
                                       
                                       
                                       <form id="login_form"  action="validate.php"  method="post">
                                       
                                           <h2>Enter the Credentials</h2>
                                           <div class="form-group">
                                           <label for="username">Username</label>
                                           <input type="username" class="form-control" id="username" name="Username" required placeholder="Username">
                                         </div>
                                         <div class="form-group">
                                           <label for="Password">Password</label>
                                           <input type="password" class="form-control" id="password" name="Password" required placeholder="Password">
                                         </div>
                                       <div class="form-group">
                                         <input type="submit" name="submit" class="submit btn btn-success" value="Submit" id="submit"  />
                                         </div>
                                           
                                       </form>
                                   
                                   
                                       
                                     </div>
 

                                   </body>
                                   </html>