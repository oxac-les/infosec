<!DOCTYPE html>
<html>
	<head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
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

    </head>
  <body>

    <!-- header -->

    <div class="barTop"></div>
      
    <div class="headerwrap">

        <div class="container">
            <header>
                <div class="row">
                    <div class="header col-sm-9">
                        <div class="oxlogo">
                            <a href="http://www.ox.ac.uk"><img alt="Oxford Logo" src="img/ox-logo.gif"/></a>
                        </div>
                        <div class="sitelogo">
                            <a href="http://www.thisdomain.co.uk"><img alt="InfoSec Logo" src="img/infosec-logo.png"/></a>
                        </div>
                        <div class="sitenamebg">
                            <h1 class="sitename">Information<br/>Security</h1>
                        </div>
                    </div>
                    <div class="header col-sm-3">
                        <div class="searchBox">
                            <input type="text" name="search">
                            <button type="submit" class="searchBtn"><i class="icon fa fa-search"></i></button>
                        </div>
                        <div class=""><a href="#"><i class="icon fa fa-exclamation-triangle"></i><span class="searchTxt">Report an Incident</a></span></div>
                        <div class="contact"><a href="#"><i class="fa fa-desktop"></i><span class="searchTxt">Contact Us</a></span></div>
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
            <li><a href="subpage.php">Guidance &amp; Policy</a></li>
            <li><a href="">I want to..</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">What we do</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
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


     <!-- home page -->
    <div class="marginTop clearfix"></div>

    <div id="content" class="container"> <!-- page content -->
        <div id="homepage"class="row">	
            <div id="" class="col-sm-6 col-md-3 col1 iwantto">
                <h2 class="">I Want To..</h2>
                <!--
                    <div class="iwanttoBtn">
                        <a href="">
                            <span class="iwanttoIcon"><i class="icon fa fa-lock"></i></span>
                            <span class="iwanttoTxt">Use strong passwords</span>
                        </a>
                    </div>
