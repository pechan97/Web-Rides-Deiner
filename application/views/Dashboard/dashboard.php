<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/estilos.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/boostrap.css">
</head>
<body>
  <header>
    <div class="menu_bar">
      <a href="#" class="bt-menu"><span class="icon-list-numbered"></span>Menú</a>
    </div>
    <nav>
      <ul>
        <li><a href="dashboard.html"><span class="icon-newspaper"></span>Dashboard</a></li>
        <li><a href="agregarRides.html"><span class="icon-truck"></span>Rides</a></li>
        <li><a href="settings.html"><span class="icon-cogs"></span>Settings</a></li>
      </ul>
    </nav>
  </header>
  <div class="container">
    <div id="caja"> 
      <form>
        <div class="row">
          <div class="col-xs-8 col-md-4">
            <label for="exampleTxt">Dashboard ></label>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-12">
            <label id="bienvenido">Welcome</label>
            
            <input type=image src="img\perfil.jpg" width="25" height="50">
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
      </form>
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
            <tbody id="users_table">
            </tbody>
          </table>
        </div>
      </div>
      <a href="agregarRides.html" class="col-xs-1 col-md-1 btn btn-primary">+</a>
    </div>
  </div> 
  <script type="text/javascript" src= "js/principal.js"></script>
</body>
</html>