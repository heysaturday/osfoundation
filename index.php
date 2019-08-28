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
<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>

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
   	  <?php include('sidebars/homepage-sidebar.php'); ?>
        <!-- END SIDEBAR PHP -->
         <div id="mainContent">
         <div id="sliderwrapper">
	<div>

		<div id="slideshow"><div class="sliderbuttonLeft"><img src="images/left.gif" width="32" height="38" alt="Previous" onclick="slideshow.move(-1)" /></div>

			<ul id="slides">
    <!-- <li><a href="upcoming-events.php"><img src="photos/home-image-0abc.jpg" width="700" height="343" /></a></li> -->
	<li><a href="past-events-BlackTieGala.php"><img src="images/gala-hp-banner-1.jpg" width="700" height="343" /></a></li>
	<li><a href="volunteer.php"><img src="photos/home-image-2.jpg" width="700" height="343" /></a></li>
</ul>

		</div>
		<div class="sliderbuttonRight"><img src="images/right.gif" width="32" height="38" alt="Next" onclick="slideshow.move(1)" /></div>
	</div>

</div>
  <div class="clearfix"><ul id="pagination" class="pagination">
		<li onclick="slideshow.pos(0)">1</li>
		<li onclick="slideshow.pos(1)">2</li>
        <!-- <li onclick="slideshow.pos(3)">4</li> -->
	</ul></div>
         <div id="homepageBottomContentLeft">
         <h2>Onslow Memorial Hospital Foundation</h2>
         <p>We know how hard you work to keep your family healthy and happy; we've got the very same goal. The Onslow Memorial Hospital Foundation is a nonprofit fund-raising group designed to help elevate the standard of healthcare at Onslow Memorial Hospital.  Below is a list of the many ways that we help support the hospital and our community.</p>
         <h2>Annual Themed Fundraising Gala</h2>
         <p>Each year in February the OMH Foundation hosts a fundraiser in support of a campaign project for Onslow Memorial Hospital.  For over 10 years the great people and businesses of Jacksonville and Onslow County have come together at this gala event to support the Foundation’s goal of providing the best healthcare facility for the entire community.  We are grateful for the community involvement.</p>
         <h2>Julie’s Pink Warrior Project</h2>
         <p>The Onslow Memorial Hospital Foundation teams up with the OMH Radiology Department each year to host Pink Ribbon Week at OMH.  The purpose of this fundraiser is to raise awareness about Breast Cancer and to raise funds to support Julie’s Pink Warrior Project.  This project is in honor or Julie Zerkle, a breast cancer warrior who lost her battle with cancer at the age of 38.  Julie was passionate about supporting those individuals with breast cancer!  The proceeds of this project will help provide screening 3D mammograms for the underinsured and the uninsured.</p>
         <p>For more information on Julie’s Pink Warrior Project contact Lee Ann Thomas at (910)577-2651 or <a href="mailto:leeann.thomas@onslow.org" target="_blank">leeann.thomas@onslow.org.</a></p>
         <h2>Donuts with Santa</h2>
         <p>Donuts with Santa is a great way to get into the holiday spirit.  The OMH Foundation hosts a fun-filled celebration for the children and families at our hospital and in our community.  What could be better than spending some quality time with Santa, Mrs. Claus and some of the Christmas elves.</p>

             <p><b>The event ticket includes the following:</b></p>

             <p>Donuts and beverage<br />
             <p>Photos with Santa<br />
             <p>Storytime with Mrs. Claus<br />
             <p>Craft time<br />
             <p>Letters to Santa</p><br>
         <h2>Caring Spirit Program - Give a gift in honor of an employee</h2>
             <p>The doctors, nurses, employees, and volunteers of Onslow Memorial Hospital play a critical role in patients' healing—both physically and emotionally. The Caring Spirit program gives you the opportunity to express your gratitude for an employee by making a gift in his or her honor. When making a gift, you can write a personal note of appreciation that will be delivered to the employee along with a special Caring Spirit lapel pin. Making a gift through the Caring Spirit program is a heartfelt, meaningful way to say thank you to an employee who has made a difference in your life. If you are interested in making a Caring Spirit gift, contact Lee Ann Thomas at (910) 577-2651, email at <a href="mailto:leeann.thomas@onslow.org" target="_blank">Leeann.Thomas@onslow.org</a>, or <a href="pdfs/CaringSpiritDonationForm.pdf" target="_blank">click here</a>.</p>

             


    
         </div>
         <div id="homepageBottomContentRight">
<!--
         <div id="donors">
         	<div class="header"><img src="images/donor-header_2016_2.png" width="200" height="20" /></div>
            <div id="linksDiv"> <img src="images/Donors_2017.gif" />
           </div>
         </div>
-->
         <div id="newsletter">
         <div class="header"><img src="images/newsletter-header.png" width="200" height="20" /></div>
         <a href="newsletter.php"><img src="images/newsletterAngle-cover2.png" /></a>         </div>


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
