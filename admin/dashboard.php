<?php
error_reporting(0);
include("../connection/connect.php");
$sql = "DELETE FROM booking WHERE r_id='$_GET[del]'";                //query to delete by 'id' which get from while loop
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
        <li><a href="dashboard.php" class="active"><span>Dashboard</span></a></li>
        <li><a href="room.php"><span>My Rooms</span></a></li>
        <li><a href="booking.php"><span>booking</span></a></li>
        
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
    <div class="small-nav"> <a href="#">Dashboard</a> <span>&gt;</span> Current Rooms </div>
    <!-- End Small Nav -->
    <!-- Message OK -->
  
    <br />
    <!-- Main -->
    <div id="main" >
      <div class="cl">&nbsp;</div>
      <!-- Content -->
      <div id="content"  >
        <!-- Box -->
        <div class="box"  style='overflow:auto;width:1000px'>
          <!-- Box Head -->
          <div class="box-head">
            <h2 class="left">Current Rooms</h2>
           
          </div>
          <!-- End Box Head -->
          <!-- Table -->
          <div class="table">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
			  <tr>
               
                <th>Text</th>
                <th>image</th>
                <th>Type</th>
				<th>Price</th>
				<th>Room ID#</th>
				<th>Option</th>
               
              </tr>
			
		<?php                                                                          //for printing the  text
    
	
	
    $sql = "SELECT * FROM booking";
	 $result = mysqli_query($db, $sql);
while($row = mysqli_fetch_array($result))
{

       $id =$row['r_id'];
	       $rimage =$row['rimage'];
		       $rtype =$row['rtype'];
				       $price =$row['rprice'];
					       $rtext =$row['rtext'];
						   
						      
											       
		  echo  		'<tr class="odd">';
             
             echo      ' <td><h3>'.$rtext.'</h3></td>';
            echo        '<td>'.$rimage.'</td>';
             echo       '<td>'.$rtype.'</td>';
			  echo  	'<td>'.$price.'</td>';
			  echo  '	<td>'.$id .'</td>';
                echo    '<td><a class="ico del" href=dashboard.php?&del='.$row['r_id'].'>Delete</a></td>';
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
