<?php
  $include_css = $include_js = $content = '';

  $file = 'list.php';
  if(isset($_GET['section'])){
    $file = $_GET['section'].'.php';
  }
  include $file;
  $menuactive = isset($_GET['section']) ? $_GET['section'] : '';
  $menuactive2 = isset($_GET['type']) ? $_GET['type'] : '';
  $menuHome = $menuactive == 'home' ? ' menuItemActive': '';
  $menuFemale = $menuactive2 == 'female' ? ' menuItemActive ': '';
  $menuMale = $menuactive2 == 'male' ? ' menuItemActive ': '';
  $menuStylists = $menuactive2 == 'stylists' ? ' menuItemActive ': '';
  $menuSpecialist = $menuactive2 == 'specialist' ? ' menuItemActive ': '';
  $menuAbout = $menuactive == 'about' ? ' menuItemActive ': '';
  $menuApply = $menuactive == 'apply' ? ' menuItemActive ': '';
  $menuNews = $menuactive == 'news' ? ' menuItemActive ': '';
  $menuContact = $menuactive == 'contact' ? ' menuItemActive ': '';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coast Models | Model Management</title>
    <meta name="description" content="">
    <meta name="robots" content="noarchive">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico?v=8901">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="css/fonts.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css?v=901" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery.fileupload.css">
    <link rel="stylesheet" href="css/jquery.fileupload-ui.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">

    <?php echo $include_css; ?>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <!-- Footer - Start -->
    <nav class="navbar" style="z-index: 4;">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php
            if($_GET['section'] != 'home'){
              ?>
              <a class='navbar-brand' href='/'><img src='images/coast-logo-blue.png' height='80' width='auto'></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a style="<?php if($_GET['section']!='home') echo 'color:black'?>" class="<?php echo $menuHome?>" href="index.php?section=home">HOME</a></li>
                <li><a style="<?php if($_GET['section']!='male') echo 'color:black'?>" class="<?php echo $menuMale; ?>" href="index.php?section=talents&type=male">MALE</a></li>
                <li><a style="<?php if($_GET['section']!='female') echo 'color:black'?>" class="<?php echo $menuFemale; ?>" href="index.php?section=talents&type=female">FEMALE</a></li>
                <li><a style="<?php if($_GET['section']!='stylists') echo 'color:black'?>" class="<?php echo $menuStylists; ?>" href="index.php?section=talents&type=stylists">STYLISTS</a></li>
                <li><a style="<?php if($_GET['section']!='specialist') echo 'color:black'?>" class="<?php echo $menuSpecialist; ?>" href="index.php?section=specialist">SPECIALIST</a></li>
                <li><a style="<?php if($_GET['section']!='about') echo 'color:black'?>" class="<?php echo $menuAbout; ?>" href="index.php?section=about">ABOUT</a></li>
                <li><a style="<?php if($_GET['section']!='apply') echo 'color:black'?>" class="<?php echo $menuApply; ?>" href="index.php?section=apply">APPLY</a></li>
                <li><a style="<?php if($_GET['section']!='news') echo 'color:black'?>" class="<?php echo $menuNews; ?>" href="index.php?section=news">NEWS</a></li>
                <li><a style="<?php if($_GET['section']!='contact') echo 'color:black'?>" class="<?php echo $menuContact; ?> menucontact" href="index.php?section=contact">CONTACT</a></li>
              </ul>
              <ul class="iconssocial-home">
                <li style="margin: 10px;"><a href="https://www.facebook.com/" target="_blank" style="color:black"><i class="fa fa-facebook" aria-hidden="true" style="font-size:20px;"></i></a></li>
                <li style="margin: 10px;"><a href="https://www.twitter.com/" target="_blank" style="color:black"><i class="fa fa-twitter" aria-hidden="true" style="font-size:20px;"></i></a></li>
                <li style="margin: 10px;"><a href="https://www.pinterest.com/" target="_blank" style="color:black"><i class="fa fa-pinterest-p" aria-hidden="true" style="font-size:20px;"></i></a></li>
                <li style="margin: 10px;"><a href="https://www.instagram.com/" target="_blank" style="color:black"><i class="fa fa-instagram" aria-hidden="true" style="font-size:20px;"></i></a></li>
              </ul>

            </div><!-- /.navbar-collapse -->
            <?php
            } else{
              ?>
              <a class='navbar-brand' href='/'><img src='images/coast-logo-cream.png' height='80' width='auto'></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a style="color:#66cccc" class="<?php echo $menuHome?>" href="index.php?section=home">HOME</a></li>
                <li><a class="<?php echo $menuMale; ?>" href="index.php?section=talents&type=male">MALE</a></li>
                <li><a class="<?php echo $menuFemale; ?>" href="index.php?section=talents&type=female">FEMALE</a></li>
                <li><a class="<?php echo $menuStylists; ?>" href="index.php?section=talents&type=stylists">STYLISTS</a></li>
                <li><a class="<?php echo $menuSpecialist; ?>" href="index.php?section=specialist">SPECIALIST</a></li>
                <li><a class="<?php echo $menuAbout; ?>" href="index.php?section=about">ABOUT</a></li>
                <li><a class="<?php echo $menuApply; ?>" href="index.php?section=apply">APPLY</a></li>
                <li><a class="<?php echo $menuNews; ?>" href="index.php?section=news">NEWS</a></li>
                <li><a class="<?php echo $menuContact; ?> menucontact" href="index.php?section=contact">CONTACT</a></li>
              </ul>
              <ul style="float: right;list-style: none;display: block;margin-right:4%;position:relative;margin-top:-30px">
                <li style="margin: 10px;"><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true" style="font-size:20px;"></i></a></li>
                <li style="margin: 10px;"><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true" style="font-size:20px;"></i></a></li>
                <li style="margin: 10px;"><a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true" style="font-size:20px;"></i></a></li>
                <li style="margin: 10px;"><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" aria-hidden="true" style="font-size:20px;"></i></a></li>
              </ul>

            </div><!-- /.navbar-collapse -->
            <?php
          }
          ?>

      </div><!-- /.container-fluid -->
    </nav>
  <!-- Footer - End -->

      <?php echo $content; ?>

    <!-- Footer - Start -->
    <footer>

      <div class="container">
        <div class="footer-menu">
        </br>
          <div style="width:40%">
            <img src="images/coast-logo-cream.png" height="80" width="auto">
          </div>
          <div style="width:30%">
            <ul>
              <li><a class="menu-a" href="index.php?section=about">About Us</a></li>
              <li><a class="menu-a" href="index.php?section=became">Became</a></li>
              <li><a class="menu-a" href="index.php?section=contact">Contact Us</a></li>
              <li><a class="menu-a" href="index.php?section=privacy-policy">Privacy Policy</a></li>
              <li><a class="menu-a" href="index.php?section=terms">Terms</a></li>
            </ul>
          </div>
          <div style="width:30%">
            <ul>
              <li><a class="menu-a" href="index.php?section=male-mainboard">Male Mainboard</a></li>
              <li><a class="menu-a" href="index.php?section=male-new-faces">Male New Faces</a></li>
              <li><a class="menu-a" href="index.php?section=female-mainboard">Female MainBoard</a></li>
              <li><a class="menu-a" href="index.php?section=female-new-faces">Female New Faces</a></li>
              <li><a class="menu-a" href="index.php?section=stylists">Stylists</a></li>
            </ul>
          </div>
        </div>

        <div style="width:50%;margin: 3% 0;float: right;">
          <p style="text-align:right;line-height: 0px;padding-top:2%;"><b>Follow Us</b></p>
          <ul class="icons-footer">
            <li style="margin: 10px;"><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true" style="font-size:20px;"></i></a></li>
            <li style="margin: 10px;"><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true" style="font-size:20px;"></i></a></li>
            <li style="margin: 10px;"><a href="https://www.plus.google.com/" target="_blank"><i class="fa fa-google-plus" aria-hidden="true" style="font-size:20px;"></i></a></li>
            <li style="margin: 10px;"><a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true" style="font-size:20px;"></i></a></li>
            <li style="margin: 10px;"><a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true" style="font-size:20px;"></i></a></li>
            <li style="margin: 10px;"><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" aria-hidden="true" style="font-size:20px;"></i></a></li>
          </ul>

          <div style="text-align:right;display: inline-block;float: right;">
            <p style="color:#969696;font-size:12px">Copyright &copy; 2017 COAST MODELS. All Rights Reserved</p>
            <div class="creditsmf">Powered by <a href="http://managerfashion.com" target="_blank">ManagerFashion</a></div>
          </div>
          </div>
        </div>
    </footer>
    <!-- Footer - End -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/subscriber.js"></script>
    <?php echo $include_js; ?>
  </body>
</html>
