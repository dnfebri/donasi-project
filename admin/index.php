<?php 
session_start();
// jika session user ada maka akan di alihkan ke file home.php
if (isset($_SESSION['username'])) {
     header('location:home.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UMSIDA Peduli | Administrator</title>x
    <link href="../css/bootstrap.min.css" rel="stylesheet">
   	<style type="text/css">
    	#form-login {
    		margin-top: 90px;
    		background-color: #fff;
    		font-family: Menlo, Monaco, Consolas, "Courier New", monospace;
    		border-top: 10px solid #F04F57;
        display: none;
    	}
    	.icons {
    		padding-top: 6px;
    	}
    </style>
  </head>
  <body style="background-color: #333333;">
    <div class="container-fluid">
      <div class="col-xs-12 col-md-4 col-md-offset-4" id="form-login">
          <form class="form-signin" style="padding: 30px;" method="post" id="login-form">
          <h1>Administrator</h1><hr />
          <div id="pesan">
          <!-- error will be shown here ! -->
          </div>
          <div class="form-group form-group-lg has-feedback">
             <span class="icons glyphicon glyphicon-user form-control-feedback"></span>
             <input style="border-radius: 0px;" class="form-control" placeholder="Username" name="username" id="username" type="text">
          </div> 
          <div class="form-group form-group-lg has-feedback">
              <span  class="icons glyphicon glyphicon-lock form-control-feedback"></span>
              <input style="border-radius: 0px;" class="form-control" placeholder="Password" name="password" id="password" type="password">            
          </div> 
          <hr />
          <div class="form-group">
              <button type="submit" id="submit" class="btn btn-lg btn-block btn-default" >
      			<span class="glyphicon glyphicon-log-in"></span> Masuk 
  			</button> 
          </div>  
        </form>
      </div>
    </div>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/admin.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>

