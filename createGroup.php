<?php require('check.php');
session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Create A Group</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="robots" content="noindex">

    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href=".bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap-dropdown.js"></script>


    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

    
  </head>

  <body>	

	<?php include("groupsNav.php"); ?>

    <div class="container">

      <div class="page-header">
        <h1>Create A Group</h1>
        <p>Create your own group</p>
      </div>

      <div class="row">
        <div class="span6">
          <h2>Add People</h2>
           <p>Add people to your group</p>
           <?php
              echo "<form id='frm1' method='post' action='phpCreateGroup.php'>";

            openConnect();

            $data = mysql_query("SELECT * FROM users ORDER BY username") 
            or die(mysql_error()); 
            echo "<input type='checkbox' name='checkall' onclick='checkedAll(frm1);'><b> Select Everyone</b><br /><br />";

            while($info = mysql_fetch_array( $data )) { 
              if ($info['username'] != $_SESSION['loggedin']){
                echo "<input type='checkbox' name='invitees[]' value='".$info['username']."' /> ".$info['username']."<br />";
              }
            } 
            closeConnect();

            ?>

        </div>

        <div class="span5">
          <?php
           echo "<p>Group Name: <input type='text' name='groupName' placeholder='Group Name' /></p>";
           echo 'Group Type:&nbsp;&nbsp; <select name="type">
                  <option value="class">Class</option>
                  <option value="club">Club</option>
                  <option value="sport">Sport Team</option>
                  <option value="study">Study Group</option>
              </select> <br /><br /><br />';
           echo '<center><input type="submit" name="submit" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Create&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"></center>';
			     echo "</form>";
			    ?>
       </div>

     </div>

     <hr>

     <?php include('footer.php'); ?>


    </div>

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


    <script type="text/javascript">
    checked=false;
    function checkedAll (frm1) {
      var aa= document.getElementById('frm1');
      if (checked == false){
        checked = true
      }
      else{
        checked = false
      }
      for (var i =0; i < aa.elements.length; i++) {
        aa.elements[i].checked = checked;
      }
    }
    </script>

  </body>
</html>
