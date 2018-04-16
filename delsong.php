
                   
         <?php
		 
		 	session_start();
			require_once("vars.php");	  
		//	  if(!isset($_SESSION["name"]) or $_SESSION["utype"]!="admin");
		//	 {
          //        header("location:error.php");
 			// }
		     
			 $songid=$_GET["sid"];  
		     $conn=mysqli_connect(host,usern,pass,dbname) or die ("Error in connection" .mysqli_connect_error());
					  $q="delete from music where songid = $songid";
				mysqli_query($conn,$q) or die("Error in query" .mysqli_error($conn));
               $count=mysqli_affected_rows($conn);
               mysqli_close($conn);
               if($count=1)
               {
              header("location:delete.php");
			   }
			   else
			   {
	          print"problem while deleting song";
               }

			   
			   
		 
		 ?>
            		
					
			 
						
					
              
		 