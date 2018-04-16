<?php
ob_start();
session_start();
require_once("vars.php");	

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
		
            
            <form name="form1" method="post" action=""  enctype="multipart/form-data">
              <table width="500" border="0" align="center">
                <tr>
                  <td colspan="2" align="center"><h1>Update the Slider</h1><br/></td>
                </tr>
                <tr>
                  <td width="250" align="center">Category</td>
                  <td width="250" align="left"><label>
                    <select name="slidecat" id="slidecat">
                       <option>Select</option>
                    
                           <?php
				  
				  $conn=mysqli_connect(host,usern,pass,dbname) or die("Error in connection " . mysqli_connect_error());	

	        $q="select * from category";
	
	        $res=mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
	
	            $cnt=mysqli_affected_rows($conn);
	
	         if($cnt==0)
			 {
				print "<option>No categories available</option>";
			}
			else
			{
				while($x=mysqli_fetch_array($res))
				{
					
					print "<option value='$x[1]'>$x[0]</option>";	
				}
			}
				?>
				
                    
                    </select>
                  </label>
                </tr>
                
                <tr>
                  <td width="250" align="center">Choose image</td>
                  <td width="250" align="center"><label>
                    <input type="file" name="slide" id="slide">
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td align="left"><input type="submit" name="slider" id="slider" value="Upload"></td>
                </tr>
              </table>
            </form>
            
            <?php
			
			// if(!isset($_SESSION["name"]) or $_SESSION["utype"]!="admin");
			//		 {
			//			  header("location:error.php");
			//	 }
			
			
			if(isset($_POST["slider"]))
			{
					$slidecat=$_POST["slidecat"];
				 $err = $_FILES["slide"]["error"];
				 if($err==0)
         	   {
				$date = date_create();
		        $tstamp = date_timestamp_get($date);
				
				$slide = $tstamp.$_FILES["slide"]["name"];
				$tname = $_FILES["slide"]["tmp_name"];
				
		        move_uploaded_file($tname,"images/$slide");
				
				
		
									  date_default_timezone_set("Asia/Kolkata");
			                          $dt=date('y-m-d.h:i:s');  
			
				$conn=mysqli_connect(host,usern,pass,dbname) or die ("Error in connection" .mysqli_connect_error());
               $q="insert into slider values('','$slide','$slidecat','$dt')";
               
               mysqli_query($conn,$q) or die("Error in query" .mysqli_error($conn));
               $count=mysqli_affected_rows($conn);
               mysqli_close($conn);
               if($count==1)
			   {
				  print "<h3 align='center'><font color='green'>Image is upload successfully</font></h3>";
				  
			  }
			   else
			  {
				  print "<h3 align='center'><font color='red'>Try agin</font></h3>";
			  }
					
			   }
			   else if($err!=0)
			   {
				   print "<h3 align='center'><font color='red'>Please Choose the Image</font></h3>";
			  
			   }
          
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