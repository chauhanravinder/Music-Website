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
			<?php
			include_once("logo.php");
			?>

			<!--logo and iconic logo end-->
			<div class="left-side-inner">

				<!--sidebar nav start-->
					<?php
					if(isset($_SESSION["name"]))
						 {
						    include_once("uside.php");
						 }
					else
					  {				  
					   include_once("side.php");
					  }
					?>				<!--sidebar nav end-->
			</div>
		</div>
					<!-- app-->
			
			<!-- //app-->

		<!-- signup -->
        
        <?php
		
		include_once("signup.php")
		?>
        
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

		<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="inner-content">
				     
					      <!--banner-section-->
							<div class="banner-section">
								<div class="banner">
									 <div class="callbacks_container">
										<ul class="rslides callbacks callbacks1" id="slider4">
                                        <?php
										 $conn=mysqli_connect(host,usern,pass,dbname) or die("Error in connection" .mysqli_connect_error());
										  $q="select * from slider order by id desc limit 4";
	
	        $res=mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
	
	            $cnt=mysqli_affected_rows($conn);
				if($cnt>0)
				{
					while($ans=mysqli_fetch_array($res))
					{
					print "
											   	<li>
														<div class='banner-img'>
															 <img src='images/$ans[1]' class='img-responsive' alt='' width='980' height='600'>
														 </div>
														
												</li>";
					}
				}
												?>

											</ul>
										</div>
										<!--banner-->
									<script src="js/responsiveslides.min.js"></script>
								 <script>
									// You can also use "$(window).load(function() {"
									$(function () {
									  // Slideshow 4
									  $("#slider4").responsiveSlides({
										auto: true,
										pager:true,
										nav:true,
										speed: 500,
										namespace: "callbacks",
										before: function () {
										  $('.events').append("<li>before event fired.</li>");
										},
										after: function () {
										  $('.events').append("<li>after event fired.</li>");
										}
									  });
								
									});
								  </script>
								<div class="clearfix"> </div>
							</div>
						</div>	
				<!--//End-banner-->
					<!--albums-->
					<!-- pop-up-box --> 
							<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all">
							<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
							 <script>
									$(document).ready(function() {
									$('.popup-with-zoom-anim').magnificPopup({
										type: 'inline',
										fixedContentPos: false,
										fixedBgPos: true,
										overflowY: 'auto',
										closeBtnInside: true,
										preloader: false,
										midClick: true,
										removalDelay: 300,
										mainClass: 'my-mfp-zoom-in'
									});
									});
							</script>		
					<!--//pop-up-box -->
						<div class="albums">
								<div class="tittle-head">
									<h3 class="tittle">Songs</h3>
									
									<div class="clearfix"> </div>
								</div>
								<?php
						require_once("vars.php");
						$conn=mysqli_connect(host,usern,pass,dbname) or die("Error in connection " . mysqli_connect_error());	
						$q="select * from music order by rand() limit 6";
						$res=mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
						$cnt=mysqli_affected_rows($conn);
						if($cnt==0)
						{
							print "No song available";
						}
						else
						{
							while($x=mysqli_fetch_array($res))
							{
								
                         print "<div class='col-md-3 content-grid'>
				<a href='uploadedsongs/$x[1]' target='_blank' ><img src='images/$x[5]' width='200' height='150' border='0'></a>
					<a href='uploadedsongs/$x[1]' target='_blank' ><b><font color='black' size='4px'>$x[2]</font></b></a>
								<br/>
                         <a href='uploadedsongs/$x[1]' download='$x[1]'>Download</a>
                        <br/>
                          <a href='uploadedsongs/$x[1]' target='_blank' >Listen now</a>
							</div>";
								
							}
						}
							?>
											<div class="clearfix"> </div>
										</div>
                                        
                                        
                        
					<!--//End-albums-->
						<!--//discover-view-->
								<!--//discover-view-->
							</div>
							<!--//music-left-->
						    <!--/music-right-->
						  
													 <!--//music-right-->
											
			
										</div>
						<!--body wrapper start-->
						
			  <!--body wrapper end-->
			     
			</div>
        <!--footer section start-->
           
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