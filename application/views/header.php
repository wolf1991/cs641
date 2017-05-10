<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <title><?php echo $title ?></title>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo APP_URL ?>/favicon.ico" media="screen" />
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <link type="text/css" href="<?php echo APP_URL ?>/application/resources/carousel.css" rel="stylesheet">
  <style type="text/css">
    <?php include APP_PATH . 'application/resources/style.css.php'; ?>
  </style>
</head>
<body>
  <div class="modal fade" id="indexModal"></div>
  <div class="navbar-wrapper">
    <div class="container">
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
              <img alt="Brand" src="<?php echo APP_URL ?>/application/resources/EAlogoremove.png" width="50" height="50" />
            </a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery Guides <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">ART</a></li>
                  <li><a href="#">Photography</a></li>
                  <li><a href="#">Painting</a></li>
                </ul>
              </li>
              <li role="separator" class="divider"></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
            <?php
            if (isset($_SESSION['loggedin'])&&$_SESSION['loggedin']==1)
            { 
            ?>
              <li><a href="#">
                <span class="glyphicon glyphicon-user"></span> Welcome, <?php echo($_SESSION['name'])?></a>
              </li>
              <li><a href="<?php echo APP_URL ?>/home/response/logout" data-toggle="modal" data-target="#indexModal">
                <span class="glyphicon glyphicon-log-out"></span> Log out</a>
              </li>
            <?php
            } else {
            ?>
              <li><a href="<?php echo APP_URL ?>/home/signup" data-toggle="modal" data-target="#indexModal">
                <span class="glyphicon glyphicon-user"></span> Sign Up</a>
              </li>
              <li><a href="<?php echo APP_URL ?>/home/login" data-toggle="modal" data-target="#indexModal">
                <span class="glyphicon glyphicon-log-in"></span> Log in</a>
              </li>
            <?php
            }?>
            </ul>
          </div>
          
        </div>
      </nav>

    </div>
  </div>
  


