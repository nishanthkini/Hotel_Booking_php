<?php

include("../connection/connect.php");
error_reporting(0);
session_start();
if(isset($_POST['submit']))
{
	$username = $_POST['user_name'];
	$password = $_POST['password'];
	
	if(!empty($_POST["submit"])) 
     {
	$loginquery ="SELECT * FROM admin_dir WHERE username='$username' && password='$password' ";
	$result=mysqli_query($db, $loginquery);
	$row=mysqli_fetch_array($result);
	
	                        if(is_array($row))
								{
                                    	$_SESSION["a_id"] = $row['a_id'];
										 header("location:dashboard.php");
	                            } 
							else
							    {
                                      	$message = "Invalid Username or Password!";
                                }
	 }
	
	
}





?>


<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<!-- Custom Theme files -->
<link href="css/login.css" rel="stylesheet" />

<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Flat Purple Login Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>


</head>
<body style='background-color:#ba4c32;'>
<!--login form start here-->	
<h1>Administrator Account</h1>
<div class="login" style='background-color:#f9ebae;border-radius:5px;'>
	<div class="buttons">
	<h4 style='color:red;font-weight:bold;font-size:24px;'>Admin Account</h4>
	<form   action='' method="post">
	<input type="text" placeholder="Username" name="user_name"  style='border-radius:5px;'/>
	<input type="password" placeholder="Password" name="password"   style='border-radius:5px;'/>
	
	<div class="forgot">
   
   	  <div class="forgot-para">
   	  	<a href="#"> <p>Forgot Your Password?</p></a>
   	  </div>
	   	<div class="clear"> </div>
	</div>
	
	<label  class="hvr-sweep-to-bottom">
	<input type="submit" value="Login" name='submit'/>
	</label>
	<center ><?php echo  '<div style="color:red;"> '.$message.'</div>';?></center>
	</form>
	
</div>

<!--login form end here-->
</body>
</html>
</html>