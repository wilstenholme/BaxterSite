<!DOCTYPE html>
<html lang="en">
  <head>
      <!--Redirect to Mobile Site-->
      <script type="text/javascript">
        if (screen.width <= 699) {
        document.location = "welcome-mobile.php";
        }
    </script>
      <!--Google Analytics Tag-->
      <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-72313310-1', 'auto');
      ga('send', 'pageview');
    </script>

      <link rel="icon" 
      type="image/png" 
      href="images/favicon/baxicon.png">
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Baxter Academy</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap_welcome.css" rel="stylesheet">
    <link href="css/default.css" rel="stylesheet">
    <link href="css/welcome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto+Condensed|Open+Sans+Condensed:700" rel="stylesheet" type="text/css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body style="overflow:hidden>


<!--BEGIN NAV-->
<?php include('header.html'); ?>
<!--End of Navbar-->
<div>
    <video autoplay loop width="100%" muted id="welcomepg">
        <source src="images/baxaerial.webm" type='video/webm; codecs="vp8,vorbis"'/>
        <source src="images/baxaerial.mp4" type='video/mp4; codecs="avc1.4D401E, mp4a.40.2"'/>
    </video>
		<section>
  			<h2 class="full-width">ARE YOU IN YOUR ELEMENT?</h2>
    	</section>
</div>

        <!-- MEDIA query!!!!! -->
        
    <div class="row" style="margin-top:2em">
      <div class="col-sm-4"></div>
          <div class="col-sm-4">
          <div class="col-sm-6">
              <a href="prospectivedash.php"><img class="center-block img-responsive" src="images/elements/P-Prospective.png" style="width:30em"><br/></a>
            </div>
            <div class="col-sm-6">
              <a href="studentdash.php"><img class="center-block img-responsive" src="images/elements/Sn-Student.png" style="width:30em"><br/></a>
            </div>
            
            </div>
        <div class="col-sm-4"></div>
  </div>
  <div class="row">
      <div class="col-sm-4"></div>
          <div class="col-sm-4">
            <div class="col-sm-6">
              <a href="#"><img class="center-block img-responsive" src="images/elements/Pa-Parent.png" style="width:30em"><br/></a>
            </div>
                <div class="col-sm-6">
              <a href="about.php"><img class="center-block img-responsive" src="images/elements/Co-Community.png" style="width:30em"><br/></a>
            </div>
            </div>
        <div class="col-sm-4"></div><br/><br/>
    </div> 
      
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/plugins/jquery.capSlide.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
	<script>
    $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
    });
	</script>
</body>
</html>