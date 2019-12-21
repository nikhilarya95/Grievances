<?php include('header.php');?>
<html>

<body>
<?php 
 $connection = mysqli_connect('localhost', 'root',"",'kec1'); 
    // Setting up connection with database Geeks 
    $query = "SELECT s_id FROM  grievancesdetails where s_id=(select max(s_id) from  grievancesdetails);"; 
      
    // Execute the query and store the result set 
    $result = mysqli_query($connection, $query); 

  
     if($result->num_rows>0)
      {

          $row=$result-> fetch_assoc();
          $id=$row["s_id"];
          
              echo"<div Style='text-align:center;'><h1 class=col-sm-12>Thank You For Grievances</h1><h3 Style='color:green;'>Your Grievances ID is Gid_00".$row["s_id"]."</h3>";

         
      }
      else{
          echo"0";

      }
      ?>
      
    

</body>
</html>
