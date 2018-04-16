<ul class="nav nav-pills nav-stacked custom-nav">
						<li class="active"><a href="index.php"><i class="lnr lnr-home"></i><span>Home</span></a></li>
						<li><a href="top10.php"><i class="fa fa-arrow-circle-o-up"></i> <span>Top 10</span></a>
                           <ul class="sub-menu-list">
       
                 	
	
                                                    						<?php
								require_once("vars.php");
								
						$conn=mysqli_connect(host,usern,pass,dbname) or die("Error in connection " . mysqli_connect_error());	
						$q="select * from category";
						$res=mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
						$cnt=mysqli_affected_rows($conn);
						if($cnt==0)
						{
							print "No category available";
						}
						else
						{
							while($x=mysqli_fetch_array($res))
							{
							if($x[0]!="Single track")
                               { 
                               
                              print "<li><a href='punjabi10.php?scid=$x[1]'>$x[0]</a></li>";
								
                      
							
							   }
							}
						}
							?>
								
								
                              
                            </ul>
                      </li>
				
                   
				<li><a href="songs.php">
					
					<i class="lnr lnr-music-note"></i> <span>Songs</span></a>
                            <ul class="sub-menu-list">
							
							<?php
				    	require_once("vars.php");
						$conn=mysqli_connect(host,usern,pass,dbname) or die("Error in connection " . mysqli_connect_error());	
						$q="select * from category";
						$res=mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
						$cnt=mysqli_affected_rows($conn);
						if($cnt==0)
						{
							print "No song available";
						}
						else
						{
							while($ans=mysqli_fetch_array($res))
							{
								print "<li><a href='punjabi.php?scid=$ans[1]'>$ans[0]</a></li>";
							}
								
							}
						?>
								
								
								
                              
                            </ul>
                        </li>
                        
                        
                        
						
										
						<li><a href="artist.php"><i class="lnr lnr-users"></i> <span>Artists</span></a></li>
                        
                        
						<li><a href="album.php">
					
					<i class="	fa fa-dot-circle-o"></i> <span>Albums</span></a>
                            <ul class="sub-menu-list">
													<?php
				    	require_once("vars.php");
						$conn=mysqli_connect(host,usern,pass,dbname) or die("Error in connection " . mysqli_connect_error());	
						$q="select * from category";
						$res=mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
						$cnt=mysqli_affected_rows($conn);
						if($cnt==0)
						{
							print "No song available";
						}
						else
						{
							while($ans=mysqli_fetch_array($res))
							{
								if($ans[0]!="Single track")
                               { 
                               
								print "<li><a href='balbum.php?acid=$ans[1]'>$ans[0]</a></li>";
							   }
							}
								
							}
						?>
							
								
								
								
                              
                            </ul>
                        </li>	
                        
                     
                               
                        <?php 
                        print'<li><a href="usersong.php"><i class="fa fa-star-o"></i> <span>User uploads</span></a></li>';
						?> 
						
						
					</ul>