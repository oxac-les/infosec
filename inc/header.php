<!DOCTYPE html>
<html>
	<head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ISIP Assets</title>
    
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
    <!-- bootstrap -->
    <link rel="stylesheet" href="bootstrap-3.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="font-awesome-4.2.0/css/font-awesome.min.css" >

    <!-- fonts -->
    <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <!-- stylesheets -->
    <link rel="stylesheet" href="css/style.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- jqueryUI -->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

    <!-- Bootstrap JavaScript plugins -->
    <script src="bootstrap-3.3.1/js/bootstrap.min.js"></script>

    <!-- To Top scripts http://www.mattvarone.com/web-design/uitotop-jquery-plugin/ -->
	<!-- the necessary css for UItoTop -->	
	<link rel="stylesheet" type="text/css" media="screen" href="jquery.ui.totop/css/ui.totop.css" />
	<!-- easing plugin ( optional ) -->
	<script src="jquery.ui.totop/js/jquery.easing.js" type="text/javascript"></script>
	<!-- UItoTop plugin -->
	<script src="jquery.ui.totop/js/jquery.ui.totop.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>

    <!-- equal height -->
	<script src="js/equalheight.js" type="text/javascript">            
    </script>
   
    <!-- sidebox hide -->
	<script src="js/sidebox.js" type="text/javascript">            
    </script>
        
    </head>
  <body>

    <!-- header -->

    <div class="barTop"></div>
      
    <div class="headerwrap">

        <div class="container">
            <header>
                <div class="row">
                    <div class="header col-lg-9">
                        <div class="oxlogo">
                            <a href="http://www.ox.ac.uk"><img alt="Oxford Logo" src="img/ox-logo.gif"/></a>
                        </div>
                        <div class="sitelogo">
                            <a href="https://www.infosec.ox.ac.uk"><img alt="InfoSec Logo" src="img/infosec-logo.png"/></a>
                        </div>
                        <div class="sitenamebg">
                            <h1 class="sitename">Information<br/>Security</h1>
                        </div>
                    </div>
                    <div class="header col-lg-3">
                        <div class="searchBox">
                            <input type="text" name="search">
                            <button type="submit" class="searchBtn"><i class="icon fa fa-search"></i></button>
                        </div>
                        <div class=""><a href="reportincident.php"><i class="icon fa fa-exclamation-triangle"></i><span class="searchTxt">Report an Incident</span></a></div>
                        <div class="contact"><a href="#"><i class="fa fa-desktop"></i><span class="searchTxt">Contact Us</span></a></div>
                    </div>
                </div>
            </header>
        </div> <!-- end container -->

    </div> <!-- end wrapper -->



    <!-- menu -->   
    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php"><i class="fa fa-home"></i><span class="sr-only">(current)</span></a></li>
            <li><a href="">Guidance &amp; Policy</a></li>
            <li><a href="">I want to..</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">What we do</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="listalerts.php">Alerts</a></li>
                <li><a href="reportincident.php">Report an incident</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
