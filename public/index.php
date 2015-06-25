<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <?php
  $meta = array(
    'title' => 'Lake Travis water levels then and now',
    'description' => 'How Lake Travis lake levels after the 2015 Memorial Day floods compare to times of drought between 2009-2013.',
    'thumbnail' => 'http://projects.statesman.com/news/lake-travis-then-now/assets/share.jpg',
    'url' => 'http://projects.statesman.com/news/lake-travis-then-now/',
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
    <div class="container">
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

  <article class="container">
    <div class="page-header">
      <h4>2015 Central Texas floods</h4>
      <h1><?php print $meta['title']; ?></h1>
      <p class="author">Photos by Jay Janner; Interactive by <a href="http://www.statesman.com/staff/andrew-chavez/">Andrew Chavez</a> and <a href="http://www.statesman.com/staff/christian-mcdonald/">Christian McDonald</a><br />Published May 28, 2015</p>
      <p>Heavy rainfall during Memorial Day weekend across Central Texas, combined with a wetter-than-average year for the region, have water levels at Lake Travis up more than 20 feet since the beginning of the year. The photos below show the lake from different angles over the past three years and those same locations after the historic Memorial Day rains.</p>
      <p><a href="http://www.statesman.com/flist/weather/complete-coverage-severe-weather-and-flooding-may-/fxz/" target="_blank">Complete flood coverage &gt; </a>
    </div>

    <?php
      $json = file_get_contents('data.json');
      $photos = json_decode($json);
    ?>

    <div class="row">
      <div class="col-xs-12">
        <?php foreach($photos->images as $photo): ?>
          <div class="then-and-now-wrapper">
            <h2 class="text-center"><?php echo $photo->location; ?></h2>
            <?php if(isset($photo->lat)): ?>
              <div class="then-and-now" data-lat="<?php echo $photo->lat; ?>" data-lng="<?php echo $photo->lng; ?>">
            <?php else: ?>
              <div class="then-and-now">
            <?php endif; ?>
              <img src="assets/<?php echo $photo->id ;?>b.jpg" class="img-responsive" data-date="<?php echo $photo->b->date; ?>"/>
              <img src="assets/<?php echo $photo->id ;?>a.jpg" class="img-responsive" data-date="<?php echo $photo->a->date; ?>"/>
            </div>
            <div class="lake-levels row">
              <?php if(isset($photo->lat)): ?>
                <div class="col-sm-6 col-sm-push-3 col-md-4 col-md-push-4 col-xs-12">
                  <div class="map"></div>
                </div>
              <?php endif; ?>
              <div class="<?php if(isset($photo->lat)): ?>col-sm-3 col-sm-pull-6 col-md-4 col-md-pull-4 <?php endif; ?>col-xs-6 text-right">
                <h3>Before</h3>
                <p><strong>Date:</strong><br /><?php echo $photo->b->date; ?></p>
                <p><strong>Lake level:</strong><br /><?php echo $photo->b->lake; ?> ft. above sea level</p>
              </div>
              <div class="<?php if(isset($photo->lat)): ?>col-sm-3 col-md-4 <?php endif; ?>col-xs-6">
                <h3>After</h3>
                <p><strong>Date:</strong><br /><?php echo $photo->a->date; ?></p>
                <p><strong>Lake level:</strong><br /><?php echo $photo->a->lake; ?> ft. above sea level</p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
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
