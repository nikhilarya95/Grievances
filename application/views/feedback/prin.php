<?php include ('header.php'); ?>
<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
           /* body {
            background-color:rgba(0, 148, 143, 1);} */
            .princ{
                margin-top:2%;}
                table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  

}
table {
  display:block;
  height : 200px;
  overflow-y : scroll;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  width: 200px;
  height:40px;
}

tr:nth-child(even) {
  background-color: #dddddd;
} 
                </style>
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="<?php echo base_url();?>assets/jquery.js"></script>
  <script src="https://localhost/kec1/application/views/jquery.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
    
<script>
$(document).ready(function () {
    toggleFields();
    $("#fetchval").change(function () {
        toggleFields();
    });

});

function toggleFields() {
    
    if ($("#fetchval").val() === "College")
        $("#ab").show();
    else
        $("#ab").hide();
        if ($("#fetchval").val() === "Department")
        $("#bc").show();
    else
        $("#bc").hide();
        if ($("#fetchval").val() === "Hostel")
        $("#cd").show();
    else
        $("#cd").hide();
        if ($("#fetchval").val() === "Other")
        $("#de").show();
    else
        $("#de").hide();
}
</script>
<script>
$(document).ready(function()
                  {
                    $("#fetchval").on('change',function()
                                   {
                             var keyword = $(this).val();
                            
                             $.ajax(
                              {
                                url:' <?php echo base_url();?>application/views/feedback/fetch.php',
                                 type:'POST',
                                 data :'request='+keyword,
                                 beforeSend:function()
                                 {
                                     $("#record1").html('working on...'); 
                                         
                                 },
                                 success:function(data)
                                 {
                                   $("#record1").html(data);
                                 },
                              });
                      });
                    });
                $(document).ready(function()
                  {
                    $("#abc").on('change',function()
                                   {
                             var keyword = $(this).val();
                            
                             $.ajax(
                              {
                                url:'<?php echo base_url();?>application/views/feedback/fetch1.php',
                                 type:'POST',
                                 data :'request='+keyword,
                                 beforeSend:function()
                                 {
                                     $("#record1").html('working on...'); 
                                         
                                 },
                                 success:function(data)
                                 {
                                   $("#record1").html(data);
                                 },
                              });
                      });
                    });
                    $(document).ready(function()
                  {
                    $("#bcd").on('change',function()
                                   {
                             var keyword = $(this).val();
                            
                             $.ajax(
                              {
                                 url:'<?php echo base_url();?>application/views/feedback/fetch1.php',
                                 type:'POST',
                                 data :'request='+keyword,
                                 beforeSend:function()
                                 {
                                     $("#record1").html('working on...'); 
                                         
                                 },
                                 success:function(data)
                                 {
                                   $("#record1").html(data);
                                 },
                              });
                      });
                    });
                    $(document).ready(function()
                  {
                    $("#cde").on('change',function()
                                   {
                             var keyword = $(this).val();
                            
                             $.ajax(
                              {
                                url:'<?php echo base_url();?>application/views/feedback/fetch1.php',
                                 type:'POST',
                                 data :'request='+keyword,
                                 beforeSend:function()
                                 {
                                     $("#record1").html('working on...'); 
                                         
                                 },
                                 success:function(data)
                                 {
                                   $("#record1").html(data);
                                 },
                              });
                      });
                    });
            

                    $(document).ready(function()
                  {
                    $("#sbms").on('change',function()
                                   {
                             var keyword = $(this).val();
                            
                             $.ajax(
                              {
                                url:'<?php echo base_url();?>application/views/feedback/fetch1.php',
                                 type:'POST',
                                 data :'request='+keyword,
                                 beforeSend:function()
                                 {
                                     $("#record1").html('working on...'); 
                                         
                                 },
                                 success:function(data)
                                 {
                                   $("#record1").html(data);
                                 },
                              });
                      });
                    });
            
                    $(document).ready(function()
                  {
                    $("#ses").on('change',function()
                                   {
                             var keyword = $(this).val();
                            
                             $.ajax(
                              {
                                url:'<?php echo base_url();?>application/views/feedback/fetch1.php',
                                 type:'POST',
                                 data :'request='+keyword,
                                 beforeSend:function()
                                 {
                                     $("#record1").html('working on...'); 
                                         
                                 },
                                 success:function(data)
                                 {
                                   $("#record1").html(data);
                                 },
                              });
                      });
                    });

                    $(document).ready(function()
                  {
                    $("#sccs").on('change',function()
                                   {
                             var keyword = $(this).val();
                            
                             $.ajax(
                              {
                                 url:'<?php echo base_url();?>application/views/feedback/fetch1.php',
                                 type:'POST',
                                 data :'request='+keyword,
                                 beforeSend:function()
                                 {
                                     $("#record1").html('working on...'); 
                                         
                                 },
                                 success:function(data)
                                 {
                                   $("#record1").html(data);
                                 },
                              });
                      });
                    });

                    $(document).ready(function()
                  {
                    $("#scfs").on('change',function()
                                   {
                             var keyword = $(this).val();
                            
                             $.ajax(
                              {
                                 url:'<?php echo base_url();?>application/views/feedback/fetch1.php',
                                 type:'POST',
                                 data :'request='+keyword,
                                 beforeSend:function()
                                 {
                                     $("#record1").html('working on...'); 
                                         
                                 },
                                 success:function(data)
                                 {
                                   $("#record1").html(data);
                                 },
                              });
                      });
                    });
                    $(document).ready(function()
                  {
                    $("#ssh").on('change',function()
                                   {
                             var keyword = $(this).val();
                            
                             $.ajax(
                              {
                                 url:'<?php echo base_url();?>application/views/feedback/fetch1.php',
                                 type:'POST',
                                 data :'request='+keyword,
                                 beforeSend:function()
                                 {
                                     $("#record1").html('working on...'); 
                                         
                                 },
                                 success:function(data)
                                 {
                                   $("#record1").html(data);
                                 },
                              });
                      });
                    });

                  
                    </script>
