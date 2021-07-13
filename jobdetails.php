<?php
require("connection.php");
session_start();
if(isset($_SESSION['log']))
{
    
if(isset($_GET['id']))
{
    $n=$_SESSION['fn'];
    $sql1="select * from js where fname='$n'";
    $res1=mysqli_query($conn,$sql1);
    $row1=mysqli_fetch_array($res1,MYSQLI_ASSOC);
    $id1=$row1['id'];
    $sql1="select * from jsdetail where id='$id1'";
    $res1=mysqli_query($conn,$sql1);
    $row1=mysqli_fetch_array($res1,MYSQLI_ASSOC);
    $interest_candidate=$row1['interest'];
    //echo $interest_candidate;
    //echo $id1;
    $id=$_GET['id'];
    $sql="select * from jobs where id='$id' and interest='$interest_candidate'";
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
    $emp=$row['employer'];
    $det=$row['details'];
    $name=$row['name'];
    $company=$row['company'];
    $interest=$row['interest'];
    $salary=$row['salary'];
    $empid=$row['emp_id'];
    $sql="select * from empdetail where id='$empid'";
    $res=mysqli_query($conn,$sql);
    $row2=mysqli_fetch_array($res,MYSQLI_ASSOC);
    $img=$row2['comp_image'];
}
else
{
    print "Please follow the procedure";
}

?>

<html>
    <head>
        <title>Job details</title>
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
            .nav-wrapper {
                background-color: #DAA520 !important;
            }
        </style>
    </head>
    <body>
        <nav>
             
                
                 <ul id="nav-mobile" class="right hide-on-med-and-down">
                     <li><a href="weljs.php">Go back</a></li>
                     <li><a href="signout.php">Logout</a></li>
                     <li><a href="profile.php">Profile</a></li>
                 </ul>
           
        </nav>
        <div class="row">
            <div class="container">
                <br>
                <h4>Please read the details carefully and update your profile before applying</h4>
                <br>
                <h5>The job details-</h5>
				<p>Need a skilled Web Developer proficient in HTML,CSS,Javascript with Php as backend as well as Magento front end 
                <br>
                <h6><b>Offered by</b></h6>
				<p>Technoplus India private limited</p>
                <img class="materialboxed" width="200" src="<?php print $img; ?>">
                <br>
                <h6><b>Job title</b><p>Web Developer</h6>
                <p><?php print $name; ?></p>
                <br>
                <h6><b>Company</b><p>Technoplus India private limited</p></h6>
				
                <p><?php print $company; ?></p>
                <br>
                
                <br>
                <h6><b>Salary</b><p>Rs 15000</p></h6>
                <p><?php print $salary; ?></p>
                <br>
                <h6><b>Employer name</b></h6>
                <p><?php print $emp; ?></p>
                <br>
                <h6><b>Job Domain</b></h6>
                <p><?php print $interest; ?></p>
                <br>
                <a href="apply.php?jobid=<?php print $id ?>" class="btn waves-effect waves-light">Apply for Job</a>
            </div>
        </div>
        <script>
            $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
        </script>
    </body>
</html>
<?php
}
else
    print "error";
    ?>