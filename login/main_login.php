<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location:../home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" media="screen">

  </head>

  <body>
    <!-- here start the nav-bar -->
      <nav class="navbar navbar-default">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">切换导航</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="../index.html">My Love Story</a>
          </div>
          <div class="collapse navbar-collapse" id="navbar-collapse-1">
              <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Home</a></li>
                  <li class="disabled"><a href="#">Smart Menu</a></li>
                  <li class="disabled"><a href="#">Draw & Guess</a></li>
                  <li class="dropdown disabled">
                      <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Me <span class="caret"></span> </a>
                      <ul class="dropdown-menu">
                          <li><a href="#">Log out</a> </li>
                      </ul>
                  </li>
              </ul>
          </div>
      </nav>

    <div class="container">
        <form class="form-signin" name="form1" method="post" action="checklogin.php">
        <h2 class="form-signin-heading" align="center">请登录</h2>
        <input name="myusername" id="myusername" type="text" class="form-control" placeholder="Username" autofocus>
        <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Password">
        <!-- The checkbox remember me is not implemented yet...
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        -->
        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
        <div id="message"></div>
      </form>


    </div> <!-- /container -->

    <!-- The AJAX login script -->
    <script src="../js/login.js"></script>

  </body>
</html>
