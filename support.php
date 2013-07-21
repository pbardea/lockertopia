<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Support</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="robots" content="noindex">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href=".bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap-dropdown.js"></script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  </head>

  <body>

	<?php include('supportNav.php'); ?>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Need Help?</h1>
        <p>That's what this page is for! We would love to hear any questions or recomendations that you have for us. See the page below to find the various ways to contact us or other pages that might help you solve your problem...</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span200">
          <h2>Email</h2>
           <p>The team is available via <a href="mailto:pbardea@gmail.com?Subject=Lockertopia%20Bug" target="_blank">email</a>. Please email us the URL (found in the address bar at the top of your browser), what you see on the screen and what is normally there. For example if this page was blank I would put the following in the content of the email:<blockquote>URL:www.pbardea.com/design/support.php <br /> What I see: a blank page <br />What I normally see: STUFF!!!!<br /></blockquote> Thank you for taking time to make Lockertopia a better place to surf.</p>
           <p><a class="btn" href="mailto:pbardea@gmail.com?Subject=Lockertopia%20Bug">Email &raquo;</a></p><br />
        </div>
        <div class="span4">
          <h2>FAQ</h2>
           <p>Here is a page with some frequently asked questions.</p>
          <p><a class="btn" href="#">FAQ &raquo;</a></p>
       </div>
        <div class="span5">
          <h2>Video Tutorial</h2>
          <p>We have prepared a video tutorial for you taking you throught the main features of our site. The video is on the home page.</p>
          <p><a class="btn" href="index.php">Go To Home Page &raquo;</a></p>
        </div>
      </div>

      <hr>

     <?php include('footer.php'); ?>


    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/google-code-prettify/prettify.js"></script>
    <script src="bootstrap/js/bootstrap-transition.js"></script>
    <script src="bootstrap/js/bootstrap-alert.js"></script>
    <script src="bootstrap/js/bootstrap-modal.js"></script>
    <script src="bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="bootstrap/js/bootstrap-tab.js"></script>
    <script src="bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="bootstrap/js/bootstrap-popover.js"></script>
    <script src="bootstrap/js/bootstrap-button.js"></script>
    <script src="bootstrap/js/bootstrap-collapse.js"></script>
    <script src="bootstrap/js/bootstrap-carousel.js"></script>
    <script src="bootstrap/js/bootstrap-typeahead.js"></script>
    <script src="bootstrap/js/application.js"></script>
     <script>
      var _gauges = _gauges || [];
      (function() {
        var t   = document.createElement('script');
        t.type  = 'text/javascript';
        t.async = true;
        t.id    = 'gauges-tracker';
        t.setAttribute('data-site-id', '4f0dc9fef5a1f55508000013');
        t.src = '//secure.gaug.es/track.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(t, s);
      })();
    </script>

  </body>
</html>
