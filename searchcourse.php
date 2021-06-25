<?php

$page_title = "Search for Institute";

require_once ('includes/header.php');
require_once('includes/forconn.php');
if(isset($_GET['course'])){
      
$name = $_GET['course'];

$query_str = "SELECT * FROM $tblcourse WHERE corname LIKE '%" .$name. "%' OR corcategorie LIKE '%" .$name. "%'";

//execut the query
$result = $conn->query($query_str);

//Handle selection errors
if (!$result)
 {
    $errno = $conn->errno;
    $errmsg = $conn->error;
    echo "Selection failed with: ($errno) $errmsg<br/>\n";
    $conn->close();
    exit;
} 
else
 { //display results in a table
    ?>
  <div class="container">
 <ul class="breadcrumb bg-light">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Our Course</li>
  </ul>
  <div class="card text-white">
    <img src="assets\img\full.jpg" class="card-img" height="130px">
    <div class="card-img-overlay">
      <h1 class="card-title text-center fs-1" style="margin:30px;">Our Courses</h1>
    </div>
  </div>
  
<form class="d-flex" action="<?=$_SERVER['PHP_SELF']?>" method="get" role="form">
        <div class="input-group">
          <span class="input-group-text"><i class="material-icons">search</i></span>
        <input class="form-control border-primary" type="text" placeholder="Search Courses" name="course" id="coursearch">
      
        <button class="btn btn-outline-primary border-primary" type="search">Search</button>
      </div>
      </form>
      <br>
</div>
     
  <?php 
      $num_rows = mysqli_num_rows($result);
      if ($num_rows == 0) 
      {
        echo "<p class='lead text-center'>No results found for <strong>". $name . "</strong>. Please search again.</p>";
      } else
       {
        //insert a row into the table for each row of data
       $i = 0;
      while ( $result_row = $result->fetch_assoc() ) :
      $i++;
      if ($i == 1) :
  ?>
  
  <div class="container">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-1 col-sm-12" style="width: 100%">
     <?php endif; ?>
   <div class="col">
  
    <div class="card h-100 border-primary" >
      <a href="courseapply.php?id=<?php echo $result_row['corid']?>" class="border-primary">
      <img src="assets/img/<?php echo $result_row['corimg'];?>" class="card-img-top" alt="Courses List" height="300" width="300"></a>
      <div class="card-body">
        <h5 class="card-title text-primary">Course Name:- <h3 class="text-center">
                  <?php
                  echo "<a href='courseapply.php?id=" . $result_row['corid'] . "'>", $result_row['corname'], "</a>";
                  ?>
                </h3></h5>
          <p class="card-text"><?php echo  $result_row['cordetail'];?>t</p>
          
          <ul class="list-group">
          <li class="list-group-item text-primary">Its stage:-<?php echo $result_row['corcategorie'];?></li>
          <li class="list-group-item text-primary">First Comes Date:-<?php echo  $result_row['cordate'];?></li>
          <li class="list-group-item text-primary">Charges:-<?php echo  $result_row['corcharge'];?></li>
          <li class="list-group-item text-primary">Duration for Complete:-<?php echo  $result_row['corduration'];?></li>
          
        
        </ul>
      </div>
    </div>
  </div>
<?php if ($i == 3) : ?>
</div></div>
    <?php $i=0; endif; endwhile; ?>
     <?php
    }
    $result->close();
}

 #for  All couurse List 

 }else{
      $name = "";
 
    
//select statement
$query_str = "SELECT * FROM $tblcourse WHERE corname LIKE '%" .$name. "%' OR corcategorie LIKE '%" .$name. "%'";

//execut the query
$result = $conn->query($query_str);

//Handle selection errors
if (!$result)
 {
    $errno = $conn->errno;
    $errmsg = $conn->error;
    echo "Selection failed with: ($errno) $errmsg<br/>\n";
    $conn->close();
    exit;
} 
else
 { //display results in a table
    ?>
  <div class="container">
 <ul class="breadcrumb bg-light">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Our Course</li>
  </ul>
  <div class="card text-white">
    <img src="assets\img\full.jpg" class="card-img" height="130px">
    <div class="card-img-overlay">
      <h1 class="card-title text-center fs-1" style="margin:30px;">Our Courses</h1>
    </div>
  </div>
  
<form class="d-flex" action="<?=$_SERVER['PHP_SELF']?>" method="get" role="form">
        <div class="input-group">
          <span class="input-group-text"><i class="material-icons">search</i></span>
        <input class="form-control border-primary" type="text" placeholder="Search Courses" name="course" id="coursearch">
      
        <button class="btn btn-outline-primary border-primary" type="search">Search</button>
      </div>
      </form>
      <br>
</div>
     
  <?php 
      $num_rows = mysqli_num_rows($result);
      if ($num_rows == 0) 
      {
        echo "<p class='lead text-center'>No results found for <strong>". $name . "</strong>. Please search again.</p>";
      } else
       {
        //insert a row into the table for each row of data
   		 $i = 0;
    	while ( $result_row = $result->fetch_assoc() ) :
      $i++;
      if ($i == 1) :
  ?>
  
  <div class="container">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-1 col-sm-12" style="width: 100%">
     <?php endif; ?>
   <div class="col">
  
    <div class="card h-100 border-primary" >
      <a href="courseapply.php?id=<?php echo $result_row['corid']?>" class="border-primary">
      <img src="assets/img/<?php echo $result_row['corimg'];?>" class="card-img-top" alt="Courses List" height="300" width="300"></a>
      <div class="card-body">
        <h5 class="card-title text-primary">Course Name:- <h3 class="text-center">
                  <?php
                  echo "<a href='courseapply.php?id=" . $result_row['corid'] . "'>", $result_row['corname'], "</a>";
                  ?>
                </h3></h5>
          <p class="card-text"><?php echo  $result_row['cordetail'];?>t</p>
          
          <ul class="list-group">
          <li class="list-group-item text-primary">Its stage:-<?php echo $result_row['corcategorie'];?></li>
          <li class="list-group-item text-primary">First Comes Date:-<?php echo  $result_row['cordate'];?></li>
          <li class="list-group-item text-primary">Charges:-<?php echo  $result_row['corcharge'];?></li>
          <li class="list-group-item text-primary">Duration for Complete:-<?php echo  $result_row['corduration'];?></li>
          
        
        </ul>
      </div>
    </div>
  </div>
<?php if ($i == 3) : ?>
</div></div>
    <?php $i=0; endif; endwhile; ?>
     <?php
    }
    $result->close();
}

    // clean up resultsets when we're done with them!
      
  
  
  // close the connection.
  $conn->close();
        
	
	}
	  ?>