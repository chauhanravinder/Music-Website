<?php
session_start();
require_once("vars.php");

if(!isset($_SESSION["utype"]))
header("location:error.php");
ob_start();


?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Mosaic a Entertainment Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Mosaic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
 <!-- Meters graphs -->
<script src="js/jquery-1.10.2.min.js"></script>

</head> 
   
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
      <!-- left side start-->
		<div class="left-side sticky-left-side">

			<!--logo and iconic logo start-->
			<?php
			include_once("logo.php")
			?>
			<!--logo and iconic logo end-->
			<div class="left-side-inner">

				<!--sidebar nav start-->
					<?php
					
						include_once("side2.php");
					
					
					?>
				<!--sidebar nav end-->
			</div>
		</div>
					<!-- app-->
			
			<!-- //app-->

		<!-- signup -->
       
        
			<!-- //signup -->

		<!-- left side end-->
		<!-- main content start-->
		<div class="main-content">
			<!-- header-starts -->
			<?php
			include_once("header.php")
			?>
			<!--notification menu end -->
			<!-- //header-ends -->

		<!-- //header-ends -->
		  <div id="page-wrapper">
			<div class="inner-content">
				      
							<!--//music-left-->
						    <!--/music-right-->
						 
								<!--/video-main-->
                                
						   
		                
						  <?php
			   
						    if(isset($_POST["change"]))
							{
								$email=$_SESSION["email"];
								$current=$_POST["cp"];
								$new=$_POST["np"];
								$confirm=$_POST["cnp"];
							   
							   
								if($new==$confirm)
								{
									
				$conn=mysqli_connect(host,usern,pass,dbname) or die("Error in connection" .mysqli_connect_error());
				 $q= "update signup set password='$confirm' where email='$email' and password='$current'";
										   mysqli_query($conn,$q) or die("Error in query" .mysqli_error($conn));
										   $count=mysqli_affected_rows($conn);
										   mysqli_close($conn);
										   if($count==1)
										   {
											   $msg= '<h3 align="center"><font color="green">Password changed successfully</font></h3>';
										    }
											else
										    {
 									 $msg= "<h3 align='center'><font color='red'>Incorrect current password</font></h3>";
											}
								}
								else
								{
									$msg= "<h3 align='center'><font color='red'>Password dosn't match</font></h3>";
								}
							}  
                                
                          ?> 
								
							<form name="change" method="post">
                                  
                                      <table width="500" align="center" cellpadding="10" cellspacing="10">
                                          <tr>
                                             <td colspan="2" align="center"><h1>Change Password</h1></td>
                                        </tr>
                                         <tr>
                                             <td align="center">Current Password</td>
                                             <td align="center"><input name="cp" type="password"></td>
                                         </tr>
                                         <tr> 
                                         	<td align="center">New Password</td>
                                             <td align="center"><input type="password" name="np">
                                         </tr>
                                          <tr> 
                                         	<td align="center">Confirm Password</td>
                                             <td align="center"><input type="password" name="cnp"></td>
                                         </tr> 
                                          <tr> 
                                         	<td></td>
                                             <td align="center"><input type="submit" name="change" value="Submit"></td>
                                         </tr>       
                                      </table> 
                                      
                                    <?php
								if(isset($msg))
									{
										echo '$msg';
									}
								?>
                                          
              </form>
                               
								
      
								
								<!-- script for play-list -->
				
			<!-- //script for play-list -->

								<!--//video-main-->
								<!--/app_store-->
									  
								  <!--//app_store-->
						         <!--/start-paricing-tables-->
									
			
													 <!--//music-right-->
											
			
		    </div>
					  <!--body wrapper start-->
			</div>
							<div class="clearfix"></div>
						<!--body wrapper end-->

					</div>
			  <!--body wrapper end-->
			     
			</div>
        <!--footer section start-->
			<footer>
			   <p>&copy 2016 Mosaic. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts.</a></p>
			</footer>
        <!--footer section end-->

      <!-- main content end-->
   </section>
  
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>