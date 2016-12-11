<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Change Password</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" >

  </head>
  <body>
    <?php
    if (isset($_SESSION['user'])) {
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
    <div class="mdl-layout__header-row" style="padding-left: 2%;">

  <a href="<?php echo base_url().'EditProfile/show_editprofile'?>" id="span" class="material-icons arrow">arrow_back</a>
  <!--Title-->
  <span  class="mdl-layout-title">Change Password</span>
</div>

  </header>

    <div class="form-container-pass">
      <form action="<?php echo base_url().'ChangePassword/updatePassword'?>" method="post">
        <div class="formdiv container-change">
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" type="password" id="pass" name ="password1">
      <label class="mdl-textfield__label" for="pass">Type your Password</label>
      <div >
        <i class="material-icons">vpn_key</i>
      </div>
    </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" type="password" id="pass" name ="password2">
      <label class="mdl-textfield__label" for="pass">Type your new Password</label>
      <div >
        <i class="material-icons">vpn_key</i>
      </div>
    </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" type="password" id="pass" name ="password3">
      <label class="mdl-textfield__label" for="pass">Repeat your password</label>
      <div >
        <i class="material-icons">vpn_key</i>
      </div>
    </div>
    <div class="btn nicknamediv spaceUp">
       <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
         Change
       </button>
     </div>
     <div class="error">
         <label for=""><?php echo $error;?></label>
     </div>
     </div>
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
