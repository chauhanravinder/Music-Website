<?php
session_start();
require_once("vars.php");
ob_start();
if(!isset($_SESSION["utype"]))
header("location:error.php");
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
			<div class="logo">
				<h1><a href="index.html">Mosai<span>c</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="index.html">M </a>
			</div>

			<!--logo and iconic logo end-->
			<div class="left-side-inner">

				<!--sidebar nav start-->
					<?php
					include_once("side2.php")
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
			<div class="header-section">
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->
			<!--notification menu start -->
				<div class="menu-right">
					<div class="profile_details">		
						
						  <?php
						 include_once("search1.php")
						 ?>
						 
									<!-- //search-scripts -->
											 <!---->
											  <div class="col-md-4 player">
													<div class="audio-player">
														<audio id="audio-player"  controls="controls">
														<source src="media/Blue Browne.ogg" type="audio/ogg"></source>
																<source src="media/Blue Browne.mp3" type="audio/mpeg"></source>
																<source src="media/Georgia.ogg" type="audio/ogg"></source>
																<source src="media/Georgia.mp3" type="audio/mpeg"></source></audio>
												</div>
												<!---->
												<script type="text/javascript">
													$(function(){
													  $('#audio-player').mediaelementplayer({
														alwaysShowControls: true,
														features: ['playpause','progress','volume'],
														audioVolume: 'horizontal',
														iPadUseNativeControls: true,
														iPhoneUseNativeControls: true,
														AndroidUseNativeControls: true
													});
												 });
												</script>
												<!--audio-->
													<link rel="stylesheet" type="text/css" media="all" href="css/audio.css">
													<script type="text/javascript" src="js/mediaelement-and-player.min.js"></script>
													<!---->


												<!--//-->
												<ul class="next-top">
													<li><a class="ar" href="#"> <img src="images/arrow.png" alt=""/></a></li>
													<li><a class="ar2" href="#"><img src="images/arrow2.png" alt=""/></i></a></li>
														
											 </ul>	
											</div>
											<div class="col-md-4 login-pop">
												<div id="loginpop"> <a href="#" id="loginButton"><span>Profile <i class="	glyphicon glyphicon-user"></i></span></a>
														<div id="loginBox">  
												<form action="" method="post" id="loginForm">
																	<fieldset id="body">
																		<fieldset>
																			 
																		
					<input type="submit" name="change" id="change" value="Change Password">									 
                     <input type="submit" name="logout" id="logout" value="Logout">
                                                                        </fieldset>
																	</fieldset>
															
														 </form>
                                                        
													</div>
                                                    
												</div>

											</div>
                                            
                                            
                                        
                                       <?php
									   if(isset($_POST["change"]))
									   {
										   header("location:change.php");
									   }
									   else if(isset($_POST["logout"]))
									   {
										   header("location:index.php");
										  }
									   ?>
                                            
										<div class="clearfix"> </div>
				  </div>
							<!-------->
			  </div>
					<div class="clearfix"></div>
		  </div>
			<!--notification menu end -->
			<!-- //header-ends -->

		<!-- //header-ends -->
          <br/><br/><br/>
		 <?php
						$name=$_SESSION["name"];
                        if(isset($_SESSION["name"]))
						{
							print "<h1 align='justify'>Welcome $name</h1>";
							
						}
			            ?>
            
       <h1 align="center">List of Feedbacks</h1>
                   
         <?php
		  
		//	  if(!isset($_SESSION["name"]) or $_SESSION["utype"]!="admin");
		//	 {
          //        header("location:error.php");
 			// }
		     
			 $feedbackid=$_GET["feedid"];  
		     $conn=mysqli_connect(host,usern,pass,dbname) or die ("Error in connection" .mysqli_connect_error());
					  $q="delete from feedback where aboutid = $feedbackid";
				mysqli_query($conn,$q) or die("Error in query" .mysqli_error($conn));
               $count=mysqli_affected_rows($conn);
               mysqli_close($conn);
               if($count=1)
               {
              header("location:feed.php");
			   }
			   else
			   {
	          print"problem while deleting feedback";
               }

			   
			   
		 
		 ?>
            		
					
			 ?>		
						
					
              
		 
	
                       <h1>&nbsp;</h1>
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