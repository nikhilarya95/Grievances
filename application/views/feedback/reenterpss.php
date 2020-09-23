<?php include('header.php');?>
<html>
<head>
<style>
 #form{
     box-shadow: 5px 10px 18px #888888;
     width:30%;
  padding: 6px;
  margin-left:30%;
    margin-top: 5%;
}

</style>
</head>
<body>
<form method="post" id="form">
        <div class="modal-body">
        
    <input name="Npass1" type="text" class="form-control" placeholder="Enter New Password"><br>
    <input name="Npass2" type="text"class="form-control" placeholder="Confirm Password">
        </div>
        
        
        <div class="modal-footer">
        <?php echo form_button(['class'=>"btn btn-info",'type'=>"submit",'content'=>"Submit"]);?>
        
          <!--<button styele="float:left;"type="button" class="btn btn-danger" name="repss_submit" data-dismiss="modal">Close</button>-->
        </div>
        </form>
</body>

</html>