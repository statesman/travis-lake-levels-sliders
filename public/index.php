<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <?php
  $meta = array(
    'title' => 'Memorial Day 2015 flooding in Austin, then and now | Austin American-Statesman',
    'description' => 'A look at Austin landmarks and streets under water during the flooding on Monday, and the damage revealed after waters receded on Tuesday.',
    'thumbnail' => 'http://projects.statesman.com/then-and-now/memorial-day-flooding-2015/assets/share.jpg',
    'url' => 'http://projects.statesman.com/then-and-now/memorial-day-flooding-2015/',
    'twitter' => 'statesman'
  );
?>

  <title>Interactive: <?php print $meta['title']; ?> | Austin American-Statesman</title>
  <link rel="icon" type="image/png" href="//projects.statesman.com/common/favicon.ico">

  <link rel="canonical" href="<?php print $meta['url']; ?>" />

  <meta name="description" content="<?php print $meta['description']; ?>">

  <meta property="og:title" content="<?php print $meta['title']; ?>"/>
  <meta property="og:description" content="<?php print $meta['description']; ?>"/>
  <meta property="og:image" content="<?php print $meta['thumbnail']; ?>"/>
  <meta property="og:url" content="<?php print $meta['url']; ?>"/>

  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@<?php print $meta['twitter']; ?>" />
  <meta name="twitter:title" content="<?php print $meta['title']; ?>" />
  <meta name="twitter:description" content="<?php print $meta['description']; ?>" />
  <meta name="twitter:image" content="<?php print $meta['thumbnail']; ?>" />
  <meta name="twitter:url" content="<?php print $meta['url']; ?>" />

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="dist/style.css">

  <link href='http://fonts.googleapis.com/css?family=Lusitana:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,300italic,400italic,700italic,700,800,800italic' rel='stylesheet' type='text/css'>

  <?php /* CMG advertising and analytics */ ?>
  <?php include "includes/advertising.inc"; ?>
  <?php include "includes/metrics-head.inc"; ?>

</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="http://www.statesman.com/" target="_blank">
          <img width="273" height="26" src="assets/logo.png">
        </a>
      </div>
       <ul class="nav navbar-nav navbar-right social hidden-xs">
          <li><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-facebook-square"></i></a></li>
          <li><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($meta['url']); ?>&via=<?php print urlencode($meta['twitter']); ?>&text=<?php print urlencode($meta['title']); ?>"><i class="fa fa-twitter"></i></a></li>
          <li><a target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-google-plus"></i></a></li>
        </ul>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-xs-12 header">
      <h4>THEN AND NOW</h4>
      <h1>Headline for then and now</h1>
      <p><small>Byline  </small></p>
      <p>Description of events</p>
      </div>
    </div>


    <div class="row">
      <div class="col-md-8 col-xs-12">
        <div class="then-and-now">
          <div><img src="assets/1935-paramount-sidewalk.jpg"  class="img-responsive" alt="slide 1" /></div>
          <div><img src="assets/1935-paramount-sidewalk-now.jpg" class="img-responsive" alt="slide 2" /></div>
        </div>
      </div>
      <div class="col-md-4 col-xs-12">
        <h2 style="margin-top:0px;">1935</h2>
        <p>A sidewalk view of the Paramount sign before 1935. The State Theater replaced the building to the left.</p>
        <p class="caption clearfix"><em class="pull-right credit">Austin History Center</em></p>
      </div>
    </div>


    <div class="row">
      <div class="col-xs-12">
        <h2>Stevie Ray Vaughan statue</h2>
        <div class="then-and-now">
          <div><img src="assets/stevie-monday.jpg"  class="img-responsive" alt="slide 1" /></div>
          <div><img src="assets/stevie-tuesday.jpg" class="img-responsive" alt="slide 2" /></div>
        </div>
        <!--  <p class="caption clearfix">Caption <em class="pull-right credit">Austin History Center</em></p> -->
      </div>
    </div>

  </div>

    <?php /* Banner ad */ ?>
    <?php include "includes/banner-ad.inc";?>

    <p id="legal" class="center-block text-center"><small>© 2015 <a href="http://www.coxmediagroup.com" target="_blank">Cox Media Group</a>. By using this website, you accept the terms of our <a href="http://www.mystatesman.com/visitor_agreement/" target="_blank">Visitor Agreement</a> and <a target="_blank" href="http://www.mystatesman.com/privacy_policy/">Privacy Policy</a>, and understand your options regarding <a target="_blank" href="http://www.mystatesman.com/privacy_policy/#ad-choices">Ad Choices</a><img src="http://media.cmgdigital.com/shared/img/photos/2012/02/29/d3/da/ad_choices_logo.png" alt="AdChoices">.</small></p>

    <?php /* CMG advertising and analytics */ ?>
    <?php include "includes/project-metrics.inc"; ?>
    <?php include "includes/metrics.inc"; ?>

    <script src="dist/scripts.js"></script>



</body>
</html>
