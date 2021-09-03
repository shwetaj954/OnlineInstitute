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
	
<br>

<div class="row-col-12">
	<div class="container">
	<div class="card" style="border:50px outset skyblue;">
		<p class="text-center"><b><u>S.J Online Instittute</u></b></p>
			<p class="text-center"></p>
		<h1 class="text-center Display-1 text-primary" style="text-shadow: 1px 1px black,0 0 5px blue,0 0 3px darkblue;" >Certificate <i class="text-danger">of</i> Participation</h1>
		
		<h6 class="text-center">This is to certify that</h6><hr>
		<h2 class="text-center"><strong><?php print_r($name); ?></strong></h2><hr>
		<h6 class="text-center">has partcipate the Our Institute</h6>
		<h2 class="text-center text-primary"  style="text-shadow: 1px 1px red,0 0 5px blue,0 0 3px darkblue;"><strong></strong></h2>
		<p class="text-center"><img src="assets/img/logo.png" class="img-fluid"></p>
		<div class="row">
			<div class="col-6 text-center"><hr>
				<strong class="text-primary">Start Month</strong><br>
					<b style="font-weight: 2px;font-size: 2rem"></b><br>
					<hr>
			</div>
				<div class="col-6 text-center">
					<hr>
					<strong class="text-primary">Signature</strong>
				<br>
					<b style="font-family: 'Brush Script MT';font-weight: 10px;font-size: 2rem">Shweta.j..</b>
					<hr>
				</div>
		</div>
	</div>
	</div>
</div><br>
</body>
</html>