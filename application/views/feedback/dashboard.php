<?php include('header.php');?>


<?php 
    // Setting up connection with database Geeks 
    $connection = mysqli_connect('localhost', 'root',"",'kec1'); 
      
    // Check connection 
    if (mysqli_connect_errno()) 
    { 
        echo "Database connection failed."; 
    } 
      

    // query to fetch Username and Password from 
    // the table geek 
   $query = "SELECT Gid FROM grievancesdetails"; 
    $que1="SELECT	Gsolution FROM grievancesdetails where Gsolution =''";
   $que2="SELECT	Gsolution FROM grievancesdetails where Gsolution !=''";
   $stu1 = "SELECT User FROM userverification inner join grievancesdetails on userverification.Uemail=grievancesdetails.Uemail where User='Student' AND Gsolution=''"; 
   $stu2 = "SELECT User FROM userverification inner join grievancesdetails on userverification.Uemail=grievancesdetails.Uemail where User='Student'"; 
   $stu3 = "SELECT User FROM userverification inner join grievancesdetails on userverification.Uemail=grievancesdetails.Uemail where User='Student' AND Gsolution!=''"; 
   $fac1 = "SELECT User FROM userverification inner join grievancesdetails on userverification.Uemail=grievancesdetails.Uemail where User='Faculty' AND Gsolution=''"; 
   $fac2 = "SELECT User FROM userverification inner join grievancesdetails on userverification.Uemail=grievancesdetails.Uemail where User='Faculty'"; 
   $fac3 = "SELECT User FROM userverification inner join grievancesdetails on userverification.Uemail=grievancesdetails.Uemail where User='Faculty' AND Gsolution!=''"; 
   
   $par1 = "SELECT User FROM userverification inner join grievancesdetails on userverification.Uemail=grievancesdetails.Uemail where User='Parents' AND Gsolution=''"; 
   $par2 = "SELECT User FROM userverification inner join grievancesdetails on userverification.Uemail=grievancesdetails.Uemail where User='Parents'"; 
   $par3 = "SELECT User FROM userverification inner join grievancesdetails on userverification.Uemail=grievancesdetails.Uemail where User='Parents' AND Gsolution!=''"; 
   $staf1 = "SELECT User FROM userverification inner join grievancesdetails on userverification.Uemail=grievancesdetails.Uemail where User='Staff' AND Gsolution=''"; 
   $staf2 = "SELECT User FROM userverification inner join grievancesdetails on userverification.Uemail=grievancesdetails.Uemail where User='Staff'"; 
   $staf3 = "SELECT User FROM userverification inner join grievancesdetails on userverification.Uemail=grievancesdetails.Uemail where User='Staff' AND Gsolution!=''"; 
   $alum1 = "SELECT User FROM userverification inner join grievancesdetails on userverification.Uemail=grievancesdetails.Uemail where User='Alumni' AND Gsolution=''"; 
   $alum2 = "SELECT User FROM userverification inner join grievancesdetails on userverification.Uemail=grievancesdetails.Uemail where User='Alumni'"; 
   $alum3 = "SELECT User FROM userverification inner join grievancesdetails on userverification.Uemail=grievancesdetails.Uemail where User='Alumni' AND Gsolution!=''"; 
   
   
   
   $result = mysqli_query($connection, $query); 
    $result1 = mysqli_query($connection, $que1); 
    $result2 = mysqli_query($connection, $que2); 
    $resstu1 = mysqli_query($connection, $stu1); 
    $resstu2 = mysqli_query($connection, $stu2);
    $resstu3 = mysqli_query($connection, $stu3); 
    $resfac1 = mysqli_query($connection, $fac1); 
    $resfac2 = mysqli_query($connection, $fac2);
    $resfac3 = mysqli_query($connection, $fac3); 
    $respar1 = mysqli_query($connection, $par1); 
    $respar2 = mysqli_query($connection, $par2); 
    $respar3 = mysqli_query($connection, $par3); 
    $resstaf1 = mysqli_query($connection, $staf1); 
    $resstaf2 = mysqli_query($connection, $staf2); 
    $resstaf3 = mysqli_query($connection, $staf3); 
    $resalum1 = mysqli_query($connection, $alum1); 
    $resalum2 = mysqli_query($connection, $alum2); 
    $resalum3 = mysqli_query($connection, $alum3); 
    if ( $result1||$result||$result2|| $resstu1|| $resstu2|| $resstu3||$respar1||$respar2||$respar3||$resfac1||$resfac2||$resfac3 || $resstaf1 ||$resstaf2||$resstaf3||$resalum1||$resalum2||$resalum3) 
    { 
       $row = mysqli_num_rows($result); 
        $row1 = mysqli_num_rows($result1);
        $row2 = mysqli_num_rows($result2);
        $row3 = mysqli_num_rows($resstu1);
        $row4 = mysqli_num_rows($resstu2);
        $row5 = mysqli_num_rows($resstu3);
        $row6 = mysqli_num_rows($resfac1);
        $row7 = mysqli_num_rows($resfac2);
        $row8 = mysqli_num_rows($resfac3);

        $row9 = mysqli_num_rows( $resstaf1 );
        $row10 = mysqli_num_rows( $resstaf2 );
        $row11 = mysqli_num_rows( $resstaf3 );

        $row12 = mysqli_num_rows($respar1);
        $row13 = mysqli_num_rows($respar2);
        $row14 = mysqli_num_rows($respar3);
        $row15 = mysqli_num_rows($resalum1);
        $row16 = mysqli_num_rows($resalum2);
        $row17 = mysqli_num_rows($resalum3);
        mysqli_free_result($result); 
        mysqli_free_result($result1);
        mysqli_free_result($result2);  
        mysqli_free_result($resfac1);  
        mysqli_free_result($resfac2); 
        mysqli_free_result($resfac3); 
        mysqli_free_result($respar1);  
        mysqli_free_result($respar2); 
        mysqli_free_result($respar3); 
        mysqli_free_result($resstu1);  
        mysqli_free_result($resstu2); 
        mysqli_free_result($resstu3); 
        mysqli_free_result($resstaf1);  
        mysqli_free_result($resstaf2); 
        mysqli_free_result($resstaf3); 
        mysqli_free_result($resalum1);  
        mysqli_free_result($resalum2); 
        mysqli_free_result($resalum3); 
    } 
  
 
    mysqli_close($connection); 
