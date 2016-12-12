<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Settings</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/estilos.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/newstyle.css">
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
  <header>
    <div class="menu_bar">
      <a href="#" class="bt-menu"><span class="icon-list-numbered"></span>Menú</a>
    </div>
    <nav>
      <ul>
        <li><a href="<?php echo base_url().'Dashboard/show_dashboard'?>"><span class="icon-newspaper"></span>Dashboard</a></li>
        <li><a href="<?php echo base_url().'Rides/show_rides'?>"><span class="icon-truck"></span>Rides</a></li>
        <li><a href="<?php echo base_url().'Settings/show_settings'?>""><span class="icon-cogs"></span>Settings</a></li>
      </ul>
    </nav>
  </header>
  <div class="container">
    <div id="caja"> 
      <div class="row">
        <div class="col-xs-12 col-md-4">
          <label for="exampleTxt">Dashboard > Settings</label>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-12">
        <?php foreach ($name as $user): ?>
          <label id="bienvenido">Welcome: <?php echo $user->first_name?></label>
          <?php endforeach; ?>
          <input type=image src="<?php echo base_url(); ?>assets/img/perfil.jpg" width="25" height="50">
        </div>
      </div>
      <form class="form-horizontal" action="<?php echo base_url().'Settings/updatePersonalData'?>" method="post">
       <?php foreach ($single_user as $user): ?>
      <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">First Name</label>
    <div class="col-sm-10">
      <input type="text" name="firstname" class="form-control" id="fullName" placeholder="First Name" value="<?php echo $user->first_name;?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Last Name</label>
    <div class="col-sm-10">
      <input type="text" name="lastname" class="form-control" id="speed" placeholder="Last Name" value="<?php echo $user->last_name;?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Phone</label>
    <div class="col-sm-10">
      <input type="text" name="phone" class="form-control" id="speed" placeholder="Phone" value="<?php echo $user->phone;?>" onkeypress="return solonumeros(event);">
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Speed Average</label>
    <div class="col-sm-10">
      <input type="text" name="speed" class="form-control" id="speed" placeholder="Speed" value="<?php echo $user->speed;?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">About me</label>
    <div class="col-sm-10">
        <input type="text" name="about" class="form-control" id="speed" placeholder="About You" value="<?php echo $user->about;?>">
    </div>
    <?php endforeach; ?>
    <div class="form-group">
        <label for="exampleInputEmail1" id="mesage"><?php echo $error;?></label>
      </div>
    <button id="etiquetaA" type="submit" class="btn btn-success"  name="register">
      Save
   </button>
  </div>
</form>
    </div>
  </div>
</body>
</html>