-->
                    <div class="iwanttoBtn"><a href=""><i class="icon fa fa-lock"></i><span>Use stong passwords</span></a></li></div>
                    <div class="iwanttoBtn"><a href=""><i class="icon fa fa-envelope"></i><span>Use email securely</span></a></li></div>
                    <div class="iwanttoBtn"><a href=""><i class="icon fa fa-download"></i><span>Apply software updates</span></a></li></div>
                    <div class="iwanttoBtn"><a href=""><i class="icon fa fa-fire-extinguisher"></i><span>Use anti-virus software</span></a></li></div>
                    <div class="iwanttoBtn"><a href=""><i class="icon fa fa-laptop"></i><span>Protect my laptop and devices</span></a></li></div>
                </ul>
            </div>	  
            
            <div id="" class="col-sm-6 col-md-3 col2 incidentreport">
                <div class=""><i class="icon fa fa-exclamation-triangle"></i><h2>Report an Incident</h2></div>
                <ul>
                    <li>something here</li>
                    <li>something here</li>
                    <li>something here</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet enim eget nunc gravida suscipit. </p>
                <ul>
                    <li>something here</li>
                    <li>something here</li>
                    <li>something here</li>
                </ul>             
                <div class="reportincidentBtn"><a href=""><i class="icon fa fa-exclamation-triangle"></i><span>Report an incident</span></li></a></div>
            </div>	 

            <div id="" class="col-sm-6 col-md-3 col3 quicklinks">
                 <h2 class="">Quick Links</h2>
                 <ul>
                     <li><a href="">Information Security Policy</a><br/>
                         Some information pertinent to this link.</li>
                     <li><a href="">Security Incident Response</a><br/>
                         Some information pertinent to this link.</li>
                     <li><a href="">Classification of Information</a><br/>
                         Some information pertinent to this link.</li>
                </ul>
                
                <span class="showmore"><a href="">Show More</a></span>
                
            
            </div>	 
            
            <div id="" class="col-sm-6 col-md-3 col4 alertsandfixes">

                <h2 class="alerts">Current Alerts</h2>
                
                <div class="alert">
                    <span class="alertDate">23 Nov 2015</span>
                    <span class="alertTitle">And it was all going so well</span>
                    <span class="alertTxt">The numerically-improbable ‘CVE-2015-3456‘ is here and it wants to kill your datacentre. </span>
                    <span class="alertLink"><a href="">Continue reading</a></span>
                </div>
                
                <div class="alert">
                    <span class="alertDate">23 Nov 2015</span>
                    <span class="alertTitle">And it was all going so well</span>
                    <span class="alertTxt">The numerically-improbable ‘CVE-2015-3456‘ is here and it wants to kill your datacentre. </span>
                    <span class="alertLink"><a href="">Continue reading</a></span>
                </div>

                <span class="showmore"><a href="">Show More</a></span>
                
                
                
                <h2 class="fixes">Security Fixes</h2>
                
                <div class="fix">
                    <span class="fixRef">21 August 2015 OSB2015-103:</span>
                    <span class="fixLink"><a href="">Apple QuickTime for Windows update</a></span>
                </div>
                
                <div class="fix">
                    <span class="fixRef">21 August 2015 OSB2015-103:</span>
                    <span class="fixLink"><a href="">Apple QuickTime for Windows update</a></span>
                </div>
                
                <span class="showmore"><a href="">Show More</a></span>

            </div>	 
        </div>

    </div>    
      
      
    <!-- guidance & policy page -->

    <div class="marginTop clearfix"></div>

    <div id="content" class="container">
        
        <h1>Guidance &amp; Policy</h1>
        
        <div id=""class="row">	
            <div id="" class="col-md-9">
                <!-- into paragraph -->
                <div class="introduction">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet enim eget nunc gravida      suscipit. Sed eu dapibus dolor. Ut eleifend ornare erat, eget sollicitudin arcu accumsan sit amet.  </p>

                    <ul class="gandpKey">
                        <li class="fa fa-university"><span>Security Policy</span></li>
                        <li class="fa fa-check-square-o">Requirements</li>
                        <li class="fa fa-wrench">How to</li>
                    </ul>
                </div>  
            </div>
             <div id="" class="col-md-3">

            </div>	        
        </div>

        
        <div id=""class="view-content row pandgBoxes">	
            <div id="" class="col-md-3">
                <div class="pandgBox">
                    <span class="pandgTitle">Local Policy Rsponsibilities</span>
                     <div class="pandgText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula blandit orci id dignissim. </div>               
                </div>
            </div>	
            <div id="" class="col-md-3">
                <div class="pandgBox">
                    <span class="pandgTitle">Title</span>
                     <div class="pandgText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula blandit orci id dignissim. </div>               
                </div>
            </div>	
            <div id="" class="col-md-3">
                <div class="pandgBox">
                    <span class="pandgTitle">Title</span>
                     <div class="pandgText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula blandit orci id dignissim. </div>               
                </div>
            </div>	
            <div id="" class="col-md-3">
                <div class="pandgBox">
                    <span class="pandgTitle">Title</span>
                     <div class="pandgText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula blandit orci id dignissim. </div>               
                </div>
            </div>	
            <div id="" class="col-md-3">
                <div class="pandgBox">
                    <span class="pandgTitle">Title</span>
                     <div class="pandgText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula blandit orci id dignissim. </div>               
                </div>
            </div>	
            <div id="" class="col-md-3">
                <div class="pandgBox">
                    <span class="pandgTitle">Title</span>
                     <div class="pandgText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula blandit orci id dignissim. </div>               
                </div>
            </div>	
            <div id="" class="col-md-3">
                <div class="pandgBox">
                    <span class="pandgTitle">Title</span>
                     <div class="pandgText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula blandit orci id dignissim. </div>               
                </div>
            </div>	
            <div id="" class="col-md-3">
                <div class="pandgBox">
                    <span class="pandgTitle">Title</span>
                     <div class="pandgText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula blandit orci id dignissim. </div>               
                </div>
            </div>		
        </div>

    </div>   



    <!-- services page -->

    <div class="marginTop clearfix"></div>

    <div id="content" class="container">
        
        <h1>Services</h1>

        
        <div id=""class="view-content row servBoxes">	
            <div id="" class="col-md-3">
                <div class="servBox">
                    <div class="servBoxOvly">
                        <span class="servTitle">Local Policy Rsponsibilities</span>
                         <div class="servText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula blandit orci id dignissim. </div> 
                    </div>
                </div>
            </div>	
            <div id="" class="col-md-3">
                <div class="servBox">
                    <div class="servBoxOvly">
                    <span class="servTitle">Title</span>
                     <div class="servText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula blandit orci id dignissim. </div>               
                    </div>
                </div>
            </div>
            <div id="" class="col-md-3">
                <div class="servBox">
                    <div class="servBoxOvly">
                    <span class="servTitle">Title</span>
                     <div class="servText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula blandit orci id dignissim. </div>               
                    </div>
                </div>
            </div>
            <div id="" class="col-md-3">
                <div class="servBox">
                    <div class="servBoxOvly">
                    <span class="servTitle">Title</span>
                     <div class="servText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula blandit orci id dignissim. </div>               
                    </div>
                </div>
            </div>	
        </div>

    </div>   




    <!-- typography -->
    <div class="marginTop clearfix"></div>

    <div id="content" class="container"> 
        
        <h1>Typography</h1>
        
        <div class="row">	
            <div id="" class="col-md-12">
                <h1>Heading 1</h1>
                <h2>Heading 2</h2>
                <h3>Heading 3</h3>
                <h4>Heading 4</h4>
                <h5>Heading 5</h5>
                <h6>Heading 6</h6>
                <p>Paragraph Text <br/>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet enim eget nunc gravida      suscipit. Sed eu dapibus dolor. Ut eleifend ornare erat, eget sollicitudin arcu accumsan sit amet. Pellentesque sit amet augue vitae mi hendrerit mattis et ut elit. Maecenas tempus enim non neque lacinia, non commodo est semper. Nunc a dui porttitor purus ullamcorper malesuada. Vivamus sed nisi ligula.
                </p>

                
                <!-- into paragraph -->
                <p class="introduction">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet enim eget nunc gravida      suscipit. Sed eu dapibus dolor. Ut eleifend ornare erat, eget sollicitudin arcu accumsan sit amet. Pellentesque sit amet augue vitae mi hendrerit mattis et ut elit. Maecenas tempus enim non neque lacinia, non commodo est semper. Nunc a dui porttitor purus ullamcorper malesuada. Vivamus sed nisi ligula.
                </p>    
                
                <button type="button" class="btn">Contact Us <i class="fa fa-caret-right"></i></button>
                
            </div>	  
        </div>

    </div>    

    
    

    
    

    
    <!-- footer -->

    <div class="marginTop"></div>

    <div class="barBottom"></div>              
            
    <div class="footerwrap">
        <div class="container">  

			<footer id="footer">
				<div class="row">
					  <div class="col-md-4">
                        <div class="sitename">Information Security Team 
                            <span class="isipicon"><img alt="Isip Icon" src="img/isip-logo.gif" alt="isip icon"/></span></div>
                        <div class="copyright">Copyright &copy;<?php echo date("Y"); ?> University of Oxford</div>
					  </div>                      
                      
					  <div class="col-md-5">
                            <div class="heading">Keep up to date</div>
                            <ul id="social-links">
                                <a href=""><li class="fa fa-rss"><h2>RSS</h2></li></a>
                                <a href=""><li class="fa fa-twitter"><h2>Twitter</h2></li></a>
                                <a href=""><li class="fa fa-wordpress"><h2>Blog</h2></li></a>
                            </ul>
					  </div>
					  <div class="col-md-3">
				          <ul id="footerLinks">
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Cookies</a></li>
                            <li><a href="#">Legal Accessibility</a></li>
                            <li><a href="#">Picture Credits</a></li>
                            <li><a href="#">Contact Webmaster</a></li>
                          </ul>
					  </div>
				</div>
			</footer>
     
		</div> <!-- end container -->
    </div> <!-- end wrapper -->
 
  </body>
</html>