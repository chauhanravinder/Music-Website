<?php
session_start();
require_once("vars.php");
ob_start();
?>


			<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="sign-grids">
								<div class="sign">
                                
						 		  <div class="sign-left">
                                 <p></p>     <p></p>    <p></p>  
                               <img src="images/s.png" />
                                  </div>
									<div class="sign-right">
										<form action="#" method="post" name="form1" onsubmit="return xyz()">

											<h3>Create your account </h3>
											<input type="text" name="name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required />
										  <input type="text" name="mobile" value="Mobile number" onkeypress="return isNumberKey(event)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required>
											<input type="text" name="email" value="Email id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required>	
											<input type="password" name="pass" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required>
											<input name="submit" type="submit" value="CREATE ACCOUNT" >
										</form>
							  </div>
									<div class="clearfix"></div>								
								</div>
								<p></p>
							</div>
						</div>
					</div>
				</div>
			</div>
            <?php
			
            if(isset($_POST["submit"]))
            {
               $name=$_POST["name"];
               $mobile=$_POST["mobile"];
               $email=$_POST["email"];
               $pass=$_POST["pass"];
               
               $conn=mysqli_connect(host,usern,pass,dbname) or die ("Error in connection" .mysqli_connect_error());
               $q="insert into signup values('$name','$mobile','$email','$pass','normal')";
               
               mysqli_query($conn,$q) or die("Error in query" .mysqli_error($conn));
               $count=mysqli_affected_rows($conn);
               mysqli_close($conn);
               if($count==1)
               {
				   print "<script type=\"text/javascript\">".
					"alert('Thank you for Sign up');".
					"</script>";
               }
               else
               {
                print "<script type=\"text/javascript\">".
					"alert('Try Again');".
					"</script>";
               }
            }
            
            ?>
