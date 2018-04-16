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
                  <td colspan="2" align="center"><h1>Add Song</h1></td>
                </tr>
                <tr>
                  <td width="400" align="center">Choose Category</td>
                  <td width="208" align="left"><label>
                    <select name="scat" id="scat">
                      <option value="select">Select</option>
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
			if(isset($_POST["go"]))
			{
				$cid=$_POST["scat"];
				if($x[1]==$cid)
				{
			print "<option value=$x[1] selected='selected'>$x[0]</option>";	
				}
				else
				{
			print "<option value=$x[1]>$x[0]</option>";						
				}
			}
			else
			{
				print "<option value=$x[1]>$x[0]</option>";	
			}
		}
	}
				  
			  ?>	  
				  
				
                      
                     </select>
                    <input type="submit" name="go" id="go" value="Go">
                  </label></td>
                </tr>
                
                 <tr>
                  <td align="center">Artist Name</td>
                  <td align="left"><label>
                    <select name="artist" id="artist">
                    
                     <option value="select">Select</option>
                      <?php
				 
				  if(isset($_POST["go"]))
				  {
					  $cid=$_POST["scat"];
				  $conn=mysqli_connect(host,usern,pass,dbname) or die("Error in connection " . mysqli_connect_error());	
			
				$q="select * from artist where artistcatid='$cid'";
				
				$res=mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
				
				$cnt=mysqli_affected_rows($conn);
				
				if($cnt==0)
				{
					print "<option>No artist available</option>";
				}
				else
				{
					while($x=mysqli_fetch_array($res))
					{
						print "<option value=$x[3]>$x[1]</option>";	
					}
				}
							  }
							  
							  
							  ?>
								
                    </select>
                  </label></td>
                </tr>
                
                <tr>
                  <td align="center">Song Name</td>
                  <td align="left"><label>
                    <input type="text" name="sname" id="sname">
                  </label></td>
                </tr>
                
                <tr>
                  <td align="center">Album Name</td>
                  <td align="left"><label>
                    <select name="aid" id="aid">
                    <?php
		         
					  
					  
				  $conn=mysqli_connect(host,usern,pass,dbname) or die("Error in connection " . mysqli_connect_error());	
			
				$q="select * from album where albumcatid='$cid'";
				
				$res=mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
				
				$cnt=mysqli_affected_rows($conn);
				
				if($cnt==0)
				{
					print "<option>No artist available</option>";
				}
				else
				{
					while($x=mysqli_fetch_array($res))
					{
						print "<option value=$x[3]>$x[1]</option>";	
					}
				}
							  
							  
							  
							  ?>
							
                    </select>
                  </label></td>
                </tr>
               
                <tr>
                  <td align="center">Choose Song</td>
                  <td align="left"><label>
                    <input type="file" name="song" id="song">
                  </label></td>
                </tr>
                <tr>
                  <td align="center">Choose Song Image</td>
                  <td align="left"> <input type="file" name="img" id="img"></td>
                </tr>
                <tr>
                  <td align="center">&nbsp;</td>
                  <td align="left"><input type="submit" name="upload" id="upload" value="Upload"></td>
                </tr>
              </table>
          </form>
            
           <?php
		   //if(!isset($_SESSION["name"]) or $_SESSION["utype"]!="admin")
			// {
    //              header("location:error.php");
 		//	 }
	
		   
		    if(isset($_POST["upload"]))
			{
			
		     $scatid=$_POST["scat"];
			 $sname=$_POST["sname"];
			 $album=$_POST["aid"];
			 $artist=$_POST["artist"];
			 
			 
			 $err = $_FILES["song"]["error"];
			 
			 if($err==0)
         	{
				$date = date_create();
		        $tstamp = date_timestamp_get($date);
				
				$song = $tstamp.$_FILES["song"]["name"];
				$tname = $_FILES["song"]["tmp_name"];
				
		        move_uploaded_file($tname,"uploadedsongs/$song");
				
				$err2 = $_FILES["img"]["error"]; 
				if($err2==0)
				{
					 $image = $tstamp.$_FILES["img"]["name"];
					 $tname2 = $_FILES["img"]["tmp_name"];
					 move_uploaded_file($tname2,"images/$image");
				}
				else
				{
					
	
		          $image = "music.jpg";
	
				}
				date_default_timezone_set("Asia/Kolkata");
			$dt=date('y-m-d.h:i:s');
			
          $conn=mysqli_connect(host,usern,pass,dbname) or die ("Error in connection" .mysqli_connect_error());
               $q="insert into music(catid,orignalname,songname,album,artist,image,songid,datetime) values ('$scatid','$song','$sname','$album','$artist','$image','','$dt')";
               
               mysqli_query($conn,$q) or die("Error in query" .mysqli_error($conn));
               $count=mysqli_affected_rows($conn);
               mysqli_close($conn);
               if($count==1)
			   {
				  print "<h3 align='center'><font color='green'>Song is upload successfully</font></h3>";
				  
			  }
			   else
			  {
				  print "<h3 align='center'><font color='red'>Try agin</font></h3>";
			  }
		  
				 
			}
			
			  else if($err==4)
			  {
				  $image="music.jpg";
				  $song="notavailable";
				  print "<h3 align='center'><font color='red'>Please choose the song</font></h3>";
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