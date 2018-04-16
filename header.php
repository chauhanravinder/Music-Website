<?php
require_once("vars.php");
ob_start();
?>
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
									<!-- //search-scripts -->
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
											<div class="col-md-4 login-pop">
												<div id="loginpop"> <a href="#" id="loginButton"><span>Profile <i class="	glyphicon glyphicon-user"></i></span></a>
														<div id="loginBox">  
												<form action="" method="post" id="loginForm">
																	<fieldset id="body">
																		<fieldset>
					 														 
					<input type="submit" name="profile" id="profile" value="Profile">														
					<input type="submit" name="change" id="change" value="Change Password">	 
                     <input type="submit" name="logout" id="logout" value="Logout">
                                                                        </fieldset>
																	</fieldset>
															
														 </form>
                                                        
													</div>
                                                    
												</div>

											</div>
                                            
                                            
                               
                                       <?php
									    $un=$_SESSION["email"];
									   if(isset($_POST["profile"]))
									  
								        {
										  header("location:profile.php");
									   
									   }
									   else if(isset($_POST["change"]))
									   {
										    if(isset($_SESSION["utype"]))
										     {
                                              header("location:change2.php");
											 }
											else
											{ 
										   header("location:change.php");
									        }
									   }
									   else if(isset($_POST["logout"]))
									   {
										  
										   header("location:index.php");
													session_start();
													
													session_destroy();
							            }
	  
									   ?>
                                            
										<div class="clearfix"> </div>
								</div>
							<!-------->
						</div>
					<div class="clearfix"></div>
				</div>