<?php
error_reporting(0);
include("../connection/connect.php");
$sql = "DELETE FROM detail WHERE user_id='$_GET[del]'";                //query to delete by 'id' which get from while loop
mysqli_query($db,$sql);
if(!empty($_POST["logout"]))   //when user press logout button!
	{
	    $_SESSION["user_id"] = "";    //empty the value of user_id variable
	 session_destroy();                //distroyed the session
	    header('location:index.php');  // after distroy redirected user to index page
	}




?>
<html >
<head>
<title>Admin</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<!-- Header -->
<div id="header">
  <div class="shell">
    <!-- Logo + Top Nav -->
    <div id="top">
        <h1><a href="#">Administrator</a></h1>
      <div id="top-navigation"> Welcome <a href="#"><strong>Administrator</strong></a> |<form action="" style='float:right;' method="post"><input type="submit" name="logout" value="Logout" /></form> </div>
    </div>
    <!-- End Logo + Top Nav -->
    <!-- Main Nav -->
    <div id="navigation">
      <ul>
        <li><a href="dashboard.php" ><span>Dashboard</span></a></li>
        <li><a href="room.php"><span>My Rooms</span></a></li>
        <li><a href="booking.php" class="active"><span>booking</span></a></li>
        
      </ul>
    </div>
    <!-- End Main Nav -->
  </div>
</div>
<!-- End Header -->
<!-- Container -->
<div id="container">
  <div class="shell">
    <!-- Small Nav -->
    <div class="small-nav"> <a href="#">Dashboard</a> <span>&gt;</span> Booking</div>
    <!-- End Small Nav -->
    <!-- Message OK -->
  
    <br />
    <!-- Main -->
    <div id="main" >
      <div class="cl">&nbsp;</div>
      <!-- Content -->
      <div id="content"  >
        <!-- Box -->
        <div class="box"  style='overflow:auto;width:1100px;' >
          <!-- Box Head -->
          <div class="box-head">
            <h2 class="left">Current Booking</h2>
           
          </div>
          <!-- End Box Head -->
          <!-- Table -->
          <div class="table">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
			  <tr>
               
                <th>User ID#</th>
                <th>First Name</th>
                <th>Last Name</th>
				<th>Address</th>
				<th>City</th>
				<th>Email</th>
					<th>Phone</th>
						<th>Brand</th>
							<th>Card No.</th>	
							<th>Exp Month</th>
								<th>Exp Year</th>
									<th>Option</th>
               
              </tr>
			
		<?php                                                                          //for printing the  text
    
	
	
    $sql = "SELECT * FROM detail";
	 $result = mysqli_query($db, $sql);
while($row = mysqli_fetch_array($result))
{

       $user_id =$row['user_id'];
	     $fname =$row['fname'];
		     
			 $lname =$row['lname'];
				       $address =$row['address'];
					       $city =$row['city'];
						   	 $email =$row['email'];
				       $phone =$row['phone'];
					       $brand =$row['brand'];
						   	 $cardno =$row['cardno'];
				       $emonth =$row['emonth'];
					       $eyear =$row['eyear'];
						   
						      
											       
		  echo  		'<tr class="odd">';
             
             echo      ' <td><h3>'.$user_id.'</h3></td>';
            echo        '<td>'.$fname.'</td>';
             echo       '<td>'.$lname.'</td>';
			  echo  	'<td>'.$address.'</td>';
			  echo  '	<td>'.$city .'</td>';
			    echo  	'<td>'.$email.'</td>';
			  echo  '	<td>'.$phone .'</td>';
			    echo  	'<td>'.$brand.'</td>';
			  echo  '	<td>'.$cardno .'</td>';
			    echo  	'<td>'.$emonth.'</td>';
				echo  	'<td>'.$eyear.'</td>';
			  
                echo    '<td><a class="ico del" href=booking.php?&del='.$row['user_id'].'>Delete</a></td>';
                echo  '</tr>';
           					   

							

						
     




	
	



}	

    

?>







	
            
             
              










		   
            </table>
            <!-- Pagging -->
           
            <!-- End Pagging -->
          </div>
          <!-- Table -->
        </div>
        <!-- End Box -->
		
		
		
		
		
		
		
		
		
		
   
        <!-- End Box -->
      </div>
      <!-- End Content -->
      <!-- Sidebar -->
      <div id="sidebar">
        <!-- Box -->
       
        <!-- End Box -->
      </div>
      <!-- End Sidebar -->
      <div class="cl">&nbsp;</div>
    </div>
    <!-- Main -->
  </div>
</div>
<!-- End Container -->
<!-- Footer -->
<div id="footer">
<div class="shell"> <span class="left">&copy; 2017</span> <span class="right"> Design by <a href="#">Navbro</a> </span> </div>
  </div>
<!-- End Footer -->
</body>
</html>
