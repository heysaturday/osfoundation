<?php
session_start();
if(isset($_SESSION['submitted_form_values'])){extract($_SESSION['submitted_form_values']);}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Onslow Memorial Hospital Foundation | Join Our List</title>
    <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
 
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8"/>
	<!--[if IE]>
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
    <![endif]-->
    
    
    
    
 <script type="text/javascript">   
    $(function(){
 $('#contact').contactable({
  subject: 'A Feeback Message'
 });
});
</script>
    
   <script src='https://www.google.com/recaptcha/api.js'></script>

    
</head>

<body class="news">
<!--Begin Page Wrapper -->
<div id="wrapper"> 
	<!--Begin Header --> <div id="header" class="clearfix"><?php include('header.php'); ?></div> <!--End Header -->
    <!-- Begin Content  -->
    <div id="content">
    	<!-- INSERT SIDEBAR PHP -->
   	  <?php include('sidebars/news-sidebar.php'); ?>
        <!-- END SIDEBAR PHP -->  
         <div id="mainContent">
         <a href="images/header-join.jpg"><img src="images/header-join.jpg" /></a>
         <p>
           <?php
if(isset($_SESSION['formtoemail_form_errors']))
{
print "<div style=\"color:#ff0000\">";
foreach($_SESSION['formtoemail_form_errors'] as $form_error_value){print "<b>" . stripslashes($form_error_value) . "</b><br>";}
print "</div>";
unset($_SESSION['formtoemail_form_errors']);
}
?>
         </p>
         <p>&nbsp;</p>
         <div id="contact">
           <form action="formtoemailpro.php" method="post">
<table border="0" style="margin-left:32px;" cellspacing="8">
<tr align="left"><td>Full Name</td><td><input type="text" name="name" value="<?php if(isset($name)){print stripslashes($name);}else{print "";} ?>"></td></tr>
<tr align="left"><td>City</td><td><input type="text" name="city" value="<?php if(isset($city)){print stripslashes($city);}else{print "";} ?>"></td></tr>
<tr align="left"><td>State</td><td><input type="text" name="state" value="<?php if(isset($state)){print stripslashes($state);}else{print "";} ?>"></td></tr>
<tr align="left"><td>Email</td><td><input type="text" name="email" value="<?php if(isset($email)){print stripslashes($email);}else{print "";} ?>"></td></tr>
<tr align="left"><td valign="top">Comments</td><td><textarea name="comments" rows="6" cols="30" value="<?php if(isset($comments)){print stripslashes($comments);}else{print "";} ?>"></textarea></td></tr>

<tr align="left"><td>&nbsp;</td><td><div class="g-recaptcha" style="padding:10px 0px;" data-sitekey="6LerC0QUAAAAAHrpKvKYQ9ikMFBvxMXp1R_kiQjD"></div><input type="submit" value="Send"></td></tr>
</table>
</form></div>

         
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
