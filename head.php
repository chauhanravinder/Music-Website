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
										  header("location:profile.php?un=$un");
									   
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