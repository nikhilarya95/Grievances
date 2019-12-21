

<?php
include_once("config.php");
/*if(isset($_POST['submit_email']))
{
    $id=$_POST['id'];
    $email=$_POST['email'];
    $mob=$_POST['mob'];
    $status=0;
     $success="";
    $otp=rand(100000,999999);
    $query=mysqli_query("insert into register(id,mob,email,otp,status) values('$id','$mob','$email','$otp','$status')");
    echo $query;
        if($query)
        {
    $to=$email;
    $msg= "Thanks for new Registration.";   
    $subject="Email verification (kongu.ac.in)";
    $headers .= "MIME-Version: 1.0"."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
    $headers .= 'From:Kongu Engineering <kongu.ac.in>'."\r\n";
            
    $ms.="<html></body><div><div>Dear,</div></br></br>";
    $ms.="<div style='padding-top:8px;'>Please Enter This OTP for Verification</div>
    <div style='padding-top:10px;'>$otp</div>
    </div>
    </body></html>";
    mail($to,$subject,$ms,$headers);
    $success=1;
    
    
    }
    else
    {
    echo "<script>alert('Data not inserted');</script>";
    }
}*/
 ?>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>



























<?php include('header.php');?>

<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
           body {
            background-color:rgba(0, 148, 143, 1);}</style>
<title>registraton form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    .w{
    width: 33%;
    padding-right: 20px;
    }
    .fon{
        font-size:15px;
    }
    </style>
    
</head>
<body >
<div style="background-color:#2F94CF;">

</div>
<div id="ver" style="margin-top:3%;" class="container-fluid ">
<p style="color:red;font-size:15px;margin-left:20%;">* Parents should enter ward register Id</p>
<div class="col-md-9  py-4 ">
<?php echo form_open('user/user1','id="form1"');?>

    <div style=";margin-left:45%;font-size:15px;" class="form-group "  >
    
    
        <div class="form-row">
        
        <div class="col-sm-4">
           <select class="form-control"style="height:34px;font-size:15px;" id="" name="usr" value= set_value(usr)>
           <option>User</option>
          <option value="Student">Student</option>
          <option value="Faculty">Faculty</option>
          <option value="Staff">Staff</option>
          <option value="Parents">Parents</option>
          <option value="Alumni">Alumni</option>
          <option value="Employer">Employer</option>
          </select>
</div>

           <div class="col-sm-4">
              <?php echo form_input(['class'=>'form-control fon','name'=>'id','placeholder'=>'Register No./FID/Employer Id']); ?>
           </div>
           </div><div style="float:left;"><?php echo form_error('usr') ?></div><div style="padding-left:34%;"><?php echo form_error('id') ?></div>
           </br>
           
           <div class="form-row">
           <div class="col-sm-4"> 
                   <?php echo form_input(['class'=>'form-control fon','name'=>'mob','placeholder'=>'Mobile Number']); ?>
           </div>
           
           
                 <div class="col-sm-4"> <?php echo form_input(['class'=>'form-control fon','name'=>'email','placeholder'=>'Email']); ?>
           </div>
           </div><div style="float:left;"><?php echo form_error('mob') ?></div><div style="padding-left:34%;"><?php echo form_error('email') ?></div>
           </br>
           
           <div class="form-row">
           <div style="margin-left:20%;" class="col-sm-1">
       <input style="font-size:15px;width:150px;"  class=" btn btn-info"name="submit_email" type=submit  onClick="verify();" value='Verify Email '>
       </div>
       </div>
      
</div>
</form>
 </div>
</div>




   
      

<script>

function verify()
{
    
    if(isset($_POST['submit_email']))
{
    document.getElementById("ver").style.visibility="hidden";
    document.getElementById("ottp").style.visibility="visible";
}
}
function verif()
{

    document.getElementById("ottp").style.visibility="hidden";
}


</script>
</body>
</html>