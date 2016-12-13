<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>AgregarRides</title>
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
			<div class="row">
				<div class="col-xs-12 col-md-4">
					<label for="exampleTxt">Dashboard > Rides > Add</label>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-md-12">
				<?php foreach ($name as $user): ?>
					<label id="bienvenido">Welcome: <?php echo $user->first_name?></label>
					<?php endforeach; ?>
					<input id="img" type=image src="<?php echo base_url(); ?>assets/img/perfil.jpg">
				</div>
			</div>
			<form class="form-horizontal" action="<?php echo base_url().'Rides/registerRide'?>" method="post">
				<div class="form-group">
					<label for="exampleInputFile" class="col-sm-2 control-label">Ride Name</label>
					<div class="col-sm-6">
						<input name="ridename" type="text" class="form-control" id="rideName" placeholder="Ride Name">
					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputFile" class="col-sm-2 control-label">Start From</label>
					<div class="col-sm-6">
						<input name="start" type="text" class="form-control" id="start" placeholder="Start">
					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputFile" class="col-sm-2 control-label">End</label>
					<div class="col-sm-6">
						<input name="end" type="text" class="form-control" id="end" placeholder="End">
					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputFile" class="col-sm-2 control-label">Description</label>
					<div class="col-sm-6">
						<input name="description" class="form-control" id="descrip" placeholder="Add here the description of the ride">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<label for="exampleInputFile">When</label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-md-6">
						<label>Departure</label>
					</div>
					<div class="col-xs-6 col-md-6">
						<label>Estimated Arrival</label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-md-6">
						<input name="timeone"  id="departure" type="text" class="form-control" placeholder="7:00AM"> 
					</div>
					<div class="col-xs-6 col-md-6">
						<input name="timetwo" id="estimatedArrival" type="text" class="form-control" placeholder="8:30AM">
						<br/>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-8 col-md-2">
						<label for="Days">Select Days</label>
					</div>
				</div>
				<div id="checkbox" ">
					<div  class="checkbox">
						<label><input name="pregunta[]"  type="checkbox" value="Monday">Monday</label>
					</div>
					<div class="checkbox">
						<label><input name="pregunta[]" type="checkbox" value="Tuesday">Tuesday</label>
					</div>
					<div class="checkbox">
						<label><input name="pregunta[]" type="checkbox" value="Wednesday">Wednesday</label>
					</div>
					<div class="checkbox">
						<label><input name="pregunta[]" type="checkbox" value="Thursday">Thursday</label>
					</div>
					<div class="checkbox">
						<label><input name="pregunta[]" type="checkbox" value="Friday">Friday</label>
					</div>
					<div class="checkbox">
						<label><input name="pregunta[]" type="checkbox" value="Saturday">Saturday</label>
					</div>
				</div>
				<div class="form-group">
                   <label for="exampleInputEmail1" id="mesage"><?php echo $error;?></label>
                </div>
				<button id="rides" type="submit" class="btn btn-success"  name="register">
                   Save
                </button>
			</form>
		</div>
	</div> 
</body>
</html>