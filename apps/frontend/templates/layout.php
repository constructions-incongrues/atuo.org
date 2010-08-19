<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>

    <meta charset="utf-8">

  <!-- www.phpied.com/conditional-comments-block-downloads/ -->
  <!--[if IE]><![endif]-->

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

  <title></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!--  Mobile Viewport Fix
        j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag
  device-width : Occupy full width of the screen in its current orientation
  initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
  maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width
  -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">


  <!-- Place favicon.ico and apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="<?php $sf_request->getRelativeUrlRoot() ?>/favicon.ico">
  <link rel="apple-touch-icon" href="<?php $sf_request->getRelativeUrlRoot() ?>/apple-touch-icon.png">


  <!-- CSS : implied media="all" -->
  <link rel="stylesheet" href="<?php $sf_request->getRelativeUrlRoot() ?>/css/original.css?v=1">
  <link rel="stylesheet" href="<?php $sf_request->getRelativeUrlRoot() ?>/css/footer.css?v=1">

  <!-- For the less-enabled mobile browsers like Opera Mini -->
  <link rel="stylesheet" media="handheld" href="<?php $sf_request->getRelativeUrlRoot() ?>/css/handheld.css?v=1">


  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="<?php $sf_request->getRelativeUrlRoot() ?>/js/modernizr-1.5.min.js"></script>

  </head>
  <body>
<div id="container">

<div id="header">
  <span id="logo"> LOGO </span>
  <span id="logo2"> LOGO x2 </span>
  <span id="logo3"> </span>
</div> <!-- #header -->


<div id="navbar1">
 <ul>
  <li><a href="">Blog</a></li>
  <li><a href="">Portfolio</a></li>
  <li><a href="">Editions</a></li>
 </ul>
</div> <!-- #navbar1 -->

<div id="navbar2">
 <ul>
  <li><a href="">Blog</a></li>
  <li><a href="">Portfolio</a></li>
  <li><a href="">Editions</a></li>
 </ul>
</div> <!-- #navbar2 -->

<div id="page">
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc purus dui, sodales a rutrum commodo, vehicula vel justo. Pellentesque scelerisque, tellus in ultrices tempus, arcu enim condimentum nisl, vitae varius felis orci a lorem. Etiam quis dictum felis. Fusce viverra laoreet mi ut luctus. Maecenas cursus rutrum nunc, sit amet viverra nisl iaculis eu. Vestibulum ullamcorper metus a odio mattis a rutrum lacus viverra. Phasellus magna tellus, hendrerit quis consectetur pellentesque, venenatis ut odio. Nullam in dui eros, eu aliquet odio. Aenean eleifend fringilla justo, nec egestas justo semper ut. Etiam aliquet lobortis magna, ac adipiscing nibh consequat a. Sed dolor nibh, pellentesque et posuere tempus, vehicula et ipsum. Aenean faucibus porta fermentum. Suspendisse potenti. Mauris et justo sapien, eget vehicula elit. Praesent ultricies, augue eget congue lobortis, ante leo vehicula nisl, et vestibulum leo magna at mauris. Mauris nec interdum leo.</p>
<p>
Phasellus a mi nec erat rutrum varius. Sed auctor eleifend eros ut mollis. Phasellus at tortor risus, nec iaculis mauris. Sed tempus est non risus accumsan mattis. Quisque eleifend massa eleifend lorem ornare lacinia. Nulla sed mollis libero. Aenean non justo sem. Phasellus non aliquam leo. Praesent nec magna massa, eu pulvinar sem. Nulla nec feugiat nulla. Sed mattis convallis dolor in laoreet. Curabitur in massa eget eros dignissim placerat sed nec lectus. Morbi aliquam sagittis dapibus. In fringilla scelerisque arcu id sollicitudin. Etiam fringilla augue non sapien ultrices consequat cursus quam dignissim. Etiam sit amet tempor tortor. Nullam imperdiet porttitor ligula. Curabitur vehicula, nisi quis pulvinar malesuada, augue erat mattis enim, in tristique nisl est tempus purus.
</p>
</div> <!-- #page -->

<div id="pics">
</div>
<div id="wrap">
	<div id="main" class="clearfix"></div>
</div>

<div id="footer">
	<form action="p" method="post">
	<p>
	<label for="mail">JOIN OUR MAILING LIST <br /></label>
	<input type="text" name="mail" class="champs" id="mail" />
	<input name="Submit" value="Ok" class="valid" type="submit" />
	</p>
	</form>
</div>
</div>
  </body>
</html>
