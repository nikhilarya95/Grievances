<?php include("header.php");?>
<html>
<head>

</head>
<body>
<div  style="margin-top:20px" class="container-fluid ">
<p style="color:green;margin-left:27%">OTP send to your Email, please verify in the registered Email-Id</p>
<div class="col-md-8 py-4 "style="margin-left:20%;font-size:15px;">

   <?php echo form_open('user/fotp','id="form2"');?>
    <div id="ottp" class="form-group "  >
       
           <div class="form-row">
           <div class="col-md-3">
           <h4 style="text-align:center;">Please Enter Your OTP</h4>
           </div>
           </div>
         
           <div style="margin-bottom:2%;" class="col-sm-3">
              <?php echo form_input(['class'=>'form-control fon','name'=>'otp','placeholder'=>'Enter OTP']); ?>
           </div>
          
          
        
           <div class="col-sm-2">
           <input style="font-size:15px;width:100px;margin-left:px;margin-top:px;" class=" btn btn-info" type=submit onClick="" name='submit_otp'>

        
           </div>
           </div>
           
</div>


 </div>
 <div style="margin-left:39%;"><?php echo form_error('otp') ?></div>
</div>
</body>
</html>