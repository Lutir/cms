<?php
if(!defined('__PRAGYAN_CMS'))
{ 
	header($_SERVER['SERVER_PROTOCOL'].' 403 Forbidden');
	echo "<h1>403 Forbidden<h1><h4>You are not authorized to access the page.</h4>";
	echo '<hr/>'.$_SERVER['SERVER_SIGNATURE'];
	exit(1);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" manifest="manifest.appcache"> 
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php $cmstitle=$TITLE;echo $cmstitle; ?></title>
    <?php if(isset($WIDGETS[0])) echo $WIDGETS[0]; ?>
    <meta name="description" content="<?php echo $SITEDESCRIPTION ?>" />
    <meta name="keywords" content="<?php echo $SITEKEYWORDS.', '.$PAGEKEYWORDS ?>" /> 
	<?php global $urlRequestRoot;	global $PAGELASTUPDATED;
	if($PAGELASTUPDATED!="")
		echo '<meta http-equiv="Last-Update" content="'.substr($PAGELASTUPDATED,0,10).'" />'."\n";
	?>
    <!-- Styles -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,800" rel="stylesheet" type="text/css"><!-- Google web fonts -->
    <link href="<?php echo $TEMPLATEBROWSERPATH; ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"><!-- font-awesome -->
    <link href="<?php echo $TEMPLATEBROWSERPATH; ?>/css/dropdown-menu.css" rel="stylesheet" type="text/css"><!-- dropdown-menu -->
    <link href="<?php echo $TEMPLATEBROWSERPATH; ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"><!-- Bootstrap -->
    <link href="<?php echo $TEMPLATEBROWSERPATH; ?>/css/jquery.fancybox.css" rel="stylesheet" type="text/css"><!-- Fancybox -->
    <link href="<?php echo $TEMPLATEBROWSERPATH; ?>/css/style.css" rel="stylesheet" type="text/css"><!-- theme styles -->
    <link href="<?php echo $TEMPLATEBROWSERPATH; ?>/css/custom.css" rel="stylesheet" type="text/css"><!--custom -->
    <link rel="stylesheet" type="text/css" href="<?php echo $TEMPLATEBROWSERPATH; ?>/css/myStyle.css" />
    <link rel="icon" type="image/png" href="<?php echo $TEMPLATEBROWSERPATH; ?>/image/logo.png">
        <script src="<?php echo $TEMPLATEBROWSERPATH; ?>/js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript">
            $('.dep').hide();
        </script>
		<script type="text/javascript" src="<?php echo $TEMPLATEBROWSERPATH; ?>/js/fix_nav.js"></script>
        <script language="javascript" type="text/javascript">
        //defined here for use in javascript
        var templateBrowserPath = "<?php echo $TEMPLATEBROWSERPATH ?>";
        var urlRequestRoot = "<?php echo $urlRequestRoot?>";
    </script>
    <script type="text/javascript">
  var x=window.width();
  alert(x);
});

    
  </script>
  </head>
  
  <body onload="<?php echo $STARTSCRIPTS; ?>" role="document">
    <header class="myheader" >
        <img src="<?php echo $TEMPLATEBROWSERPATH; ?>/image/header.png" style="position:relative;top:35px;" />
    </header>
  
    <!-- device test, don't remove. javascript needed! -->
    <span class="visible-xs"></span><span class="visible-sm"></span><span class="visible-md"></span><span class="visible-lg"></span>
    <!-- device test end -->
    
    <div id="k-head" class="container-fluid"><!-- container + head wrapper -->
    
    	<div class="row"><!-- row -->
            <nav class="k-functional-navig"><!-- functional navig -->
                <ul class="list-inline pull-right">
                    <li><a href="#">Departments</a></li>
                    <li><a href="#">Placements</a></li>
                   <li><a id="dash" href="#" title="" class="dash"><i class="fa fa-toggle-off"></i> Dashboard </a></li>
             <script>$('#dash').click(function(){
    $(this).find('i').toggleClass('fa-toggle-off fa-toggle-on');
        $('.dashboard').toggle('fast');

    
});</script>
                    <li><a href="#">Webmail</a></li>
                    <li><a href="#">Sitemap</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">Translate</a></li>
                </ul>
            
                
                

            </nav><!-- functional navig end -->
        
        	<div class="col-lg-12">
            <div class="container-fluid text-center dashboard"  hidden >
                           <?php echo $ACTIONBARPAGE;?>
                <?php echo $ACTIONBARMODULE;?>
                  <?php if(isset($WIDGETS[1])) echo $WIDGETS[1]; ?>
                           <!-- <div class="col-md-1"><a href="#" style="color:black;"> View</a></div>
                            <div class="col-md-8"></div>
                            <div class="col-md-1"><a href="#" style="color:black;" > Login </a></div>
                            <div class="col-md-1"><a href="#" style="color:black;"> Register </a></div>
                            <div class="col-md-1"> <a href="#" style="color:black;"> Search</a></div>
                            -->
                        </div>
                        <script type="text/javascript">
                    $('.dashboard').hide();
                    function toggleDash(){

                    
                    }
                    </script>
        		<div id="k-site-logo" class="pull-left"><!-- site logo -->
    <!--            
                    <h1 class="k-logo">
                        <a href="index.html" title="Home Page">
                            <img src="image/logo.png" style="width:130px;height:130px;visibility:hidden;">    
                        </a>
                    </h1>
        -->            
                    <a id="mobile-nav-switch" href="#drop-down-left"><span class="alter-menu-icon"><i class="fa fa-bars" style="color: #000000"></i></span></a><!-- alternative menu button -->
            
            	</div><!-- site logo end -->

            	<nav id="k-menu affix" class="k-main-navig"><!-- main navig -->
        
                    <ul id="drop-down-left" class="k-dropdown-menu">
                        <li>
                            <a href="#" title="">Homepage</a>
                        </li>
                        <li>
                            <a href="#" title=""><i class="fa fa-caret-down"></i> About</a>
							<ul class="sub-menu">
                                <li><a href="#"> Mission & Vision </a></li>
                                <li><a href="#"> Alumni </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title=""><i class="fa fa-caret-down"></i> Student Links</a>
							<ul class="sub-menu">
                                <li><a href="#">Forms & Downloads </a></li>
                                <li><a href="#">Scholarships </a></li>
                                <li><a href="#">Semester Results</a></li>
                                <li><a href="#">Time Table</a></li>
								<li><a href="#">Clubs</a></li>
                                <li><a href="#">Sports</a></li>
                                <li><a href="#">Portals</a></li>
                                <li><a href="#">Important Contacts</a></li>
                            </ul>
                        </li>
                        <li>
                           <a href="#" title=""><i class="fa fa-caret-down"></i> Admissions</a>
						   <ul class="sub-menu">
                                <li><a href="#">B.Tech. </a></li>
                                <li><a href="#">M.Tech. </a></li>
                                <li><a href="#">Ph.D.</a></li>
                                <li><a href="#">MCA</a></li>
                            </ul>
                        </li>
                        <li>
                            <a id="d" href="#" title="" class="department"><i class="fa fa-toggle-off"></i> Department</a>
							<script>$('#d').click(function(){$(this).find('i').toggleClass('fa-toggle-off fa-toggle-on');});</script>
                            <ul class="sub-menu visible-xs">
                                <li><a href="#">Computer Science & Engineering</a></li>
                                <li><a href="#">Electrical & Electronics Engineering</a></li>
                                <li><a href="#">Electronics & Communication Engineering</a></li>
                                <li><a href="#">Instrumentation & Control Engineering</a></li>
                                <li><a href="#">Mechanical Engineering</a></li>
                                <li><a href="#">Civil Engineering</a></li>
                                <li><a href="#">Chemical Engineering</a></li>
                                <li><a href="#">Production Engineering</a></li>
                                <li><a href="#">Metalurgical & Material's Engineering</a></li>
                                <li>
                                    <a href="#">Others</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Mathematics</a></li>
                                        <li>
                                            <a href="#">Chemistry</a>
                                            
                                        </li>
                                        <li><a href="#">Physics</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title=""><i class="fa fa-caret-down"></i> Initiatives</a>
                            <ul class="sub-menu">
                                <li><a href="#">CEDI </a></li>
                                <li><a href="#">Startup Weekend</a></li>
                                <li><a href="#">Internet Of Things</a></li>
                                <li><a href="#">Innovation Center</a></li>
                                <li><a href="#">Green Campus</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title=""><i class="fa fa-caret-down"></i> Industry</a>
							<ul class="sub-menu">
                                <li><a href="#">Placements at NITT </a></li>
                                <li><a href="#">Scholarships </a></li>
                                <li><a href="#">Consultancy & Research</a></li>
                                <li><a href="#">MoU's signed</a></li>
								<li><a href="#">Tender Invitations</a></li>
                                <li><a href="#">Vendor Registrations</a></li>
                            </ul>
                        </li>
                    </ul>
        
            	</nav><!-- main navig end -->
            
            </div>
            
        </div><!-- row end -->
    <section class="visible-lg">
                <div class="container dep" style="display:none;">
                    <div class="col-md-2">
                        <a href="#">Architecture</a><br>
                        <a href="#">CECASE</a><br>
                        <a href="#">Chemical Engineering</a><br>
                        <a href="#">Chemistry</a><br>
                </div>  
                <div class="col-md-3">
                    <a href="#">Civil Engineering</a><br>
                        <a href="#">Computer Applications</a><br>
                        <a href="#">Computer Science & Engineering</a><br>
                        <a href="#">DEE</a><br>
                </div>
                <div class="col-md-4">
                    <a href="#">Electrical & Electronics Engineering</a><br>
                        <a href="#">Electronics & Communications Engineering</a><br>
                        <a href="#">Humanities</a><br>
                        <a href="#">Instrumentation & Control Engineering</a><br>
                        <a href="#">Management Studies</a><br>
                </div>
                <div class="col-md-3">
                    
                        <a href="#">Mathematics</a><br>
                        <a href="#">Mechanical Engineering</a><br>
                        <a href="#">Metalurgical & Materials Engineering</a><br>
                        <a href="#">Production Engineering</a><br>
                        <a href="#">Physics</a><br>
                        
                </div>
            </section>
    </div><!-- container + head wrapper end -->

    <div id="k-body"><!-- content wrapper -->
    
    	<div>
           <style type="text/css">
                table tr td{padding:10px;text-align:center;}
                table {margin: 0 auto;}
           </style>
  <div class="container-fluid">
    <div class="row"> 
        <div class="col-md-2 left_col col-xs-2">
                <div class="left_col scroll-view">                    
                    <div class="clearfix"></div>
                    <br />
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <?php echo $MENUBAR; ?>
                        </div>

                    </div>
                 </div> 
        </div>
                    <div class="col-md-10 col-xs-10">
                    <div class="space-medium"></div>  
                    <div class="space-small"></div>  
                         <div class="text-center"><?php if(isset($WIDGETS[4])) echo $WIDGETS[4]; ?>
                            <?php echo $INFOSTRING; ?></div>
                            <?php echo $WARNINGSTRING;?>
                            <?php echo $ERRORSTRING; ?>
                            <?php if(isset($WIDGETS[2])) echo $WIDGETS[2]; ?>
                            <?php echo $CONTENT; ?>
                            <?php if(isset($WIDGETS[3])) echo $WIDGETS[3]; ?> 
                        <div class="text-center">
                            <?php echo $FOOTER;?></div> 
                    </div>
    </div>
   </div>
  
        </div></div>
    </div><!-- content wrapper end -->

    <div id="k-footer"><!-- footer -->
    
    	<div class="container"><!-- container -->
        
        	<div class="row no-gutter"><!-- row -->
            
            	<div class="col-lg-6 col-md-6"><!-- widgets column left -->
            
                    <div class="col-padded col-naked">
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_nav_menu"><!-- widgets list -->
                    
                                <h1 class="title-widget">Useful links</h1>
                                
                                <ul>
                                	<li><a href="#" title="menu item">Placement Exam Schedule</a></li>
                                    <li><a href="#" title="menu item">Superintendent's Hearing Audio</a></li>
                                    <li><a href="#" title="menu item">Budget Central</a></li>
                                    <li><a href="#" title="menu item">Job Opportunities - Application</a></li>
                                    <li><a href="#" title="menu item">College Acceptances as of Oct 12</a></li>
                                </ul>
                    
							</li>
                            
                        </ul>
                         
                    </div>
                    
                </div><!-- widgets column left end -->
                <div class="col-lg-6 col-md-6"><!-- widgets column center -->
                
                    <div class="col-padded col-naked">
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_recent_news"><!-- widgets list -->
                    
                                <h1 class="title-widget">Contact</h1>
                                
                                <div itemscope itemtype="http://data-vocabulary.org/Organization"> 
                                
                                	<h2 class="title-median m-contact-subject" itemprop="name">National Institute of Technology</h2>
                                
                                	<div class="m-contact-address" itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address">
                                		<span class="m-contact-street" itemprop="street-address">Thanjavur Main Road</span>
                                		<span class="m-contact-city-region"><span class="m-contact-city" itemprop="locality">Tiruchirapalli</span>, <span class="m-contact-region" itemprop="region">Tamil Nadu</span></span>
                                		<span class="m-contact-zip-country"><span class="m-contact-zip" itemprop="postal-code">620015</span> <span class="m-contact-country" itemprop="country-name">India</span></span>
                                	</div>
                                     
                                	<div class="m-contact-tel-fax">
                                    	<span class="m-contact-tel">Tel: <span itemprop="tel">631-551-3678</span></span>
                                    	<span class="m-contact-fax">Fax: <span itemprop="fax">631-551-3688</span></span>
                                    </div>
                                    
                                </div>
                                
                                <div class="social-icons">
                                
                                	<ul class="list-unstyled list-inline">
                                    
                                    	<li><a href="#" title="Contact us"><i class="fa fa-envelope"></i></a></li>
                                        <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    
                                    </ul>
                                
                                </div>
                    
							</li>
                            
                        </ul>
                        
                    </div>
                    
                </div><!-- widgets column center end -->
                <script type="text/javascript">
                /*
                <div class="col-lg-4 col-md-4"><!-- widgets column right -->
                
                    <div class="col-padded col-naked">
             

                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_sofa_flickr"><!-- widgets list -->
                    
                                <h1 class="title-widget">Flickr Stream</h1>
                                
                                <ul class="k-flickr-photos list-unstyled">
                                	
                                </ul>
                    
							</li>
                            
                        </ul> 
                        
                    </div>
                
                </div><!-- widgets column right end -->
                */
                </script>

            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </div><!-- footer end -->
    <footer class="footer">
        <div class="footer-content">
            <div class="container-fluid">
                <div class="row duck">
                <div class="footer-col col-md-3 col-sm-4 about">
                    <div class="footer-col-inner">
                        <h3>Academics</h3>
                        <ul>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Academics Programmes</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Departments</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Faculty</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Rules & Regulations</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Scholarships</a></li>
                        </ul>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->
               
                 <div class="footer-col col-md-3 col-sm-4 about">
                    <div class="footer-col-inner">
                        <h3>Admissions</h3>
                        <ul>
                            <li><a href="#"><i class="fa fa-caret-right"></i> B.Tech/B.Arc</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> M.Tech/M.Sc</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> MCA/MBA</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> MS(research)</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Ph.D</a></li>
                        </ul>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->
               
                <div class="footer-col col-md-3 col-sm-4 about">
                    <div class="footer-col-inner ">
                        <h3>Students Life</h3>
                        <ul >
                            <li><a href="#"><i class="fa fa-caret-right"></i> Events</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Clubs & Associations</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Hostel & Messes</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Office Of Dean(students)</a></li>
                            
                        </ul>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->

                <div class="footer-col col-md-3 col-sm-4 about">
                    <div class="footer-col-inner">
                        <h3>Other Links</h3>
                        <ul>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Tenders & Notices</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Job Opportunities</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> RTI</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Recal-Alumini</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> SiteMap</a></li>
                            
                        </ul>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->

    <div id="k-subfooter"><!-- subfooter -->
    
    	<div class="container"><!-- container -->
        
        	<div class="row"><!-- row -->
            
            	<div class="col-lg-12">
                
                	<p class="copy-text text-inverse">
                 <small class="copyright col-md-6 col-sm-12 col-xs-12">Copyright @ 2015 National Institute of Technology | Website template by Delta Force</small>
                    </p>
                
                </div>
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </div><!-- subfooter end -->
    

    <!-- jQuery -->

    <script src="<?php echo $TEMPLATEBROWSERPATH; ?>/js/jquery-migrate-1.2.1.min.js"></script>
    
    <!-- Bootstrap -->
    <script src="<?php echo $TEMPLATEBROWSERPATH; ?>/js/bootstrap.min.js"></script>
    
        <!-- Drop-down -->
    <script src="<?php echo $TEMPLATEBROWSERPATH; ?>/js/dropdown-menu.js"></script>
    
    
    <!-- Fancybox -->
	<script src="<?php echo $TEMPLATEBROWSERPATH; ?>/js/jquery.fancybox.pack.js"></script>
    <script src="<?php echo $TEMPLATEBROWSERPATH; ?>/js/jquery.fancybox-media.js"></script><!-- Fancybox media -->
    
    <!-- Responsive videos -->
    
    
    <!-- Audio player -->
	
    <script type="text/javascript">$(".dropdown").click(function(){
        $(this).children('.child').toggle("slow");
        //$(this).next('.child_menu').show();
        //$('li.dropdown').first(".child_menu").show();
        
    //$('.this.child_menu').show();
  });</script>
    <!-- Pie charts -->
    <script src="<?php echo $TEMPLATEBROWSERPATH; ?>/js/jquery.easy-pie-chart.js"></script>
    
    <!-- Google Maps -->
    <script type="text/javascript">
        $('.dep').hide();
            $('.department').click(function(){
                $('.dep').toggle("slow");
            });
        
    </script>
    
    <!-- Theme -->
    <script src="<?php echo $TEMPLATEBROWSERPATH; ?>/js/theme.js"></script>
    
  </body>
 </html>
