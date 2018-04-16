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
					if(isset($_SESSION["utype"]))
					{
					$usertype=$_SESSION["utype"];
					if($usertype=="admin")
					{
					include_once("side2.php");
					}
					else
					{
						include_once("uside.php");
					}
					}
					else
					{
						include_once("uside.php");
					}
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

            
              
             <?php
             
				$conn=mysqli_connect(host,usern,pass,dbname) or die("Error in connection" . mysqli_connect_error());
				$user=$_SESSION["email"];
			$q="select * from signup where email='$user'";
	        $res=mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
			
			$x=mysqli_fetch_array($res);
			mysqli_close($conn);
			
			
            
			
			if(isset($_POST["update"]))
{
	$name=$_POST["nm"];
	$mobile=$_POST["mobile"];
	$mail=$_POST["mail"];
	
	$q1="update signup set name='$name',mobile='$mobile',email='$mail' where email='$x[2]'";
	$conn=mysqli_connect(host,usern,pass,dbname) or die("Error in connection" . mysqli_connect_error());
	mysqli_query($conn,$q1) or die("Error in query" . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==1)
	{
	
	    $msg="<h1 align='center'><font color='green'>Your profile update successfully.</font></h1>";
		
	}
	else
	{
		$msg="<h1 align='center'><font color='red'>Problem while updating profile, please try again</font></h1>";
	}
	
}

			  ?> 
           
             <form name='form2'method='post' action=''>
             
              
                <table width='600' align='center' cellpadding='20' cellspacing='10' >
                <tr>
                  <td colspan='2' align='center'><h1>Profile</h1></td>
                </tr>
                <tr>
                  <td width='400' align='center'>Name</td>
				  
                <td width='208' align='left'><label for='nm'></label>
                  <input type='text' name='nm' id='nm' value='<?php print"$x[0]"; ?>'></td>
                </tr>
				
               <tr>
                  <td align='center'>Mobile Number</td>
				 
                <td align='left'><label for='mobile'></label>
                  <input type='text' name='mobile' id='mobile' value='<?php print"$x[1]"; ?>'></td>
                </tr>
                
              <tr>
                  <td align='center'>Email</td>
                 <td align='left'><label for='mail'></label>
                  <input type='text' name='mail' id='mail' value='<?php print"$x[2]"; ?>'></td>
                </tr>
                <tr>
                  <td align='center'>&nbsp;</td>
                <td align='left'><input type='submit' name='update' id='update' value='Update'></td>
                </tr>
              </table>
			   
          </form>
		
        <?php
		if(isset($msg))
		{
			print $msg;
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