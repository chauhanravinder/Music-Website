

                   
         <?php
		 session_start();
		 
		 
		 if(!isset($_SESSION["utype"]))
header("location:error.php");
           require_once("vars.php");
		  
		//	  if(!isset($_SESSION["name"]) or $_SESSION["utype"]!="admin");
		//	 {
          //        header("location:error.php");
 			// }
		     
			 $usid=$_GET["usid"];  
		     $conn=mysqli_connect(host,usern,pass,dbname) or die ("Error in connection" .mysqli_connect_error());
				$q="delete from usersongs where songid = $usid";
				mysqli_query($conn,$q) or die("Error in query" .mysqli_error($conn));
               $count=mysqli_affected_rows($conn);
               mysqli_close($conn);
               if($count=1)
               {
              header("location:useruploads.php");
			   }
			   else
			   {
	          print"problem while deleting Song";
               }

			   
			   
		 
		 ?>
            		
					
			