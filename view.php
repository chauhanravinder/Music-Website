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
			<?php
			include_once("logo.php");
			?>

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
<?php
include_once("header.php")
?>
			<!--notification menu end -->
			<!-- //header-ends -->

		<!-- //header-ends -->
          <br/><br/><br/>
		
              
              <form name="form1" method="post" action="">
              <table width="200" border="0" align="center" cellspacing="20">
                      <tr>
                        <td><a href="message.php"><img src="images/message.jpg" width="257" border="0"></a></td>
                        <td><a href="feed.php"><img src="images/f.png" width="257" border="0"></a></td>
                        <td><a href="grid.php"><img src="images/u.jpg" width="257" border="0"></a></td>
                        <td><a href="delete.php"><img src="images/songs.jpg" width="257" border="0"></a></td>
                      </tr>
                       <tr>
                        <td align="center"><a href="message.php">Messages</a></td>
                           <td align="center"><a href="feed.php">Feedback</td>
                        <td align="center"><a href="grid.php"> List of Users</td>
                        <td align="center"><a href="delete.php">List of Songs</td>
                    
                      </tr>
                    </table>

              </form>
<h1>&nbsp;</h1>
            <div class="clearfix"></div>
						<!--body wrapper end-->

					</div>
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