

<?php
	// Check connection

			session_start();
		
		

			// Create connection
			
			
			
			
       
		$conn = new mysqli($servername, $username, $password, $database);
			
			$loginuser = $_POST['loginName'];
			$loginpass = $_POST['pass'];
			
			
				$sql= "SELECT * FROM SIGN_UP WHERE USERNAME_ID = '$loginuser' AND PASSWORD = '$loginpass'";
				
				
				$result = $conn->query($sql);

if ($result->num_rows > 0){
    // output data of each row
     $i=0;
   
    while($row = $result->fetch_assoc()) {
         
          $data[$i] =$row["ROLE"];
   
      
         if($data[$i]==1){
             
         echo "Logged in as admin";
             
         }
          if($data[$i]==0){
             
             echo "Logged in as user";
         }
          
          
          $i++;
        
        
    }
} 
		
		
				mysqli_close($conn);



?>

