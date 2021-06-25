<?php
require_once 'includes/header.php';
require_once('includes/forconn.php');
if(isset($_POST['update']))
{

  $upnm = $_POST['upname'];
  $uppass = $_POST['uppassword'];

//update statement
$sql2 = "UPDATE $usertable SET username='$upnm', userpassword='$uppass' WHERE user_id=9";
if($conn->query($sql2)===TRUE)
{
  echo"Your  Update Successfully";
}
else
{
  echo"Not Updated.. " . $conn->error;
}
}
?>
<script type="text/javascript">
    alert("Welcome to the Admin Panel");
  </script>
<div class="container text-start" style="background-image: url('assets/img/11.jpg');">
	   <ul class="breadcrumb bg-light">
    <li class="breadcrumb-item active"><a href="admin.php">Admin Panel</a></li>
    <li class="breadcrumb-item active" aria-current="page">Show All Data</li>
     <li class="breadcrumb-item active" aria-current="page"></li>
  </ul>
			<h1 class="text-center text-primary" style="text-shadow: 2px 3px white;">Welcome To The Admin Panel</h1>  
            
  


     <?php
             if(isset($_SESSION['id'])){
               $sql1 = "SELECT * FROM $usertable WHERE user_id=" . $_SESSION['id'];
  

                $result = $conn->query($sql1);

  
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {

            ?>  
   <form class="row align-items-center form" role="form" method="post">
        
        
        <div class=" col-sm-12 mt-4">
          <label class="text-white" for="">Your Email ID;- <?php echo $row['useremail']; ?> </label><br>
           <label class="text-white" for="upname">Name </label>
          <div class="input-group">
            <div class="input-group-text"><i class="material-icons text-primary">person</i></div>
            <input type="text" name="upname" id="upname" class="form-control" placeholder="Name" required value="<?php echo $row['username']; ?>">
          </div>
        </div>
        <div class=" col-sm-12 mt-4">
          <label class="text-white" for="uppassword">Password</label>
          <div class="input-group">
            <div class="input-group-text text-white"><i class="material-icons text-primary">password</i></div>
  <input type="Password" name="uppassword" id="uppassword" class="form-control" placeholder="Password" required value="<?php echo $row['userpassword']; ?>">
          
              
          </div>
          <div class="text-center">
  <button type="submit" class="btn btn-primary " name="update">UPDATE</button></div>
   <div class="text-start">
 <a href="logout.php" class="btn btn-danger border-primary border-3 rounded-circle">LogOut</a></div>
          </div>
      
     
          
            <br>
              <?php
      }

     }
    else{
    echo "0 results";
  }
    ?>
                        
         
            
      </form>
      <br><br>
  </div><br>
       
    

	<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Students Details
      </button>
    </h2>

    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="table-responsive"><table class="table">  <thead>
              <tr>
     
       <th scope="col">user_id</th>
      <th scope="col">username</th>
      <th scope="col">useremail</th>
      <th scope="col">userphone</th>
      <th scope="col">useraddress</th>
      <th scope="col">userdob</th>
      <th scope="col">userpassword</th>
      <th scope="col">role</th>
      <th scope="col">userimg</th>
       <th scope="col">Update</th>
        <th scope="col">Delete</th>
    </tr>

         <form class="form-control" role="form" action="admininsertdata.php" method="GET">
            <tr>
   
       <th scope="col"></th>
      <th scope="col"><input type="text" name="usanm2" class="form-control"></th>
      <th scope="col"><input type="email" name="usaemail2" class="form-control"></th>
      <th scope="col"><input type="text" name="usaphone2" class="form-control"></th>
      <th scope="col"><input type="text" name="usaaddress2" class="form-control"></th>
      <th scope="col"><input type="date" name="usadob2" class="form-control"></th>
      <th scope="col"><input type="text" name="usapassword2" class="form-control"></th>
      <th scope="col"><input type="text" name="usarole2" class="form-control"></th>
      <th scope="col"><input type="file" name="usaimg2" class="form-control"></th>
       <th scope="col"><BUTTON type="submit" name="userinsert1" class="btn-primary btn">INSERT NEW</BUTTON></th>
      
    </tr></form>
          
            <?php

               $sql1 = "SELECT * FROM $usertable";
  

                $result = $conn->query($sql1);

  
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {

            ?>  
 <form role="form" action="admindelete.php?" method="GET" class="form-control">
            <tr>
   
     <th scope="col"><input type="text" name="useraid1" class="form-control" readonly placeholder="Password" required value="<?php echo $row['user_id'];?>"></th>
      <th scope="col"><input type="text" name="usanm" class="form-control" value="<?php echo $row['username'];?>"></th>
      <th scope="col"><input type="email" name="usaemail" class="form-control" value="<?php echo $row['useremail'];?>"></th>
      <th scope="col"><input type="text" name="usaphone" class="form-control" value="<?php echo $row['userphone'];?>"></th>
      <th scope="col"><input type="text" name="usaaddress" class="form-control" value="<?php echo $row['useraddress']?>"></th>
      <th scope="col"><input type="date" name="usadob" class="form-control" value="<?php echo $row['userdob'];?>"></th>
      <th scope="col"><input type="text" name="usapassword" class="form-control" value="<?php echo $row['userpassword'];?>"></th>
      <th scope="col"><input type="text" name="usarole" class="form-control" value="<?php echo $row['role'];?>"></th>
      <th scope="col"><input type="file" name="usaimg" class="form-control" value="<?php echo $row['userimg'];?>"></th>
          <th scope="col"><BUTTON type="submit" name="useraupdate1" class="btn-primary btn">UPDATE</BUTTON></th>
         <th scope="col"><BUTTON type="submit" name="useradelete1" class="btn-primary btn">DELETE</BUTTON></th>
      
    </tr></form>
   
<?php
      }

    }
    else{
    echo "0 results";
  }
    ?>

  </div>
  </thead>
  

  </table>
    </div></div></div></div>
		
	  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Employe Details
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
            <div class="table-responsive"><table class="table">  <thead>


            <tr>
      <th scope="col">Empid</th>
      <th scope="col">Empname</th>
      <th scope="col">Empemail</th>
      <th scope="col">Empjoindate</th>
        <th scope="col">EmpPassword</th>
      <th scope="col">Empaddress</th>
      <th scope="col">EmpPhone</th>
      <th scope="col">Empdob</th>
      <th scope="col">Empfield</th>
      <th scope="col">Empsubject</th>
       <th scope="col">Emp Alot</th>
        <th scope="col">Update</th>
        <th scope="col">Delete</th>
    </tr>
        <form class="form-control" role="form" action="admininsertdata.php" method="GET">
            <tr>
   
       <th scope="col"></th>
      <th scope="col"><input type="text" name="empanm" class="form-control"></th>
      <th scope="col"><input type="email" name="empaemail" class="form-control"></th>
       <th scope="col"><input type="date" name="empajoindate" class="form-control"></th>
        <th scope="col"><input type="text" name="emppassword" class="form-control"></th>
        <th scope="col"><input type="text" name="empaaddress" class="form-control"></th>
      <th scope="col"><input type="text" name="empaphone" class="form-control"></th>
      <th scope="col"><input type="date" name="empadob" class="form-control"></th>
     <th scope="col"><input type="text" name="empafield" class="form-control"></th>
      <th scope="col"><input type="text" name="empasubject" class="form-control"></th>
      <th scope="col"><input type="text" name="empaalot" class="form-control"></th>
      <th scope="col"><BUTTON type="submit" name="empainsert" class="form-control btn-danger btn">Insert Data</BUTTON></th>
        <th scope="col"></th>
    </tr></form>
          
            <?php

               $sql1 = "SELECT * FROM $tblemploye";
  

                $result = $conn->query($sql1);

  
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {

            ?>  
 
<form role="form" action="admindelete.php?" method="GET" class="form-control">
    <tr>
        <th scope="col"><input type="text" readonly name="empaid1" class="form-control" value="<?php echo $row['empid'];?>"></th>
      <th scope="col"><input type="text" name="empanm1" class="form-control" value="<?php echo $row['empname'];?>"></th>
      <th scope="col"><input type="email" name="empaemail1" class="form-control" value="<?php echo $row['empemail'];?>" ></th>
       <th scope="col"><input type="date" name="empajoindate1" class="form-control" value="<?php echo $row['empjoiningdate'];?>"></th>
        <th scope="col"><input type="text" name="emppassword1" class="form-control" value="<?php echo $row['emppassword']?>"></th>
        <th scope="col"><input type="text" name="empaaddress1" class="form-control" value="<?php echo $row['empaddress'];?>"></th>
      <th scope="col"><input type="text" name="empaphone1" class="form-control" value="<?php echo $row['empcellphone'];?>"></th>
      <th scope="col"><input type="date" name="empadob1" class="form-control"  value="<?php echo $row['empdob'];?>"></th>
     <th scope="col"><input type="text" name="empafield1" class="form-control" value="<?php echo $row['empfield'];?>"></th>
      <th scope="col"><input type="text" name="empasubject1" class="form-control" value="<?php echo $row['empsubject'];?>"></th>
      <th scope="col"><input type="text" name="empaalot1" class="form-control" value="<?php echo $row['empalot'];?>"></th>
  
      <th scope="col"><BUTTON type="submit" name="empaupdate1" class="btn-primary btn">UPDATE</BUTTON></th>
         <th scope="col"><BUTTON type="submit" name="empadelete" class="btn-primary btn">DELETE</BUTTON></th>
    </tr>
</form>
<?php
      }

    }
    else{
    echo "0 results";
  }
    ?>

  </div>
  </thead>
  

  </table>
    </div></div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Our Subject Details
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
                  <div class="table-responsive"><table class="table">  <thead>
            <tr>
      <th scope="col">Corid</th>
      <th scope="col">Cor Categorie</th>
      <th scope="col">CourseName</th>
      <th scope="col">Course Details</th>
        <th scope="col">CoursePhoto</th>
      <th scope="col">CourseYear</th>
      <th scope="col">CourseCharge</th>
      <th scope="col">CourseDuration</th>
     
       <th scope="col">Update</th>
        <th scope="col">Delete</th>
    </tr>
      <form class="form-control" role="form" action="admininsertdata.php" method="GET">
            <tr>
   
       <th scope="col">Insert New Row</th>
        <th scope="col"><input type="text" name="coracategorie" class="form-control"></th>
      <th scope="col"><input type="text" name="coranm" class="form-control"></th>
       <th scope="col"><textarea type="text" name="coradetail" class="form-control"></textarea></th>
        <th scope="col"><input type="file" name="coraphoto" class="form-control"></th>
        <th scope="col"><input type="date" name="corayear" class="form-control"></th>
      <th scope="col"><input type="text" name="coracharge" class="form-control"></th>
      <th scope="col"><input type="text" name="coraduration" class="form-control"></th>
       <th scope="col"><BUTTON type="submit" name="corainsert" class="btn-danger btn">Insert Data</BUTTON></th>
       
    </tr></form>
            <?php

               $sql1 = "SELECT * FROM $tblcourse";
  

                $result = $conn->query($sql1);

  
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {

            ?>  
 
  <form class="form-control" role="form" action="admindelete.php" method="GET">
            <tr>
          <th scope="col"><input type="text" readonly name="coraid" class="form-control" value="<?php echo $row['corid'];?>"></th>
        <th scope="col"><input type="text" name="coracategorie" class="form-control" value="<?php echo $row['corcategorie'];?>"></th>
      <th scope="col"><input type="text" name="coranm" class="form-control" value="<?php echo $row['corname'];?>"></th>
       <th scope="col"><textarea type="text" name="coradetail" class="form-control"><?php echo $row['cordetail'];?></textarea></th>
        <th scope="col"><input type="file" name="coraphoto" class="form-control" value="<?php echo $row['corimg']?>"></th>
        <th scope="col"><input type="date" name="corayear" class="form-control" value="<?php echo $row['cordate'];?>"></th>
      <th scope="col"><input type="text" name="coracharge" class="form-control" value="<?php echo $row['corcharge'];?>"></th>
      <th scope="col"><input type="text" name="coraduration" class="form-control" value="<?php echo $row['corduration'];?>"></th>
       <th scope="col"><BUTTON type="submit" name="coraupdate2" class="btn-primary btn">UPDATE</BUTTON></th>
       <th scope="col"><BUTTON type="submit" name="coradelete1" class="btn-primary btn">DELETE</BUTTON></th>
    </tr></form>
  

<?php
      }

    }
    else{
    echo "0 results";
  }
    ?>

  </div>
  </thead>
  

  </table>
    </div>
  </div>
      </div>
    </div>
  </div>
   <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
        User Contact Query
      </button>
    </h2>
    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="table-responsive">
  <table class="table">  <thead>
         <tr>
      <th scope="col">Query No</th>
      <th scope="col">User Email</th>
      <th scope="col">User Query</th>
      <th scope="col">User Role</th>
      <th scope="col">User Name</th>
    </tr>
      
    <?php

  $sql1 = "SELECT * FROM $tblcontactuser";
  

  $result = $conn->query($sql1);

  
   if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {

?>  
<form role="form" action="admindelete.php" method="GET" class="form-control">
            <tr>
   
     <th scope="col"><input type="text" name="conaid1" readonly class="form-control" required value="<?php echo $row['id'];?>"></th>
      <th scope="col"><input type="text" name="conemail" class="form-control" value="<?php echo $row['useremail'];?>"></th>
      <th scope="col"><input type="text" name="conaquery" class="form-control" value="<?php echo $row['userquery'];?>"></th>
      <th scope="col"><input type="text" name="conrole" class="form-control" value="<?php echo $row['role'];?>"></th>
      <th scope="col"><input type="text" name="conname" class="form-control" value="<?php echo $row['username'];?>"></th>
       
      <th scope="col"><BUTTON type="submit" name="conadelete1" class="btn-primary btn">DELETE</BUTTON></th>
      
    </tr></form>
  

<?php
      }

    }
    else{
    echo "0 results";
  }
    ?>

  </div>
  </thead>
  

  </table>
      </div>
    </div>
  </div>
      </div>
    </div>
  </div>
   <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapseThree">
        Our Batch Details
      </button>
    </h2>
    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <div class="table-responsive">
  <table class="table">  <thead>
         <tr>
      <th scope="col">Course Id</th>
      <th scope="col">User Id</th>
      <th scope="col">Course Date</th>
      <th scope="col">Course Duration</th>
      <th scope="col">Course Charges</th>
       <th scope="col">Trainer Name</th>
    </tr>
     
    <?php

  $sql1 = "SELECT * FROM $tblapplycourse";
  

  $result = $conn->query($sql1);

  
   if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {

?>  
    <form class="form-control" role="form" action="admindelete.php" method="GET">
            <tr>
       
        <th scope="col"><input type="text" readonly name="coraid3" class="form-control" value="<?php echo $row['corid'];?>"></th>
      <th scope="col"><input type="text" name="useraid3" class="form-control" value="<?php echo $row['user_id'];?>"></th>
       <th scope="col"><input type="text" name="coradate3" class="form-control" value="<?php echo $row['cordate'];?>"></th>
        <th scope="col"><input type="text" name="coraduration3" class="form-control" value="<?php echo $row['corduration'];?>"></th>
        <th scope="col"><input type="text" name="coracharege3" class="form-control" value="<?php echo $row['corcharges'];?>"></th>
        <th scope="col"><input type="text" name="coratrainer3" class="form-control" value="<?php echo $row['trainer'];?>"></th>
          <th scope="col"><BUTTON type="submit" name="applyaupdate" class="btn-primary btn">UPDATE</BUTTON></th>
       <th scope="col"><BUTTON type="submit" name="coradelete2" class="btn-primary btn">DELETE</BUTTON></th>
    
    </tr></form>
    

<?php
      }

    }
    else{
    echo "0 results";
  }
    ?>

  </div>
  </thead>
  

  </table>
      </div>
    </div>
  </div>
   <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
        Our E-Libraries
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <h1 class="text-center text-primary">Your Class Link Here..</h1><br>
<div class="table-responsive">
  <table class="table">  <thead>
         <tr>
      <th scope="col">SR.No</th>
      <th scope="col">Course Name</th>
      <th scope="col">Course Link</th>
      <th scope="col">Social Shide</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
      <form class="form-control" role="form" action="admininsertdata.php" method="GET">
            <tr>
   
       <th scope="col"></th>
        <th scope="col"><input type="text" name="clasanm" class="form-control"></th>
      <th scope="col"><input type="text" name="classalink" class="form-control"></th>
       <th scope="col"><input type="text" name="classshide" class="form-control"></th>
       <th scope="col"><BUTTON type="submit" name="opencor1" class="btn-danger text-light btn">Insert Data</BUTTON></th>
    </tr></form>
    <?php

  $sql1 = "SELECT * FROM $tblclasslink";
  

  $result = $conn->query($sql1);

  
   if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {

?>   
 <form class="form-control" role="form" action="admindelete.php" method="GET">
            <tr>
   
       <th scope="col"><input type="text" readonly name="clasaid" class="form-control" value="<?php echo $row['clsid'];?>"></th>
        <th scope="col"><input type="text" name="clasanm2" class="form-control" value="<?php echo $row['clsname'];?>"></th>
      <th scope="col"><input type="text" name="classalink2" class="form-control" value="<?php echo $row['clslink'];?>"></th>
       <th scope="col"><input type="text" name="classshide2" class="form-control" value="<?php echo $row['place'];?>"></th>
       <th scope="col"><BUTTON type="submit" name="openupdate2" class="btn-primary text-light btn">UPDATE</BUTTON></th>
        <th scope="col"><BUTTON type="submit" name="opendelete2" class="btn-primary text-light btn">DELETE</BUTTON></th>
    </tr></form>


<?php
      }

    }
    else{
    echo "0 results";
  }
}
else{
  echo "Something Wrong";
  header( "Refresh:1; url=login.php", true, 303);
}
    ?>

  </div>
  </thead>
  

  </table>  </div>
    </div>
  </div>
</div>
  