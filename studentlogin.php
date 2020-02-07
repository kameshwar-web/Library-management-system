<section class="container">
  <?php

include("dbconnect/connection.php");

?>
<!DOCTYPE html>
<html>
<head>
  <title>Login page</title>
  <link rel="stylesheet" type="text/css" href="css/lib.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/mdb.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
    <link rel="stylesheet prefetch" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalized.min.css">
  <link rel="stylesheet prefetch" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.8/typicons.min.css">
</head>
<body>
  <style >
    .ebook1{
    background-image: url(image/abc.jpg);
    
    }
    body{
      background-image: url(image/abc1.jpg);
    }
    .ebook1{
  height: 350px;
  width: 100%;
  border: 2px solid red;

}
  </style>
<div class="ebook1">
  <h1 align=""> Login</h1>
  <br>
  <br>
<form action="" method="post" class="container">
  <table align="center" border="2" class="table table-light"> 

    <tr>
      <td align="center"><b style="font-size: 20px;"> Username</b></td>
      <td align="center"><input type="text" name="uname"></td>
    </tr>
    <tr>
      <td align="center"><b style="font-size: 20px;" >Password</b></td>
      <td align="center"><input type="password" name="pass"></td>
    
     <tr>
      <td colspan="2" align="center"><button name="login" class="btn-primary">Login</button></td>
    </tr>
</tr>
   
 </table>
</form> 
<?php
if (isset($_POST['login']))
 {

$user=$_POST['uname'];
$pass=$_POST['pass'];

$usql="SELECT * from `admin` where `user`='$user' AND `password`='$pass'";
$ures=mysql_query($usql);
$num=mysql_num_rows($ures);
$urow=mysql_fetch_array($ures);
if ($num) 
{
  header('location:product.php');
  session_start();
  $_SESSION['uname']=$urow[2];
  header('location:studentteacherbooks.php');
}
else
{
  echo "<h1 align= 'center'>"."wrong user or password "."</h1>";
}
}


?>

</div>
<!-- section footer -->

<SECTION>
  <div class="foot">
    <footer class="page-footer font-small unique-color-dark">

  <div style="background-color: #6351ce;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <div><button type="button" class="btn btn-pink"><a href="index.php"><i class="fas fa-plane pr-2" aria-hidden="true"></i>HOME</button></a>
</div>
          <h6 class="mb-0">Get connected with us on social networks!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">CORPORATE GROUP OF INSTUTE </h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p> YOUR WELCOME IN CORPORATE LIBRARY </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">COURCE</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">B.tech</a>
        </p>
        <p>
          <a href="#!">M.Tech</a>
        </p>
        <p>
          <a href="#!">Master of Business Administration</a>
        </p>
        <p>
          <a href="#!">Pharmacy </a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">BOOKS </a>
        </p>
        <p>
          <a href="#!">ENGINEERING</a>
        </p>
        <p>
          <a href="#!">MBA</a>
        </p>
        <p>
          <a href="#!">PHARMACY</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i>INDIA , MP , BHOPAL , HATHAIKHEDA </p>
        <p>
          <i class="fas fa-envelope mr-3"></i> corporate@123.gmail.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> +91 9123475897</p>
        <p>
          <i class="fas fa-print mr-3"></i> +91 9523474879 </p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">@  KAMESHWAR SAH
    <a href="https://mdbootstrap.com/education/bootstrap/">DEVELOPER AND DESIGNER</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
  </div>
</SECTION>

</body>
</html>
</section>