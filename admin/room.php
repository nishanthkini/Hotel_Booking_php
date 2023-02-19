<?php
if(!empty($_POST["logout"]))   //when user press logout button!
	{
	    $_SESSION["user_id"] = "";    //empty the value of user_id variable
	 session_destroy();                //distroyed the session
	    header('location:index.php');  // after distroy redirected user to index page
	}


	
error_reporting(0);  
 include("../connection/connect.php");
if(isset($_POST['submit']))           //if upload btn is pressed
{
	
			
		
			$price = $_POST['price'];
			 $type = $_POST['type'];
			  $text = $_POST['text'];
		  
		
  
   $fname = $_FILES['image']['name'];
   $temp = $_FILES['image']['tmp_name'];
   $fsize = $_FILES['image']['size'];
   $extension = explode('.',$fname);
   $extension = strtolower(end($extension));  
   $fnew = uniqid().'.'.$extension;
   
   $store = "upload/".basename($fnew);                      // the path to store the upload image

  if($extension == 'jpg'||$extension == 'png'||$extension == 'gif' )
	{        
	if($fsize>=1000000)
	{
		echo "";
		
	 $_1=	'<div class="msg msg-error">';
       $_2='<p><strong>MAX size is 1MB!</strong></p>';
       $_3='</div>';
	   
	}		
	else
	{
		if(move_uploaded_file($temp, $store))
		{
		      
					
				if(!$price==''||!$text=''||!$type==''||!$_FILES['image']=='')
				{
				$sql = "INSERT INTO booking (rimage,rtype,rprice,rtext) VALUES('$fnew','$type ','$price','$text')";  // store the submited data ino the database :images
				mysqli_query($db, $sql); 
	          
			  
			    $first= '<div class="msg msg-ok">';
                  $sec=    ' <p><strong>Your Image was Inserted succesfully!</strong></p>';
                    $th=       '</div>';
	 
	 
	 
				$q= ' <div class="msg msg-ok">';
				$w=     '  <p><strong>Your Record was Inserted succesfully!</strong></p>';
				$e=              ' </div>';
                
			   
			
				}
			else
				{
					 
					  $_4=	'<div class="msg msg-error">';
						$_5='<p><strong>Fill out empty fields first!</strong></p>';
						$_6='</div>';
				}	
	
					
					
					
					
					
					
                      
		}
	}
	}
	else
	{
		
						$_7=	'<div class="msg msg-error">';
						$_8='<p><strong>Supported Extension only JPG, PNG, GIF</strong></p>';
						$_9='</div>';
	}

	

 

    
	                                                  
      
    
	
	
	
}
?>
<html>
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
        <li><a href="room.php" class="active"><span>My Rooms</span></a></li>
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
   <div class="small-nav"> <a href="#">Dashboard</a> <span>&gt;</span> My Rooms</div>
    <br />
    <!-- Main -->
    <div id="main">
      <div class="cl">&nbsp;</div>
      <!-- Content -->
      <div id="content">
	  
	  
	  
	    <?php 
				    echo  $first;
					echo $sec;
					echo  $th;
                  
					echo   $q;
					 echo$w;
					 echo$e;
					 
					echo $_1;
					echo$_2;
					echo$_3;
					echo $_4;
					echo$_5;
					echo$_6;
					echo $_7;
					echo$_8;
					echo$_9;
				  
				  ?>
				  
				  
				  
     
	   <!-- Box -->
        <div class="box">
          <!-- Box Head -->
          <div class="box-head">
            <h2>Add New Room</h2>
          </div>
          <!-- End Box Head -->
          <form action=" " method="post"  enctype="multipart/form-data">
		  
		  
            <!-- Form -->
            <div class="form">
			   <p> 
			      <label>Room Image <span>(Required Field)</span></label>
                <input type="file" class="field size1" name='image'/>
              </p>
			  
              <p> 
                <label>Room Price<span>(Required Field)</span></label>
                <input type="text" class="field size1"  name='price'/>
              </p>
			  
              <p class="inline-field">
                 <label>Room Type</label>
                <select class="field size3" name='type'>
                  <option disabled >Room Type</option>
				  <option value="Single Room"> Single</option>
				  <option value="Double Room">Double</option>
				  <option value="First Room">First Room</option>
                </select>
                
              </p>
              <p> <span class="req">max 100 symbols</span>
                <label>Text <span>(Discription)</span></label>
                <textarea class="field size1" rows="10" cols="30" name='text'></textarea>
              </p>
            </div>
            <!-- End Form -->
            <!-- Form Buttons -->
            <div class="buttons">
             
              <input type="submit" class="button" value="submit"  name='submit'/>
            </div>
            <!-- End Form Buttons -->
			
			
			
			
          </form>
        </div>
        <!-- End Box -->
      </div>
	 
	 
	 
	 
	 
	 
	 
	 
	 
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
