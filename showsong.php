<?php
if(!isset($_SESSION["utype"]))
header("location:error.php");           
?> 

                       <?php
		
				$conn=mysqli_connect(host,usern,pass,dbname) or die("Error in connection" . mysqli_connect_error());
				$cid=$_GET["scid"];
			$q="select * from music where catid='$cid'";
	        $res=mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
			$cnt=mysqli_affected_rows($conn);
			mysqli_close($conn);
			if($cnt==0)
			{
				print "No records found";
			}
			else
			{
				print "<table width='700' cellspacing='0'>";
				$count=1;
				while($x=mysqli_fetch_array($res))
				{
					if($count==1)
					{
						print "<tr align='center'>";
					}
					print"<td>
			
						
		<a href='uploadedsongs/$x[1]' target='_blank' ><img src='images/$x[5]' width='200' border='0'></a>
			<a href='uploadedsongs/$x[1]' target='_blank' ><h3><b>$x[2]</b><h3></a>
						
                         <a href='uploadedsongs/$x[1]' download='$x[1]'>Download</a>
                        <br/>
                          <a href='uploadedsongs/$x[1]' target='_blank' >Listen now</a>
                        <br/><br/>

						
					</td>";
					$count++;
					if($count==3)
					{
						print "</tr>";
						$count=1;
					}
				}
				print "</table>";
			}
		?>
                              