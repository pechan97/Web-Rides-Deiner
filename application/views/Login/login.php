<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyecto</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style1.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/estilos.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/boostrap.css">
</head>
<body>
  <div class="container">
   <div id = login>
     <form class="" action="<?php echo base_url()."index.php/Login/authenticate"?>" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input id="usuario" type="text" class="form-control" placeholder="UserName" name="username">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input id="contraseña" type="password" class="form-control" placeholder="Password" name="password">
      </div>
      <div class="form-group">
        <label for="exampleInputFile">Not an user?</label>
        <a class="bt btn-link" href="registro.html">Register Here</a>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1" id="mesage"><?php echo $error;?></label>
      </div>
      <button id="etiquetaA" type="submit" class="btn btn-success"  name="register">
      Login
   </button>
    </form>
  </div>
</div> 
</body>
</html>