<!DOCTYPE html>
<html>
<head>
	<title>Acceso Publico</title>
	<meta charset="utf-8">
	 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/estilos.css">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style2.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/newstyle.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/boostrap.css">
</head>
<body onload="initMap()">
  <div class="container">
    <div id = access>
      <h1 class="display-3">Welcome to Tripda.com</h1>
      <h2 class="display-4">Search for a ride</h2>
      <div id = cuadro>
          <form  method="post">
          <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4"><label class="" for="exampleInputFrom">From</label>
          <input name="start" class="" type="text" id="start" placeholder="Start"></div>
          <div class="col-md-4"></div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4"><label class="" for="exampleInputTo">To</label>
          <input name="end" class="" type="text" class="form-control" id="end" placeholder="End"></div>
          <div class="col-md-4"></div>
          </div>
            <button id="rides" type="submit" class="btn btn-success"  name="register">
            Search
            </button>          
        </form>
      </div>
      <marquee behaviour=alternate scrolldelay=20><b>CARPOOL EASILY IN A FUN, SAFE AND ECONOMICAL WAY</b></marquee>
          <h3 class="display-4">Results for Rides that matches with your criteria:</h3>
          <div class="rwd" >
          <div class="rwd_auto">
            <table id="table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Start</th>
                  <th>End</th>
                </tr>
              </thead>
              <?php foreach ($list as $key): ?>
            <tr class="success">
            <td><?php echo $key->name_ride?></td>
            <td><?php echo $key->start?></td>
            <td><?php echo $key->end?></td>
            </tr>
              <?php endforeach ?>
            </table>
          </div>
        </div>
        <div id="map"></div>     
      <form>
        <div class="form-group">
          <label for="exampleInputFile">Already an user?</label>
          <a class="bt btn-link" href="proyecto.html">Login Here</a>
        </div>
      </form>
    </div>
  </div> 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/principal.js"></script>
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8CHqwmIqI0RSiTVWt4S1q7WKAEAO8BQg&libraries=places&callback=initAutocomplete" async defer></script>
</body>
</html>