<!DOCTYPE HTML>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php 
echo $app_config['app_name'];
if(isset($page_title)) echo ' : ' . $page_title;
?></title>
<link href="<?php echo $app_config['app_url'] ?>assets/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $app_config['app_url'] ?>assets/images/silk_theme.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $app_config['app_url'] ?>node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
<?php echo $css_includes ?>
</head>
<body>
<div id="loading">loading...</div>

<div id="content">

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="<?php echo iframe\App::$config['app_url'] ?>"><?php echo iframe\App::$config['app_name'] ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main" aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbar-main">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item activex">
        <a class="nav-link" href="<?php echo iframe\App::$config['app_url'] ?>">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

<div id="error-message" <?php echo ($QUERY['error']) ? '':'style="display:none;"';?>><?php
	if(isset($PARAM['error'])) print strip_tags($PARAM['error']); //It comes from the URL
	else print $QUERY['error']; //Its set in the code(validation error or something.
?></div>
<div id="success-message" <?php echo ($QUERY['success']) ? '':'style="display:none;"';?>><?php echo strip_tags(stripslashes($QUERY['success']))?></div>

<main role="main" class="container">
<!-- Begin Content -->
<?php 
/////////////////////////////////// The Template file will appear here ////////////////////////////

include(iframe\App::$template->template);

/////////////////////////////////// The Template file will appear here ////////////////////////////
?>
<!-- End Content -->
</main>
</div>

<!-- <div id="footer">An <a href="http://www.bin-co.com/php/scripts/iframe/">iFrame</a> Application</div> -->

<script src="<?php echo $app_config['app_url'] ?>node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $app_config['app_url'] ?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo $app_config['app_url'] ?>assets/js/application.js" type="text/javascript"></script>
<?php echo $js_includes ?>
</body>
</html>