<?php
$s=$this->session->userdata('Authorisedpt');



   
            if($s!='Principal')
             {?>
<script>   
                $(document).ready(function(){$("#hrt").hide();});</script>

 <?php
             }  
             
             if($s!='DSBMS')
             {?>
<script>   
                $(document).ready(function(){$("#dsbms").hide();});</script>

 <?php
             }  
             if($s!='DSES')
             {?>
<script>   
                $(document).ready(function(){$("#dses").hide();});</script>

 <?php
             }  
             if($s!='DSCCS')
             {?>
<script>   
                $(document).ready(function(){$("#dsccs").hide();});</script>

 <?php
             }  
             if($s!='DSCFS')
             {?>
<script>   
                $(document).ready(function(){$("#dscfs").hide();});</script>

 <?php
             }  
             if($s!='DSSH')
             {?>
<script>   
                $(document).ready(function(){$("#dssh").hide();});</script>

 <?php
             }  
             else{

             }
             
?>


</head>

<body onload="accc();">

<div class="col-sm-12 ">
<div class="form-row">
<div class="col-sm-1 "style="margin-left:85%;margin-top:1%;width:10px;">
<button  Style="color:white;float:left;"class="btn btn-danger" id=""><a Style="color:white; font-size:15px;text-decoration:none;" href="<?php echo base_url();?>user/login">Logout</a>
</button>
</div>
</div>
</div>
<div class="col-sm-10 ">
<div style="font-size:15px;margin-left:5%;" class="form-group">
<form method="post" >
       
                <div id="hrt" class="form-row">
                    <div style="" class=" col-sm-2">
                        <select class="form-control"style="height:34px;font-size:15px;" id="fetchval" name="ctg">
                            <option>Category</option>
                            <option value="College">College</option>
                            <option value="Department">Department</option>
                            <option value="Hostel">Hostel</option>
                            <option value="Libary">Libary</option>
                            <option value="Transport Office">Transport Office</option>
                            <option value="Other">Other</option>  
                        </select>
                    </div>
              
                   
                         <div id="ab"  class="col-sm-2" >
                            <select class="form-control"style="height:34px;font-size:15px;;" id="abc" name="sc">
                                <option>Specific Category</option>
                                <option value="General">General</option>
                                <option value="P&T Cell">P&T Cell</option>
                                <option value="Physical Edu">Physical Edu</option>
                                <option value="Dispensary">Dispensary</option>
                                <option value="Kongu CRS">Kongu CRS</option>
                                <option value="IIP Cell">IIP Cell</option>
                                <option value="Administrative office">Administrative office</option>
                                <option value="COE Office">COE Office</option>
                                <option value="Examination Section">Examination Section</option>
                                <option value="CCD(Curriculum Dev.)">CCD(Curriculum Dev.)</option>
                                
                                <option value="Other">Other</option>
                            </select>
                        </div>
                  
                       <div id="bc" class="col-sm-2">
                            <select class="form-control"style="height:34px;font-size:15px;" id="bcd" name="sc">
                                <option>SpecificCategory</option>
                                <option value="Civil Engineering">Civil Engineering</option>
                                <option value="Mechanical Engineering">Mechanical Engineering</option>
                                <option value="Mechatronics Engineering">Mechatronics Engineering</option>
                                <option value="Automobile Engineering">Automobile Engineering</option>
                                <option value="EEE">EEE</option>
                                <option value="E nad I">E and I</option>
                                <option value="ECE">ECE</option>
                                <option value="CSE">CSE</option>
                                <option value="IT">IT</option>
                                <option value="Chemical Engineering">Chemical Engineering</option>
                                <option value="Food Technology">Food Technology</option>
                                <option value="Management Studies">Management Studies</option>
                                <option value="Computer Application">Computer Application</option>
                                <option value="Computer Technology(UG)">Computer Technology(UG)</option>
                                <option value="Computer Technology(PG)">Computer Technology(PG)</option>
                                <option value="Mathematics">Mathematics</option>
                                <option value="Physics">Physics</option>
                                <option value="Chemistry">Chemistry</option>
                                <option value="English">English</option>
                                <option value="other">other</option>
                               </select>
                            </div>
                   
                 
          
                           <div id="cd" class="col-sm-2">
                              <select class="form-control"style="height:34px;font-size:15px;" id="cde" name="sc">
                                    <option>SpecificCategory</option>
                                    <option value="Dheeran">Dheeran</option>
                                    <option value="Ilango">Ilango</option>
                                    <option value="Bharathi">Bharathi</option>
                                    <option value="Valluvar">Valluvar</option>
                                    <option value="Kamban">Kamban</option>
                                    <option value="Ponnar">Ponnar</option>
                                    <option value="Sankar">Sankar</option>
                                    <option value="Vaigai">Vaigai</option>
                                    <option value="Bhavani">Bhavani</option>
                                    <option value="Kaveri">Kaveri</option>
                                    <option value="Amaravathi">Amaravathi</option>
                                    <option value="other">other</option>
                             </select>
                          </div>
                       </div>
             <div  class="col-sm-12">
                  <div  class="row">
                    <div id="dsbms"style="" class=" col-sm-2">
                        <select class="form-control"style="height:34px;font-size:15px;" id="sbms" name="ctg">
                            <option value="Department">Department</option>
                            <option value="Civil Engineering">Civil Engineering</option>
                            <option value="Mechanical Engineering">Mechanical Engineering</option>
                            <option value="Mechatronics Engineering">Mechatronics Engineering</option>
                            <option value="Automobile Engineering">Automobile Engineering</option> 
                        </select>
                    </div>
                    <div id="dses" style="" class=" col-sm-2">
                         <select class="form-control"style="height:34px;font-size:15px;" id="ses" name="ctg">
                            <option value="Department">Department</option>
                            <option value="EEE">EEE</option>
                            <option value="E and I">E and I</option>
                          </select>
                    </div>
                    <div id="dsccs"style="" class=" col-sm-2">
                        <select class="form-control"style="height:34px;font-size:15px;" id="sccs" name="ctg">
                            <option value="Department">Department</option>
                            <option value="ECE">ECE</option>
                            <option value="CSE">CSE</option>
                            <option value="IT">IT</option>
                         </select>
                    </div>
                    <div id="dscfs"style="" class=" col-sm-2">
                        <select class="form-control"style="height:34px;font-size:15px;" id="scfs" name="ctg">
                            <option value="Department">Department</option>
                            <option value="Chemical Engineering">Chemical Engineering</option>
                            <option value="Food Technology">Food Technology</option>
                       </select>
                    </div>
                <div id="dssh"style="" class=" col-sm-2">
                        <select class="form-control"style="height:34px;font-size:15px;" id="ssh" name="ctg">
                           <option value="Department">Department</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Physics">Physics</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="English">English</option>
                        </select>
                   </div>
                </div>
            </div>
        </form>
    </div> 
