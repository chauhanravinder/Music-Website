<?php

require_once("vars.php");
ob_start();
?>

<div class="col-md-4 login-pop">
												<div id="loginpop"> <a href="#" id="loginButton"><span>Login <i class="arrow glyphicon glyphicon-chevron-right"></i></span></a><a class="top-sign" href="#" data-toggle="modal" data-target="#myModal5"><i class="fa fa-sign-in"></i></a>
														<div id="loginBox">  
												<form action="" method="post" id="loginForm">
																	<fieldset id="body">
																		<fieldset>
																			  <label for="email">User Name</label>
																			  <input type="text" name="email" id="email">
																		</fieldset>
																		<fieldset>
																				<label for="password">Password</label>
																				<input type="password" name="password" id="password">
																		 </fieldset>
														<input type="submit" name="login" id="login" value="Sign in">
																		
																	</fieldset>
																
														 </form>
                                                         
                                                         
                                                          
													</div>
												</div>

											</div>
                                            
                                      <?php
									
									   if(isset($_POST["login"]))
									   {
										   $email=$_POST["email"];
										   $pass=$_POST["password"];
										  
										   $conn=mysqli_connect(host,usern,pass,dbname) or die("Error in connection" .mysqli_connect_error());
										  
 									$q= "select * from signup where email='$email' and password='$pass'";                        
					            	   $res=mysqli_query($conn,$q) or die("Error in query" .mysqli_error($conn));
										   $count=mysqli_affected_rows($conn);
										   mysqli_close($conn);
										  
										   if($count==1)
										   {
											  
														   $x=mysqli_fetch_array($res);
															$_SESSION["name"]=$x[0]; 
															$_SESSION["email"]=$x[2];
															
															if($x[4]=="admin")
															
															{
																$_SESSION["utype"]=$x[4];
																				   
									                      
																header("location:admin.php");			
															}
															else
															{
																header("location:user.php");
															}

											   
											}
											else
											{
												print "incorrect username/password";
											}
								   
									    }
									   ?>