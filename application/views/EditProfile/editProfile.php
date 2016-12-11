<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" >
  </head>
  <body>
      <?php
      if(isset($_SESSION['user'])){
           $user = $_SESSION['user'];
      }
       ?>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <main class="demo-main mdl-layout__content">
    <div class="demo-container mdl-grid">
    <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
    <div class="cont demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
      <span class="mdl-layout-title">Edit Profile<i class="material-icons md-30">create</i></span>
  </header>
  <div class="iconocar">
   <img src="<?php echo base_url(); ?>assets/img/logo7.png" alt="" class="imagen"/>
   </div>
   <div class="name">
        Profile Name:
        <?php
        if ($_SESSION['user'] === null) {
            redirect('Login/');
        }else{
           echo $user['nickname'];
        }
        ?>
   </div>
   <hr class="edit-hr">
   <div class="principal-container">
  <div class="options-con">
    <div class="space">
      <a  href="<?php echo base_url()."ChangePassword/show_changePassword"?>" class="mdl-checkbox__label btn-other">    <i class="material-icons">vpn_key</i> Change Password</a>
    </div>
    <div class="space">
      <a href="<?php echo base_url()."ChangePersonalData/show_changePersonalData"?>" class="mdl-checkbox__label btn-other">
      <i class="material-icons">person</i>Change Personal Data</a>
    </div>
    <div class="space">
      <a  href="<?php echo base_url()."FirstLog/show_editlog"?>" class="mdl-checkbox__label btn-other">
      <i class="material-icons">create</i>Change Nickname and Car color</a>
    </div>
  </div>
 </div>
 <form class="" action="<?php echo base_url()."Mapa/show_mapa"?>" method="post">
   <div class="btn nicknamediv spaceUp">
   <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
      GO TO MAP
    </button>
 </form>
</div>
</div>
    </div>
    </main>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/material.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/query.js"></script>
  </body>
</html>
