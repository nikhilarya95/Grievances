<?php include('header.php');?>
<html>
<head>
   <link rel="stylesheet" href="<?=base_url();?>assets/css/passchange.css">

</head>
<body>
<div class="rows">
            <div class="col-lg-4">
               <?php echo form_open('user/reenterpass1','id="form" style="margin-top:5%;margin-bottom:15%;"');?>
        <form >
  <fieldset>
  <div class="form-group">
      <label for="InputEmail1">Email address</label>
      <?php echo  form_input(['class'=>"form-control",'type'=>"email",'value'=>set_value('cemail'),'id'=>"bor_3",'placeholder'=>"eg:-xyz@kongu.edu",'onblur'=>"ema();",'onfocus'=>"cl3();",' name'=>"cemail"]);?>
     
      <?php echo form_error('cemail') ?>
    </div>
 <div class="form-group">
      
      <?php echo form_label('Current Password','InputPassword1');?>
      <?php echo form_password(['class'=>'form-control','placeholder'=>"Enter Current Password",'id'=>"exampleInputpassword1",'name'=>"pass1"]);?>
      <?php echo form_error('pass1') ?>
     
    </div>
    <div class="form-group">
      
      <?php echo form_label('New Password','InputPassword2');?>
      <?php echo form_password(['class'=>'form-control','placeholder'=>"Enter New password",'id'=>"exampleInputpassword2",'name'=>"pass2"]);?>
      <?php echo form_error('pass2') ?>
       
       
       <?php echo form_label('Re-enter Password','InputPassword2');?>
       <?php echo form_password(['class'=>'form-control','placeholder'=>"Re-enter Password",'id'=>"exampleInputpassword3",'name'=>"pass3"]);?>
       <?php echo form_error('pass3') ?>
      
      
    </div>
   
    </fieldset>
    <?php echo form_button(['class'=>"btn btn-info",'type'=>"submit",'content'=>"Submit"]);?>
    <?php echo form_button(['class'=>"btn btn-info",'type'=>"button",'content'=>"Back"]);?>
    
 
</form>
</div>
<div class="col-lg-4">
             </div>
</div>
</body>
</html>
<?php include ('footer.php');?>