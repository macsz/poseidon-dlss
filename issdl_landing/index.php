<?php
$DEBUG=0;
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <title>Welcome to ISSDL</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>

  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
  <link rel="stylesheet" media="screen" href="<?php echo get_site_url(); ?>/wp-content/themes/issdl_landing/style.css">
</head>
<body>

  <div id="centered">
    <div id="content">
      <div id="welcome">Welcome to</div>
      <div id="issdl">
        <img src="<?php echo get_site_url(); ?>/wp-content/themes/issdl_landing/img/logo_dlss_horizontal_75.png"/>
        <div>International Summer School</div>
        <div>on Deep Learning</div>
      </div>
      <div class="highlight" onclick="location.href='http://2019.dl-lab.eu/';">
        <p style="border:1px solid #0099DD; margin:0 0 1px 0;"></p>
        <p style="border:2px solid #EEE; margin:0;"></p>
        <div>Go to 2019 website</div>
        <p style="border:2px solid #EEE; margin:0;"></p>
        <p style="border:1px solid #0099DD; margin:0 0 1px 0;"></p>
      </div>
      <div id="previous">
        All editions: <a href="http://2018.dl-lab.eu/">2018</a> <a href="http://2018.dl-lab.eu/">2019</a>
      </div>
    </div>
  </div>  

<?php if($DEBUG==1){ ?>
  <!-- count particles -->
  <div class="count-particles">
    <span class="js-count-particles">--</span> particles
  </div>
<?php } ?>

<!-- particles.js container -->
<div id="particles-js"></div>

<!-- scripts -->
<script src="<?php echo get_site_url(); ?>/wp-content/themes/issdl_landing/particles.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/issdl_landing/js/app.js"></script>

<!-- stats.js -->
<?php if($DEBUG==1){ ?>
  <script src="<?php echo get_site_url(); ?>/wp-content/themes/issdl_landing/js/lib/stats.js"></script>
  <script>
    var count_particles, stats, update;
    stats = new Stats;
    stats.setMode(0);
    stats.domElement.style.position = 'absolute';
    stats.domElement.style.left = '0px';
    stats.domElement.style.top = '0px';
    document.body.appendChild(stats.domElement);
    count_particles = document.querySelector('.js-count-particles');
    update = function() {
      stats.begin();
      stats.end();
      if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
        count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
      }
      requestAnimationFrame(update);
    };
    requestAnimationFrame(update);
  </script>
<?php } ?>

</body>
</html>