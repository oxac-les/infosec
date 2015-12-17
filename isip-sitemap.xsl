<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0" 
                xmlns:html="http://www.w3.org/TR/REC-html40"
				xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
                xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9"
                xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    
<xsl:output method="html" version="1.0" encoding="UTF-8" indent="yes"/>
	<xsl:template match="/">
        <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
            <title>XML Sitemap</title>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
				<script type="text/javascript" src="http://tablesorter.com/jquery.tablesorter.min.js"></script>
				<script	type="text/javascript"><![CDATA[
					$(document).ready(function() { 
				        $("#sitemap").tablesorter( { widgets: ['zebra'] } ); 
					});
				]]></script>
				<style type="text/css">
					body {
						font-family: Helvetica, Arial, sans-serif;
						font-size: 13px;
						color: #545353;
					}
					table {
						border: none;
						border-collapse: collapse;
					}
					#sitemap tr.odd {
						background-color: #eee;
					}
					#sitemap tbody tr:hover {
						background-color: #ccc;
					}
					#sitemap tbody tr:hover td, #sitemap tbody tr:hover td a {
						color: #000;
					}
					#content {
						margin: 0 auto;
						width: 1000px;
					}
					.expl {
						margin: 10px 3px;
						line-height: 1.3em;
					}
					.expl a {
						color: #da3114;
						font-weight: bold;
					}
					a {
						color: #000;
						text-decoration: none;
					}
					a:visited {
						color: #777;
					}
					a:hover {
						text-decoration: underline;
					}
					td {
						font-size:11px;
					}
					th {
						text-align:left;
						padding-right:30px;
						font-size:11px;
					}
					thead th {
						border-bottom: 1px solid #000;
						cursor: pointer;
					}
				</style>
 
    
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
                    <div class="header col-lg-9">
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
                    <div class="header col-lg-3">
                        <div class="searchBox">
                            <input type="text" name="search">
                            <button type="submit" class="searchBtn"><i class="icon fa fa-search"></i></button>
                        </div>
                        <div class=""><a href="reportincident.html"><i class="icon fa fa-exclamation-triangle"></i><span class="searchTxt">Report an Incident</span></a></div>
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
            <li class="active"><a href="index.html"><i class="fa fa-home"></i><span class="sr-only">(current)</span></a></li>
            <li><a href="">Guidance &amp; Policy</a></li>
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


     <!-- page content -->
    <div class="marginTop clearfix"></div>

    <div id="" class="container"> <!-- page content -->
        <div class="row">	
            <div class="col-md-12">
                <div id="sitemap">

				<div id="content">
					<h1>XML Sitemap</h1>
					<p class="expl">
						This sitemap contains <xsl:value-of select="count(sitemap:urlset/sitemap:url)"/> URLs.
					</p>			
					<table id="sitemap" cellpadding="3">
						<thead>
							<tr>
								<th width="75%">URL</th>
								<th width="10%">Last Change</th>
							</tr>
						</thead>
						<tbody>
							<xsl:variable name="lower" select="'abcdefghijklmnopqrstuvwxyz'"/>
							<xsl:variable name="upper" select="'ABCDEFGHIJKLMNOPQRSTUVWXYZ'"/>
							<xsl:for-each select="sitemap:urlset/sitemap:url">
								<tr>
									<td>
										<xsl:variable name="itemURL">
											<xsl:value-of select="sitemap:loc"/>
										</xsl:variable>
										<a href="{$itemURL}">
											<xsl:value-of select="sitemap:loc"/>
										</a>
									</td>
									<td>
										<xsl:value-of select="concat(substring(sitemap:lastmod,0,11),concat(' ', substring(sitemap:lastmod,12,5)))"/>
									</td>
								</tr>
							</xsl:for-each>
						</tbody>
					</table>
				</div>                    
                    
                    
                </div>
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
                            <span class="infosecicon"><img src="img/infosec-logo.png" alt="isip icon"/></span></div>
                        <div class="copyright">Copyright 2015 University of Oxford</div>
					  </div>                      
                      
					  <div class="col-md-5">
                            <div class="heading">Keep up to date</div>
                            <ul id="social-links">
                                <li><a href="" class="fa fa-rss"><h2>RSS</h2></a></li>
                                <li><a href="" class="fa fa-twitter"><h2>Twitter</h2></a></li>
                                <li><a href="" class="fa fa-wordpress"><h2>Blog</h2></a></li>
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
    
    </xsl:template>
</xsl:stylesheet>