<?php
//start session
@session_start();

//number of items in the shopping cart
$count=0;

//retrieve the cart content


//check to see if a user if logged in
$login = '';
$name = '';
$role = 0;

if (isset($_SESSION['login'])){
  $login = $_SESSION['login'];
}

if (isset($_SESSION['name'])) {
  $name = $_SESSION['name'];
}

if (isset($_SESSION['role'])){
  $role = $_SESSION['role'];
}

if (isset($_SESSION['id'])) {
  $session_id = $_SESSION['id'];
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>
   Sj Online Institute
  </title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
 <style type="text/css">
  
 </style>
 
 <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>
<body>
  
    <nav class="navbar navbar-expand-lg bg-info bg-gradient navbar-light border-top border-bottom border-primary border-3 fw-bold">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="assets/img/logo.png" alt="sjlogo" height="60"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>

    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-primary align-items-center" aria-current="page" href="home.php">Home<i class="material-icons align-middle">home</i></a>
        </li>
         <li class="nav-item">
          <a class="nav-link active text-primary" href="aboutus.php">About Us<i class="material-icons align-middle">people</i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-primary" href="contactus.php">Contact Us<i class="material-icons align-middle">contacts</i></a>
        </li>
         <li class="nav-item">
          <a class="nav-link active text-primary" href="searchcourse.php">Our Courses<i class="material-icons align-middle">layers</i></a>
        </li>
       
      </ul>
     <div class="d-flex">
      <a href="userprofile.php" class="text-capitalize text-danger">Welcome, <?php print_r($name); ?>!</a>
      <a class="btn rounded-circle btn-outline-primary" type="button" href="login.php">Login<i class="material-icons align-middle">login</i></a>
       <a class="btn rounded-circle btn-primary" type="button" href="register1.php">SignUp<i class="material-icons align-middle">account_circle</i></a>
    </div>
    </div>

  </div>
</nav>
  
</div>

</body>
</html>