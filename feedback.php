<?php
session_start();
require_once("vars.php");
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
<title>Mosaic a Entertainment Category Flat Bootstrap Responsive Website Template | Contact :: w3layouts</title>
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
 
 <?php
include_once("signupvalidation.php")
?>
<script src="js/jquery-1.10.2.min.js"></script>

</head> 
   
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
      <!-- left side start-->
		<div class="left-side sticky-left-side">

			<!--logo and iconic logo start-->
			

			<!--logo and iconic logo end-->
        
					<?php
					include_once("logo.php");
					include_once("uside.php");
					?>
		</div>
		<!-- left side end-->
				<!-- app-->
			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog facebook" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body">
							<div class="app-grids">
								<div class="app">
						<div class="col-md-5 app-left mpl">
							<h3>Mosaic mobile app on your smartphone!</h3>
							<p>Download and Avail Special Songs Videos and Audios.</p>
							<div class="app-devices">
								<h5>Gets the app from</h5>
								<a href="#"><img src="images/1.png" alt=""></a>
								<a href="#"><img src="images/2.png" alt=""></a>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-7 app-image">
							<img src="images/apps.png" alt="">
						</div>
						<div class="clearfix"></div>
					</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //app-->
	<?php
	include_once("signup.php")
	?>
			<!-- //signup -->

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
												<?php
											if(isset($_SESSION["name"]))
										   {
											include_once("head.php");
											}
											
											else
											 {
											include_once("login.php");
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
							<div id="page-wrapper">
								<div class="inner-content">
								<div class="tittle-head">
											
										
									<!-- /contact-->
									<div class="contact">
									
									
									
									<div class="contact-left1"><h3>Feedback</h3>
								
										<div class="in-left">
                 <?php
					 if(isset($_POST["feedback"]))
					 {
						 $nm=$_POST["nm"];
						 $mail=$_POST["mail"];
						 $phone=$_POST["phone"];
						 $about=$_POST["about"];
						 
			   $conn=mysqli_connect(host,usern,pass,dbname) or die ("Error in connection" .mysqli_connect_error());
               $q="insert into feedback values('$nm','$mail','$phone','$about','')";
               
               mysqli_query($conn,$q) or die("Error in query" .mysqli_error($conn));
               $count=mysqli_affected_rows($conn);
               mysqli_close($conn);
               if($count==1)
               {
                  $msg= "<h3><font color='green'>Thank you for feedback</font></h3>";
               }
               else
               {
                  $msg= "<h3><font color='red'>Try again</font></h3>";
               }
					 }
					 ?>                                              
                                        
									  <form action="" method="post" name="form5">
												<p class="your-para">Your Name :</p>
														<input type="text" name="nm" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required >
											
														<p class="your-para">Your Mail :</p>
														<input type="text" name="mail" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required>
														<p class="your-para">Phone Number:</p>
														<input type="text" value="" name="phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" onkeypress="return isNumberKey(event)" required>

											
										</div>
										<div class="in-right">
											    <p class="your-para">About us:</p>
												<textarea placeholder="" name="about" onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}" required></textarea>
												<input type="submit" value="Submit" name="feedback">
                               
									  </form>
                                      
                            <?php
							if(isset($msg))
							{
								print $msg;
							}
							?>          
										</div>
                 
                           
                           
									
									</div>
													
													
											<!-- //contact -->
														</div>
								</div>
						<!--body wrapper end-->

					</div>
			  <!--body wrapper end-->
   
			</div>
      <?php
	  include_once("footer.php")
	  
	  ?>
        <!--footer section end-->

      <!-- main content end-->
   </section>
  
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>