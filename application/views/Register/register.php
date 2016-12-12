<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style3.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/estilos.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/boostrap.css">
</head>
<body>
 <script> 
      function solonumeros(e)
{
   var keynum = window.event ? window.event.keyCode : e.which;
   if ((keynum == 8) || (keynum == 46))
        return true;
    return /\d/.test(String.fromCharCode(keynum));
}
      </script> 
  <div class="container">
    <div id = caja>
      <form class="" action="<?php echo base_url().'Register/registerUser'?>" method="post">
       <div class="form-group">
        <label for="exampleInputName">First Name</label>
        <input id="nombre" type="text" class="form-control" placeholder="Your First Name" name="first_name">
      </div>
      <div class="form-group">
        <label for="exampleLastName">Last Name</label>
        <input id="apellido" type="text" class="form-control" placeholder="Your Last Name" name="last_name">
      </div>
      <div class="form-group">
        <label for="examplePhone">Phone</label>
        <input id="telef" type=text size="15" class="form-control" placeholder="Your Phone" name="phone" onkeypress="return solonumeros(event);">
      </div>
      <div class="form-group">
        <label for="exampleUser">Username</label>
        <input id="user"  type="text" class="form-control" placeholder="Your Username" name="username">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input id="pass"  type="password" class="form-control" placeholder="Create a Password" name="password">
      </div>
      <label for="exampleInputPassword2">Repeat Password</label>
      <input id="pass2"  type="password" class="form-control" placeholder="Repeat your Password" name="repeat_pass">
      <div class="form-group">
        <label for="exampleInputFile">Already an user?</label>
        <a class="bt btn-link" href="<?php echo base_url().'Login/'?>">Login Here</a>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1" id="mesage"><?php echo $error;?></label>
      </div>
      <button id="rides" type="submit" class="btn btn-success"  name="register">
      Register
   </button>
    </form>
  </div>
</div> 
</body>
</html>