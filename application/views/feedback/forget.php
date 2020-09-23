<?php include ('header.php');?>
<html>
    <head>
    <style>
     #form{
     box-shadow: 5px 10px 18px #888888;
     
  padding: 6px;
    margin-top: 10%;
}
    </style>
      <script>
        fuction back()
        {
          window.history.back();
        }
        </script>
    <link href="<?= base_url();?>assets/css/bootstrap-4.2.1/css/bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url();?>assets/css/bootstrap-4.2.1/js/bootstrap.min.js" rel="stylesheet">
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  
  
    </head>
    <body>
        <div class="rows">
          <div class="col-lg-4">
             </div>
            <div class="col-lg-4">
            

        <?php echo form_open('user/reenterpass','id="form" style="margin-top:10%;margin-bottom:89px;"');?>
  <fieldset>
 <div class="form-group">
      <label for="InputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"name="femail">
      <?php echo form_error('femail') ?>
    </div>
    <div class="form-group">
      <label for="InputPassword1">Security Quetion</label>
      <select class="form-control" id="sel1"name="sq1" >
        <option>Select One</option>
        <option value="what is your pet name?">what is your pet name?</option>
        <option value="what is your favorate city name?">what is your favorate city name?</option>
        <option value="c">what is your first teacher name?</option>
        <option value="q">what is your favorate colour name?</option>
        <option value="r" >what is your favorate book name?</option>
      </select><?php echo form_error('sq1') ?>
      <input type="text"class="form-control" placeholder="Answer..."name="ans1"><?php echo form_error('ans1') ?> <br>
      <select class="form-control" id="sel1"name="sq2" >
        <option>Select One</option>
        <option value="what is your pet name?">what is your pet name?</option>
        <option value="what is your favorate city name?">what is your favorate city name?</option>
        <option value="c">what is your first teacher name?</option>
        <option value="q">what is your favorate colour name?</option>
        <option value="r" >what is your favorate book name?</option>
      </select><?php echo form_error('sq2') ?>
      
      <input type="text"class="form-control" placeholder="Answer..."name="ans2"> <?php echo form_error('ans2') ?>
    </div>
   
    </fieldset>
    
    <button type="submit" class="btn btn-info" >Submit</button>
    <button type="submit" class="btn btn-info" >Back</button>
 

</div>
<div class="col-lg-4">
             </div>
</div>
<div class="container">
 

 
  <div class="modal fade col-sm-12" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
      
     
        <div class="modal-header">
          <h4 class="modal-title"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
       
      </div>
    </div>
  </div>
  
</div>

<?php include('footer.php');?>
</body>
</html>