</div>
           <div class="container-fluid" >
                 <div class="col-sm-11" style="margin-left:10%;">         
                   
                      <div class="form-row">
                         <div class="col-sm-10">
                            <div class="table-responsive" id="record1" style="margin-left:">
                               <table class="col-sm-12" class="table table-striped ">
                                   <thead>        
                                       <tr>
                                          <th>User</th>
                                          <th>U_id</th>
                                          <th>G_id</th>
                                          <th>Grievances</th>
                                          <th>Category</th>
                                          <th>Sub Category</th>
                                          <th>G_Post_Date</th>
                                          <th>Solution</th>
                                      </tr>
                                  </thead>
  <?php 
  
    // Setting up connection with database Geeks 
    
    // Check connection 
    



   // $dpt=$this->input->post('ctg');
  /* if($_post['ctg']=='Hostel')
    {
    $query = "SELECT Usid,User,Gid,Grievance,Category,Scategory,GpostDate FROM userverification natural join grievancesdetails where Category= 'Hostel' ;"; 
   }
   else
   {
   $query = "SELECT Usid,User,Gid,Grievance,Category,Scategory,GpostDate FROM userverification natural join grievancesdetails where Category= 'Hostel' ;"; 
 //   $query = "SELECT Usid,User,Gid,Grievance,Category,Scategory,GpostDate FROM userverification natural join grievancesdetails where grievancesdetails.Category= '$dpt';"; 
    // Execute the query and store the result set */
    
    $connection = mysqli_connect('localhost', 'root',"",'kec1'); 
    if ($s=="Principal")
   {  $query = "SELECT Usid,User,Gid,Grievance,Category,Scategory,Gsolution,GpostDate FROM userverification natural join grievancesdetails; ";
    
     
     
   
    }
    elseif($s=="DSBMS")
    {
     
      $query = "SELECT Usid,User,Gid,Grievance,Category,Scategory,Gsolution,GpostDate FROM userverification natural join grievancesdetails where Scategory='Civil Engineering' OR Scategory='Mechanical Engineering'OR Scategory= 'Mechatronics Engineering' or Scategory=' Automobile Engineering' ;";
    }
    elseif($s=="DSES")
    {
      $query = "SELECT Usid,User,Gid,Grievance,Category,Scategory,Gsolution,GpostDate FROM userverification natural join grievancesdetails where Scategory='EEE' OR Scategory='E and I' ;";
    }
    elseif($s=="DSCCS")
    {
      $query = "SELECT Usid,User,Gid,Grievance,Category,Scategory,Gsolution,GpostDate FROM userverification natural join grievancesdetails where Scategory='ECE' OR Scategory='CSE'OR Scategory= 'IT' ;";
    }
    elseif($s=="DSCFS")
    {
      $query = "SELECT Usid,User,Gid,Grievance,Category,Scategory,Gsolution,GpostDate FROM userverification natural join grievancesdetails where Scategory='Chemical Engineering' OR Scategory='Food Technology' ;";
    }
    elseif($s=="DSSH")
    {
      $query = "SELECT Usid,User,Gid,Grievance,Category,Scategory,Gsolution,GpostDate FROM userverification natural join grievancesdetails where Scategory='Mathematics'or Scategory='Physics' or Scategory='Chemistry'or Scategory='English' ;";
    }
    elseif($s=="Libarian")
    {
      $query = "SELECT Usid,User,Gid,Grievance,Category,Scategory,Gsolution,GpostDate FROM userverification natural join grievancesdetails where Scategory='Libary' ;";
    }
    elseif($s=="Transport Officer")
    {
      $query = "SELECT Usid,User,Gid,Grievance,Category,Scategory,Gsolution,GpostDate FROM userverification natural join grievancesdetails where Scategory='Transport Office' ;";
    }
    else
    { 
      $query = "SELECT Usid,User,Gid,Grievance,Category,Scategory,Gsolution,GpostDate FROM userverification natural join grievancesdetails where Scategory='$s'; ";
   
     }
     $result = mysqli_query($connection,$query);     
    while($row=mysqli_fetch_assoc($result))
          {
             if($row["Category"]=='College'&& $s=='Principal')
            
            {
              echo" <form method='post' action='reply_sol'><tr><td>".$row["User"]."</td><td>".$row["Usid"]."</td><td>".$row["Gid"]."</td><td>".$row["Grievance"]."</td><td>".$row["Category"]."</td><td>".$row["Scategory"]."</td><td>".$row["GpostDate"]."</td><td><button type='button' class='btn btn-primary' name='sol1'  data-toggle='modal' data-target='#".$row["Gid"]."'>
            
          Accept</button>
            
          <input type='hidden' name='sol_val' value='".$row["Gid"]."'>
          
              <div class='container'>
 
            
 
              <div class='modal fade col-sm-12' id='".$row["Gid"]."'>
                <div class='modal-dialog'>
                  <div class='modal-content'>
                  
                 
                    <div class='modal-header'>
                      <h4 class='modal-title'></h4>
                      <button type='button' class='close' data-dismiss='modal'>&times;</button>
                    </div>
                   
                    
                    <div class='modal-body'>
                   
                <textarea name='sol'style='width:100%;height:300px;font-size:15px;' placeholder='".$row["Gid"]."'></textarea>
                    </div>
                    
                    
                    <div class='modal-footer'>
                    <input type='submit' name='sub'class='btn btn-info'value='submit'>
                      <button styele='float:left;'type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
                    </div>
                   
                  </div>
                </div>
              </div>
              
            </div></td>
              </tr> </form>";
            }
          elseif($s!='Principal'&&["Category"]=='College')
          {
            echo" <form method='post' action='reply_sol'><tr><td>".$row["User"]."</td><td>".$row["Usid"]."</td><td>".$row["Gid"]."</td><td>".$row["Grievance"]."</td><td>".$row["Category"]."</td><td>".$row["Scategory"]."</td><td>".$row["GpostDate"]."</td><td><button type='button' class='btn btn-primary' name='sol1'  data-toggle='modal' data-target='#".$row["Gid"]."'>
            
          Accept</button>
            
          <input type='hidden' name='sol_val' value='".$row["Gid"]."'>
          
              <div class='container'>
 
            
 
              <div class='modal fade col-sm-12' id='".$row["Gid"]."'>
                <div class='modal-dialog'>
                  <div class='modal-content'>
                  
                 
                    <div class='modal-header'>
                      <h4 class='modal-title'></h4>
                      <button type='button' class='close' data-dismiss='modal'>&times;</button>
                    </div>
                   
                    
                    <div class='modal-body'>
                   
                <textarea name='sol'style='width:100%;height:300px;font-size:15px;' placeholder='".$row["Gid"]."'></textarea>
                    </div>
                    
                    
                    <div class='modal-footer'>
                    <input type='submit' name='sub'class='btn btn-info'value='submit'>
                      <button styele='float:left;'type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
                    </div>
                   
                  </div>
                </div>
              </div>
              
            </div></td>
              </tr> </form>";
          }
            else{
              echo"<form method='post' action='reply_sol'><tr ><td>".$row["User"]."</td><td>".$row["Usid"]."</td><td>".$row["Gid"]."</td><td>".$row["Grievance"]."</td><td>".$row["Category"]."</td><td>".$row["Scategory"]."</td><td>".$row["GpostDate"]."</td><td>".$row["Gsolution"]."</td></tr>";
            }
          }
          echo "</table>";
          

          ?>
    
 


   </div>
</div>
</div>
</div>
</div>
           

          






     
           </body>




           
           <html>