?> 


















<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
 
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;

  border: none;
  outline: none;
  cursor: pointer;
  text-align:center;
  transition: 0.3s;
font-size:18px;
  width: 14%;
}


/* Change background color of buttons on hover */
.tab button:hover {
  background-color: white;
  border:0px;

}

/* Create an active/current tablink class */
.tab button.active {
  background-color: white;
  border:0px;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

/* Style the close button */
.topright {
  float: right;
  cursor: pointer;
  font-size: 28px;
}

.topright:hover {color: red;}
</style>
</head>
<body >
<div class="container">
<div class="col-sm-12">
<div class="form-row">

<!--<div class="col-sm-1 "style="margin-bottom:px;width:10px;">
            <select class="form-control"style="height:34px;font-size:15px;" id="sel" name="">
          <option> Login</option>
          <option  value="Dean" >Dean</option>
          <option value="Principal">Principal</option>
          <option value="HOD">HOD</option></select>
          </div>
        <button Style="color:white;"class="btn btn-danger" id="h"><a Style="color:white;text-decoration:none;" href="http://localhost:8080/kec1/user/login">Login</a>
</button>-->
      
      </div>
</div>
</div>
<div style="margin:8px;border-radius:6px;border:none;" class=" bg-info tab">
<button class="tablinks btn " onclick="dash(event, 'Home')" id="defaultOpen">Home</button>
  <button class="tablinks btn " onclick="dash(event, 'Student')" id="">Student</button>
  <button class="tablinks btn " onclick="dash(event, 'Faculty')">Faculty</button>
  <button class="tablinks btn" onclick="dash(event, 'Staff')">Staff</button>
  <button class="tablinks btn" onclick="dash(event, 'Parent')">Parents</button>
  <button class="tablinks btn" onclick="dash(event, 'Alumni')">Alumni</button>
  <button class="tablinks btn " onclick="dash(event, 'Employer')">Employer</button>
</div>

<!--<div class="col-sm-10"style="margin-left:0px;border:none;"id="Home" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright"></span>
  <div class="form-row">
<div Style="margin-left:5%; "class=" col-sm-9 py-2 ">
                    <div Style="width:100%; margin-left:10%;height:30%;"class=" circle card text-light bg-info shadow p-3 mb-5 bg-red rounded ">
                     
<div style=" margin-top:2%;text-align:center;"class="form-row">
                                <div Style="margin-left:3%; "class="col-sm-3 py-2 ">
                    <div Style="width:100%; height:90%;"class="card text-black bg-info shadow p-3 mb-5 bg-red rounded ">
                        <div class="card-body">
                            <div class="rotate">
                                <i class="fa fa-share fa-4x"></i>
                            </div>
                            <h1 class="text-uppercase">Pandding Grievances</h1>
                            <h1 class="display-4"><?php echo $row1;?></h1>
                        </div>
                    </div>
                </div>
                            <div Style="margin-left:3%; "class=" col-sm-3 py-2 ">
                    <div Style="width:100%; height:90%;"class="card text-black bg-info shadow p-3 mb-5 bg-red rounded ">
                        <div class="card-body">
                            <div id="hr" class="rotate">
                           
                                <i class="fa fa-share fa-4x"></i>
                            </div>
                            <h1 id ="hr" class="text-uppercase">Total Grievances</h1>
                            <h1 style="text-size:10%;" id ="hr" class="display-4"><?php echo $row;?></h1>
                        </div>
                    </div>
                </div>
                            <div Style="margin-left:4%; "class="col-sm-3 py-2 ">
                    <div Style="width:90%; height:90%;"class="card text-black bg-info shadow p-3 mb-5 bg-red rounded ">
                        <div class="card-body">
                            <div class="rotate">
                                <i class="fa fa-share fa-4x"></i>
                            </div>
                            <h1 class="text-uppercase">Solved Grievances</h6>
                            <h1 style="text-size:10%;" id ="hr" class="display-4"><?php echo $row2;?></h1>
                        </div>
                    </div>
                </div>
                </div>
            

                           
    
                    </div>
                </div>
            

</div>


</div>

<div style="margin-left:0px;border:none;"id="Student" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright"></span>
  <div class="form-row">
<div Style="margin-left:5%; "class=" col-sm-9 py-2 ">
                    <div Style="width:100%; margin-left:10%;height:30%;"class=" circle card text-light bg-info shadow p-3 mb-5 bg-red rounded ">
                     
<div style=" margin-top:2%;margin-left:10%;text-align:center;"class="form-row">
                                <div Style="margin-left:3%; "class="col-sm-3 py-2 ">
                    <div Style="width:100%; height:90%;"class="card text-black bg-info shadow p-3 mb-5 bg-red rounded ">
                        <div class="card-body">
                            <div class="rotate">
                                <i class="fa fa-share fa-4x"></i>
                            </div>
                            <h1 class="text-uppercase">Pandding Grievances</h1>
                            <h1 class="display-4"><?php echo $row3;?></h1>
                        </div>
                    </div>
                </div>
                            <div Style="margin-left:3%; "class=" col-sm-3 py-2 ">
                    <div Style="width:100%; height:90%;"class="card text-black bg-info shadow p-3 mb-5 bg-red rounded ">
                        <div class="card-body">
                            <div id="hr" class="rotate">
                           
                                <i class="fa fa-share fa-4x"></i>
                            </div>
                            <h1 id ="hr" class="text-uppercase">Total Grievances</h1>
                            <h1 style="text-size:10%;" id ="hr" class="display-4"><?php echo $row4;?></h1>
                        </div>
                    </div>
                </div>
                            <div Style="margin-left:4%; "class="col-sm-3 py-2 ">
                    <div Style="width:90%; height:90%;"class="card text-black bg-info shadow p-3 mb-5 bg-red rounded ">
                        <div class="card-body">
                            <div class="rotate">
                                <i class="fa fa-share fa-4x"></i>
                            </div>
                            <h1 class="text-uppercase">Solved Grievances</h6>
                            <h1 style="text-size:10%;" id ="hr" class="display-4"><?php echo $row5;?></h1>
                        </div>
                    </div>
                </div>
                </div>
            

                           
    
                    </div>
                </div>
            



</div>
  
</div>

<div  style="margin-left:px;margin-top:px;border:none;"id="Faculty" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright"></span>
  <div class="form-row">
<div Style="margin-left:5%; "class=" col-sm-9 py-2 ">
                    <div Style="width:100%; margin-left:10%;height:30%;"class=" circle card text-light bg-info shadow p-3 mb-5 bg-red rounded ">
                     
<div style=" margin-top:2%;margin-left:10%;text-align:center;"class="form-row">
                                <div Style="margin-left:3%; "class="col-sm-3 py-2 ">
                    <div Style="width:100%; height:90%;"class="card text-black bg-info shadow p-3 mb-5 bg-red rounded ">
                        <div class="card-body">
                            <div class="rotate">
                                <i class="fa fa-share fa-4x"></i>
                            </div>
                            <h1 class="text-uppercase">Pandding Grievances</h1>
                            <h1 class="display-4"><?php echo $row6;?></h1>
                        </div>
                    </div>
                </div>
                            <div Style="margin-left:3%; "class=" col-sm-3 py-2 ">
                    <div Style="width:100%; height:90%;"class="card text-black bg-info shadow p-3 mb-5 bg-red rounded ">
                        <div class="card-body">
                            <div id="hr" class="rotate">
                           
                                <i class="fa fa-share fa-4x"></i>
                            </div>
                            <h1 id ="hr" class="text-uppercase">Total Grievances</h1>
                            <h1 style="text-size:10%;" id ="hr" class="display-4"><?php echo $row7;?></h1>
                        </div>
                    </div>
                </div>
                            <div Style="margin-left:4%; "class="col-sm-3 py-2 ">
                    <div Style="width:90%; height:90%;"class="card text-black bg-info shadow p-3 mb-5 bg-red rounded ">
                        <div class="card-body">
                            <div class="rotate">
                                <i class="fa fa-share fa-4x"></i>
                            </div>
                            <h1 class="text-uppercase">Solved Grievances</h6>
                            <h1 style="text-size:10%;" id ="hr" class="display-4"><?php echo $row8;?></h1>
                        </div>
                    </div>
                </div>
                </div>
            

                           
    
                    </div>
                </div>
            




</div>
</div>
<div  style="margin-left:px;margin-top:px;border:none;"id="Staff" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright"></span>
  <div class="form-row">
<div Style="margin-left:5%; "class=" col-sm-9 py-2 ">
                    <div Style="width:100%; margin-left:10%;height:30%;"class=" circle card text-light bg-info shadow p-3 mb-5 bg-red rounded ">
                     
<div style=" margin-top:2%;margin-left:10%;text-align:center;"class="form-row">
                                <div Style="margin-left:3%; "class="col-sm-3 py-2 ">
                    <div Style="width:100%; height:90%;"class="card text-black bg-info shadow p-3 mb-5 bg-red rounded ">
                        <div class="card-body">
                            <div class="rotate">
                                <i class="fa fa-share fa-4x"></i>
                            </div>
                            <h1 class="text-uppercase">Pandding Grievances</h1>
                            <h1 class="display-4"><?php echo $row9;?></h1>
                        </div>
                    </div>
                </div>
                            <div Style="margin-left:3%; "class=" col-sm-3 py-2 ">
                    <div Style="width:100%; height:90%;"class="card text-black bg-info shadow p-3 mb-5 bg-red rounded ">
                        <div class="card-body">
                            <div id="hr" class="rotate">
                           
                                <i class="fa fa-share fa-4x"></i>
                            </div>
                            <h1 id ="hr" class="text-uppercase">Total Grievances</h1>
                            <h1 style="text-size:10%;" id ="hr" class="display-4"><?php echo $row10;?></h1>
                        </div>
                    </div>
                </div>
                            <div Style="margin-left:4%; "class="col-sm-3 py-2 ">
                    <div Style="width:90%; height:90%;"class="card text-black bg-info shadow p-3 mb-5 bg-red rounded ">
                        <div class="card-body">
                            <div class="rotate">
                                <i class="fa fa-share fa-4x"></i>
                            </div>
                            <h1 class="text-uppercase">Solved Grievances</h6>
                            <h1 style="text-size:10%;" id ="hr" class="display-4"><?php echo $row11;?></h1>
                        </div>
                    </div>
                </div>
                </div>
            

                           
    
                    </div>
                </div>
            

</div>


</div>

<div  style="margin-left:px;margin-top:px;border:none;"id="Parent" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright"></span>
  <div class="form-row">
<div Style="margin-left:5%; "class=" col-sm-9 py-2 ">
                    <div Style="width:100%; margin-left:10%;height:30%;"class=" circle card text-light bg-info shadow p-3 mb-5 bg-red rounded ">
                     
<div style=" margin-top:2%;margin-left:10%;text-align:center;"class="form-row">
                                <div Style="margin-left:3%; "class="col-sm-3 py-2 ">
                    <div Style="width:100%; height:90%;"class="card text-black bg-info shadow p-3 mb-5 bg-red rounded ">
                        <div class="card-body">
                            <div class="rotate">
                                <i class="fa fa-share fa-4x"></i>
                            </div>
                            <h1 class="text-uppercase">Pandding Grievances</h1>
                            <h1 class="display-4"><?php echo $row12;?></h1>
                        </div>
                    </div>
                </div>
                            <div Style="margin-left:3%; "class=" col-sm-3 py-2 ">
                    <div Style="width:100%; height:90%;"class="card text-black bg-info shadow p-3 mb-5 bg-red rounded ">
                        <div class="card-body">
                            <div id="hr" class="rotate">
                           
                                <i class="fa fa-share fa-4x"></i>
                            </div>
                            <h1 id ="hr" class="text-uppercase">Total Grievances</h1>
                            <h1 style="text-size:10%;" id ="hr" class="display-4"><?php echo $row13;?></h1>
                        </div>
                    </div>
                </div>
                            <div Style="margin-left:4%; "class="col-sm-3 py-2 ">
                    <div Style="width:90%; height:90%;"class="card text-black bg-info shadow p-3 mb-5 bg-red rounded ">
                        <div class="card-body">
                            <div class="rotate">
                                <i class="fa fa-share fa-4x"></i>
                            </div>
                            <h1 class="text-uppercase">Solved Grievances</h6>
                            <h1 style="text-size:10%;" id ="hr" class="display-4"><?php echo $row14;?></h1>
                        </div>
                    </div>
                </div>
                </div>
            

                           
    
                    </div>
                </div>
            



</div>
</div>

<div  style="margin-left:px;margin-top:0px;border:none;"id="Alumni" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright"></span>
  <div class="form-row">
<div Style="margin-left:5%; "class=" col-sm-9 py-2 ">
                    <div Style="width:100%; margin-left:10%;height:30%;"class=" circle card text-light bg-info shadow p-3 mb-5 bg-red rounded ">
                     
<div style=" margin-top:2%;margin-left:10%;text-align:center;"class="form-row">
                                <div Style="margin-left:3%; "class="col-sm-3 py-2 ">
                    <div Style="width:100%; height:90%;"class="card text-black bg-info shadow p-3 mb-5 bg-red rounded ">
                        <div class="card-body">
                            <div class="rotate">
                                <i class="fa fa-share fa-4x"></i>
                            </div>
                            <h1 class="text-uppercase">Pandding Grievances</h1>
                            <h1 class="display-4"><?php echo $row15;?></h1>
                        </div>
                    </div>
                </div>
                            <div Style="margin-left:3%; "class=" col-sm-3 py-2 ">
                    <div Style="width:100%; height:90%;"class="card text-black bg-info shadow p-3 mb-5 bg-red rounded ">
                        <div class="card-body">
                            <div id="hr" class="rotate">
                           
                                <i class="fa fa-share fa-4x"></i>
                            </div>
                            <h1 id ="hr" class="text-uppercase">Total Grievances</h1>
                            <h1 style="text-size:10%;" id ="hr" class="display-4"><?php echo $row16;?></h1>
                        </div>
                    </div>
                </div>
                            <div Style="margin-left:4%; "class="col-sm-3 py-2 ">
                    <div Style="width:90%; height:90%;"class="card text-black bg-info shadow p-3 mb-5 bg-red rounded ">
                        <div class="card-body">
                            <div class="rotate">
                                <i class="fa fa-share fa-4x"></i>
                            </div>
                            <h1 class="text-uppercase">Solved Grievances</h6>
                            <h1 style="text-size:10%;" id ="hr" class="display-4"><?php echo $row17;?></h1>
                        </div>
                    </div>
                </div>
                </div>
            

                           
    
                    </div>
                </div>
            




  </div>

</div>


<div  style="margin-left:70px;margin-top:;border:none;"id="Employer" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright"></span>
  
  </div>
-->



                     
<div class="col-lg-4 col-sm-4 col-md-4"></div>
<div class="col-sm-4 col-lg-4 col-md-4 col-4" style="text-align: center;margin-top:3%;font-size:15px" id="">
  <p><?php echo anchor('user/stu','Click here for your Grievances') ?>
</p>

  </div>
  
</div>




<script>
function dash(evt,Name) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(Name).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();



</script>



<script>
$(document).ready(function () {
    toggleFiel();
    $("#sel").change(function () {
        toggleFiel();
    });

});

function toggleFiel() {
    if ($("#sel").val() === "Dean")
    $("#h").show();
    else if($("#sel").val() === "Principal")
    $("#h").show();
    else if($("#sel").val() === "HOD")
    $("#h").show();
    else 
    $("#h").hide();
    
}
</script>
   
</body>
</html> 
