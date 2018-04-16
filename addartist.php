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
		
            <form name="form1" method="post" action="" enctype="multipart/form-data">
              <table width="600" align="center" cellpadding="20" cellspacing="10" >
                <tr>
                  <td colspan="2" align="center"><h1>Add Artist</h1></td>
                </tr>
                <tr>
                  <td width="400" align="center">Choose Category</td>
                  <td width="208" align="left"><label>
                    <select name="scat" id="scat">
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
                  </label></td>
                </tr>
                <tr>
                  <td align="center">Artist Name</td>
                  <td align="left"><input type="text" name="artist" id="artist"></td>
                </tr>
                <tr>
                  <td align="center">Artist Picture</td>
                  <td align="left"><input type="file" name="artistpic" id="artistpic"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td align="left"><input type="submit" name="add" id="add" value="Upload"></td>
                </tr>
              </table>
          </form>
            
           <?php
		     // if(!isset($_SESSION["name"]) or $_SESSION["utype"]!="admin");
			 //{
               //   header("location:error.php");
 			 //}
		   
		   
		    if(isset($_POST["add"]))
			{
		     $artistcat=$_POST["scat"];
			 $artistname=$_POST["artist"];
			 $err=$_FILES["artistpic"]["error"];
			  
			 
			 if($err==0)
         	{
				$date = date_create();
		        $tstamp=date_timestamp_get($date);
				$artist=$tstamp.$_FILES["artistpic"]["name"];
				$tname=$_FILES["artistpic"]["tmp_name"];
				
		        move_uploaded_file($tname,"images/$artist");
				
			}
			else 
			{
				$artist="no.png";
			}
			
			    
               $conn=mysqli_connect(host,usern,pass,dbname) or die ("Error in connection" .mysqli_connect_error());
               $q="insert into artist(artistcatid,artistname,artistpic) values ('$artistcat','$artistname','$artist')";
               
               mysqli_query($conn,$q) or die("Error in query" .mysqli_error($conn));
               $count=mysqli_affected_rows($conn);
               mysqli_close($conn);
               if($count==1)
               {
                print"<h1 align='center'><font color='green'>Artist added successfully</font></h1>";
               }
			   
               else
               {
               print "<h1 align='center'><font color='red'>Try again</font></h1>";
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