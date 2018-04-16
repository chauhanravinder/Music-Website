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
			include_once("logo.php")
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
		
            
       <h1 align="center">User Uploads</h1>
                   
         <?php
		  
		//	  if(!isset($_SESSION["name"]) or $_SESSION["utype"]!="admin");
		//	 {
          //        header("location:error.php");
 			// }
			 			 
		 $conn=mysqli_connect(host,usern,pass,dbname) or die ("Error in connection" .mysqli_connect_error());
               $q="select * from usersongs";
               
               $res=mysqli_query($conn,$q) or die("Error in query" .mysqli_error($conn));
               $count=mysqli_affected_rows($conn);
               mysqli_close($conn);
               if($count=0)
               {
              print"No song Found";
               }
               else
               {  
				  print "<table width='800' align='center' >";
				  print"<tr bgcolor='#CC6633' align='center'>
				    <td><b>Artist name</b></td>
					<td><b>Song Title</b></td>
					<td><b>Song/b></td>
					<td><b>Play</b></td>
					<td><b>Approve</b></td>
					<td><b>Delete</b></td>
					
			     </tr>";
				 $count=1;
				
				 while($x=mysqli_fetch_array($res))
				 {   
				     
					   
                
				 
				 
					 if($count%2==0)
					 {
					 print "<tr bgcolor='#99CC33' align='center'>";
					 }
					 else
					 {
						 print "<tr bgcolor='#FFFFFF' align='center'>";
					  }  
					  
					    print"<td>$x[0]</td>						
						<td>$x[1]</td>
						<td>$x[2]</td>
	
						<td><a href='uploadedsongs/$x[2]' target='_blank'>Play</a></td>
						<td><a href='approve.php?usid=$x[3]'>Approve</a></td>
						<td><a href='deluserupload.php?usid=$x[3]'>Delete</a></td>
						</tr>";
					$count++; 
						
				}
				print "</table>";
               }
            		
					
			 ?>		
						
					
              
		 
	
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