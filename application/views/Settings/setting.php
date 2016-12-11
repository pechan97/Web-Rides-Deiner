<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" >
  </head>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <main class="demo-main mdl-layout__content">
    <div class="demo-container mdl-grid">
    <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
    <div class="cont demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
        <header class="mdl-layout__header">
        <div class="mdl-layout__header-row" style="padding-left: 2%;">
        <div class="mdl-grid aline">
  <div class="mdl-cell mdl-cell--4-col tamano">
  <a href="<?php echo base_url()."Mapa/show_mapa"?>" id="span" class="material-icons arrow">arrow_back</a>
  </div>
  <div class="mdl-cell mdl-cell--4-col titlemap tamano">
    <span class="mdl-layout-title">Settings</span>
  </div>
  <div class="mdl-cell mdl-cell--4-col tamano">
  <i class="material-icons line2">settings</i>
  </div>
</div>
   </div>
        </header>
    <div class="container">
    <div class="form-container">
    <form class="" action="" method="post">
    <div class="prinset">
    <div class="lineone lineall">
    </div>
    <div>
    <a class="sinli" href="<?php echo base_url()."EditProfile/show_editprofile"?>">
    <div class="mdl-grid aline">
  <div class="mdl-cell mdl-cell--2-col mitadico">
  <i class="material-icons color">mode_edit</i>
  </div>
  <div class="mdl-cell mdl-cell--2-col mitad">
    <span class="mdl-layout-title titEdit">Edit Profile</span>
  </div>
  </div>
  </a>
    </div>
    <div class="linetwo lineall">
    </div>
    <div class="linethree lineall">
    </div>
    <a class="sinli" href="<?php echo base_url()."Login/logout"?>">
    <div class="mdl-grid aline">
  <div class="mdl-cell mdl-cell--2-col mitadico">
  <i class="material-icons color">exit_to_app</i>
  </div>
  <div class="mdl-cell mdl-cell--2-col mitad">
    <span class="mdl-layout-title titEdit">Logout</span>
  </div>
  </div>
  </a>
      <div class="linetwo lineall">
    </div>
    <div class="linethree lineall">
    </div>
      <div class="mdl-grid aline">
  <div class="mdl-cell mdl-cell--2-col mitadico">
  <i class="material-icons color">favorite</i>
  </div>
  <div class="mdl-cell mdl-cell--2-col mitad">
    <span class="mdl-layout-title titEdit">Favorites</span>
  </div>
  </div>
      <div class="linetwo lineall">
    </div>
    <div class="mdl-grid alinedel">
  <a class="sinli" href="<?php echo base_url()."Delete/deleteaccount"?>">
  <div class="mdl-cell mdl-cell--2-col deleteico">
  <i class="material-icons icodel">delete</i>
  </div>
  </a>
  <a class="sinli" href="<?php echo base_url()."Delete/deleteaccount"?>">
  <div class="mdl-cell mdl-cell--2-col delete">
    <span class="mdl-layout-title titEdit">Delete Account</span>
  </div>
  </a>
  </div>
    </div>
    </div>
    </form>
</div>
</div>

      </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/knockout.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/momentjs.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/material.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/query.js"></script>

  </body>
</html>
