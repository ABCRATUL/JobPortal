<?php
    session_start();
require("connection.php");
if(!isset($_SESSION['log']))
{
if(isset($_SESSION['expire'])){
$x=time();
if($x>$_SESSION['expire'])
    session_destroy();
}
?>

<html>
    <head>
        <title>Sign-up</title>
        <link rel="stylesheet" href="./style/style.css" type="text/css">
        <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">

        <!-- jQuery library -->
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

          <!-- Compiled and minified JavaScript -->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <style type="text/css">
          body{
                  background-image: url("bg.jpg");
                  
              }

          .nav-wrapper {
                background-color: #DAA520 !important;
            }
        </style>
    </head>
    <body>
        <nav>
             
                 <a href="#"  style="margin-left: 650px"><font size="5">Internships</font></a>
                 <ul id="nav-mobile" class="right hide-on-med-and-down">
                     <li><a href="sign-up.php">Sign-up</a></li>
                     <li><a href="login.php">Login</a></li>
                     <li><a href="home.php">Home</a></li>
                 </ul>
            
        </nav>
        <?php
        if(isset($_SESSION['fname']))
        {
            
        ?>
        <div class="row">
            <div class="container">
                <h3>Thank you for signing up <?php print $_SESSION['fname'] ?>. Please Login</h3>
            </div>
        </div>
        <?php
        }
        ?>
        <br>
        
    </body>
</html>
<?php
}
else
{
    print "error";
}
?>