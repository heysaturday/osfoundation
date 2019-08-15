<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Onslow Memorial Hospital Foundation | Home</title>
    <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle.lite.1.0.min.js"></script>
<script type="text/javascript" src="js/tinyfader.js"></script>  
 
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8"/>
	<!--[if IE]>
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
    <![endif]-->

<script type="text/javascript">
$(function() {
    $('#linksDiv').cycle();
});
</script>
    
    
</head>

<body>
<!--Begin Page Wrapper -->
<div id="wrapper"> 
	<!--Begin Header --> <div id="header" class="clearfix"><?php include('header.php'); ?></div> <!--End Header -->
    <!-- Begin Content  -->
    <div id="content">
    	<!-- INSERT SIDEBAR PHP -->
   	  <?php include('sidebars/events-sidebar.php'); ?>
        <!-- END SIDEBAR PHP -->  
         <div id="mainContent">
         <div id="sliderwrapper">
	<div>
		
		<div id="slideshow"><div class="sliderbuttonLeft"><img src="images/left.gif" width="32" height="38" alt="Previous" onclick="slideshow.move(-1)" /></div>
        
			<ul id="slides">
	<li><a href="past-events.php"><img src="photos/home-image-1.jpg" width="700" height="343" /></a></li>
	<li><a href="volunteer.php"><img src="photos/home-image-2.jpg" width="700" height="343" /></a></li>
	<li><a href="current-campaign.php"><img src="photos/home-image-3.jpg" width="700" height="343" /></a></li>
</ul>
            
		</div>
		<div class="sliderbuttonRight"><img src="images/right.gif" width="32" height="38" alt="Next" onclick="slideshow.move(1)" /></div>
	</div>
	
</div>
  <div class="clearfix"><ul id="pagination" class="pagination">
		<li onclick="slideshow.pos(0)">1</li>
		<li onclick="slideshow.pos(1)">2</li>
		<li onclick="slideshow.pos(2)">3</li>
	</ul></div> 
         <div id="homepageBottomContentLeft">
         <h2>Onslow Memorial Hospital Foundation</h2>
         <p>We know how hard you work to keep your family healthy and happy; we've got the very same goal. The Onslow Memorial Hospital Foundation is a nonprofit fund-raising group designed to help elevate the standard of healthcare at Onslow Memorial Hospital. Our first project was to generate support to build the new $7 million dollar Radiation Oncology Center here in Onslow County. The open house for the long-awaited center took place on August 19, 2010.</p>
         </div>
         <div id="homepageBottomContentRight">
         <div id="donors">
         	<div class="header"><img src="images/donor-header.gif" /></div>
            <div id="linksDiv"> <a href="/past-events.php#sponsors"><img src="images/donnarlogos.gif" /></a>
           </div>
         </div>
         <div id="newsletter">
         <div class="header"><img src="images/newsletter-header.gif" /></div>
         <a href="newsletter.php"><img src="images/newsletter-cover.gif" /></a>         </div>
         
         
         </div> <!--end #homepageBottomContentRight -->
         
         </div> <!--end #mainContent -->
         <div class="clear">&nbsp;</div>
     </div> <!--End #content -->
    </div><div id="wrapperBottom"><img src="images/bottom-shadow.png"/></div>
<!--End Page Wrapper -->
<!--Begin Footer --> <div id="footer"><?php include('footer.php'); ?></div> <!--End Footer -->
<script type="text/javascript">
var slideshow=new TINY.fader.fade('slideshow',{
	id:'slides',
	auto:3,
	resume:true,
	navid:'pagination',
	activeclass:'current',
	visible:true,
	position:0
});

</script>
</body>
</html>
