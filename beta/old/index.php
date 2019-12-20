<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Onslow Memorial Hospital Foundation | Home</title>
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
    	<div id="newSidebar">
        <div class="sidebarHeader">
        <img src="images/upcoming-event-header.gif" />
        <img src="images/hippie-shake.png" />
        <img src="images/divider.png" />
        </div>
        <div class="sidebarHeader">
        <img src="images/latest-header.gif" style="margin-bottom:21px;" />
        
        <h3>Mobile PET Scanner Update</h3>
        <p class="date">6/28/2011</p>
        <h3>Cowboy Up! Sponsors now <br />
on display</h3>
        <p class="date">6/21/2011</p>
        <p class="readMore"><a href="#">Read more news posts &raquo;</a></p>
        <img src="images/divider.png" />
        <img src="images/btn-donate-now.png" />
        </div>
        
        </div> 
         <div id="mainContent">
         <div id="sliderwrapper">
	<div>
		
		<div id="slideshow"><div class="sliderbuttonLeft"><img src="images/left.gif" width="32" height="38" alt="Previous" onclick="slideshow.move(-1)" /></div>
        
			<ul id="slides">
				<li><img src="photos/home-image-1.jpg" width="700" height="343" /></li>
				<li><img src="photos/home-image-2.jpg" width="700" height="343" /></li>
				<li><img src="photos/home-image-3.jpg" width="700" height="343" /></li>
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
         <p><a href="#">For more information click here.</a></p>
         </div>
         <div id="homepageBottomContentRight">
         <div id="donors">
         	<div class="header"><img src="images/donor-header.gif" /></div>
            <div id="linksDiv">
			<a href="http://www.goldencorral.com/" target="_blank"><img src="images/goldencorral.png" /></a>
			<a href="http://www.abarents.com/" target="_blank"><img src="images/richardrayrealestate.png" /></a>
			<a href="http://www.sneadsferryrotary.com/" target="_blank"><img src="images/sneadsferry.png" /></a>
			<a href="http://www.thecannonfoundationinc.org/" target="_blank"><img src="images/cannonfoundation.png" /></a>
</div>
         </div>
         <div id="newsletter">
         <div class="header"><img src="images/newsletter-header.gif" /></div>
         <img src="images/newsletter-cover.gif" />
         </div>
         
         
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
