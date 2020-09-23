

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
        

<link rel="stylesheet" href="<?=base_url();?>assets/css/stu.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    
</head>
<body >
<div id="ver"  class="container-fluid userDetail_msg">
    
    <div class="userDetail">
        <p>* Parents should enter ward register Id</p>
        <?php echo form_open('user/user1','id="form1"');?>

        <div  class="form-group"  >
        
            <div class="userDetail_type">
                <select class="form-control " id="" name="usr" value= set_value(usr)>
                    <option>User</option>
                    <option value="Student">Student</option>
                    <option value="Faculty">Faculty</option>
                    <option value="Staff">Staff</option>
                    <option value="Parents">Parents</option>
                    <option value="Alumni">Alumni</option>
                    <option value="Employer">Employer</option>
                </select>
                <?php echo form_error('usr') ?>
            </div>

            <div class="userDetail_id">
                <?php echo form_input(['class'=>'form-control fon','name'=>'id','placeholder'=>'Register No./FID/Employer Id']); ?>
                <?php echo form_error('id') ?>
            </div>
           
            <div class="userDetail_mobile"> 
                <?php echo form_input(['class'=>'form-control fon','name'=>'mob','placeholder'=>'Mobile Number']); ?>
                <?php echo form_error('mob') ?>
            </div>
           
            <div class="userDetail_email"> 
                <?php echo form_input(['class'=>'form-control fon','name'=>'email','placeholder'=>'Email']); ?>
                <?php echo form_error('email') ?>
            </div>
        
            <div  class="userDetail_button">
                <input   class=" btn btn-info"name="submit_email" type=submit  onClick="verify();" value='Verify Email '>
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