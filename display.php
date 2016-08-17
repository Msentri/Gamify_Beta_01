<?php session_start(); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mediasoftpro Gamify - Display</title>
    <link href="css/bootswatch/paper/main.css" type="text/css" rel="stylesheet">
</head>
<body>
    <header>
        <a class="sr-only" href="#content">Skip to main content</a>
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="../" class="navbar-brand">Gamify</a>
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="navbar-main">
                     <ul class="nav navbar-nav navbar-right">
                         <li><a class="bold" target="_blank" href="http://www.mediasoftpro.com/wiki/jugnoon-gamify-for-php.aspx">Documentation</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div style="padding:10px 0px 15px 0px;">
                       <a href='/' title="">
                          <img src='images/logo.png' alt="" />
                       </a>
                    </div>
                </div>
                <div class="col-lg-8">
                   
                </div>
            </div>
        </div>
        
    <div class="container">
        <div class="navbar navbar-inverse">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-collapse collapse navbar-inverse-collapse" id="navbar-collapse-1">
                <ul id="tabs1_lsec" class="nav navbar-nav"><li><a href="index.html">Home</a></li>
                    <li><a href="manage.html">Manage</a></li>
                    <li><a href="simulate.html">Simulate</a></li>
<!--                    <li><a href="display.html">Profile</a></li>-->
                </ul>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <h2>Gamify Management Application</h2>
    <hr />
    <h3>Display events for user :-> <strong>mediasoftpro</strong> with userid <strong>1</strong></h3>
    <hr />
    <div class="row">
        <div class="col-md-12">
            <!-- Gamify Angular Js Application -->
            <div ng-app="gamifyapp">
              <div ng-view>loading...</div>
            </div>
        </div>
    </div>

</div>
   
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                Footer Section
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <a href="/" class="logo">
                        <img alt="" class="img-responsive" src="images/mkit.png">
                    </a>
                </div>
                <div class="col-md-7">
                    <p class="mini-text">&copy; Copyright © 2015 by Mediasoftpro. All Rights Reserved.</p>
                </div>
                <div class="col-md-4">
                    <nav>
                        <ul>
                            <li><a class="mini-text" href='#'>
                                Terms of use</a></li>
                            <li><a class="mini-text" href='#'>
                                Privacy</a></li>
                            <li><a class="mini-text" href='#'>
                                Sitemap</a></li>
                           <li><a class="mini-text" href='#'>
                                Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
    <script type="application/javascript">

        var UserID = <?php  echo $_SESSION['user_id']; ?>;

    </script>
<!-- Angular JS -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.10/angular.min.js"></script>
<script src="https://code.angularjs.org/1.3.10/angular-route.min.js"></script>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Angular JS Application For Gamify Management -->
<script src="app/js/core.js"></script>
<script src="app/js/plupload.js"></script>
<script src="app/js/display.js"></script>

</body>
</html>