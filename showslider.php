<?php		   
                         	
                                               
                                      $cid=$_GET["scid"];
									                                        
                                               
											   
										 $conn=mysqli_connect(host,usern,pass,dbname) or die("Error in connection" .mysqli_connect_error());
										  $q="select * from slider where slidercatid='$cid' order by id desc limit 4";
	
	        $res=mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
	
	            $cnt=mysqli_affected_rows($conn);
				if($cnt>0)
				{
					while($ans=mysqli_fetch_array($res))
					{
					print "
											   	<li>
														<div class='banner-img'>
															 <img src='images/$ans[1]' class='img-responsive' alt='' width='980px' height='600px'>
															
														 </div>
														
												</li>";
					}
				}
												?>