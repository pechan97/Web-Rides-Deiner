<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/estilos.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/newstyle.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/boostrap.css">
</head>
<body>
<?php
      if(isset($_SESSION['user'])){
           $user = $_SESSION['user'];
      }
       ?>
       <script type="text/javascript">
    function confirmDelete() {
        return confirm('Are you sure you want to delete this ride?');
    }
</script>
  <script type="text/javascript">
    function confirmLogout() {
        return confirm('Are you sure to logout?');
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
        <li><a href="<?php echo base_url().'Settings/show_settings'?>"><span class="icon-cogs"></span>Settings</a></li>
        <li><a href="<?php echo base_url().'Login'?>" onclick= "return confirmLogout();"><span class="icon-cogs"></span>Logout</a></li>
      </ul>
    </nav>
  </header>
  <div class="container">
    <div id="caja"> 
      <form  action="<?php echo base_url().'Dashboard/get_rides'?>" method="post">
        <div class="row">
          <div class="col-xs-8 col-md-4">
            <label for="exampleTxt">Dashboard</label>
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
        <div class="row">
          <div class="col-xs-4 col-md-4">
            <label for="exampleInput">My Rides</label>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-12">
            <label for="exampleInput">Your current list of Rides</label>
          </div>
        </div>
      <div class="rwd" >
        <div class="rwd_auto">
          <table id="tabla">
            <thead>
              <tr>
                <th>Name</th>
                <th>Start</th>
                <th>End</th>
                <th>Actions</th>
              </tr>
            </thead>
            <?php foreach ($ride as $rides): ?>
            <tr class="success">
            <td><?php echo $rides->name_ride?></td>
            <td><?php echo $rides->start?></td>
            <td><?php echo $rides->end?></td>
            <td><a  href="<?php echo base_url().'EditRides/show_rides/'.$rides->id?>" id="<?php echo $rides->days?>" class="daysquery">Edit</a> - <a href="<?php echo base_url().'EditRides/deleteride/'.$rides->id?>"  onclick= "return confirmDelete();">Delete</a></td>
            </tr>
            <?php endforeach; ?>
          </table>
        </div>
      </div>
      <a href="<?php echo base_url().'Rides/show_rides'?>" class="col-xs-1 col-md-1 btn btn-primary">+</a>
       </form>
    </div>
  </div>
</body>
</html>