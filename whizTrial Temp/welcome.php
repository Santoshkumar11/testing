<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="css/style.css">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- coding for slider-->
<script type="text/javascript">
    var image1 = new Image()
    image1.src = "image/banner/1.jpg"
    var image2 = new Image()
    image2.src = "image/banner/2.jpg"
	var image3 = new Image()
	image3.src = "image/banner/3.jpg"
	var image4 = new Image()
	image4.src = "image/banner/4.jpg"
	var image5 = new Image()
	image5.src = "image/banner/5.jpg"
	var image6 = new Image()
	image6.src = "image/banner/6.jpg"
	var image7 = new Image()
	image7.src = "image/banner/7.jpg"
</script>
<script>
		function fetchpage()
		{
			document.getelementbyid("contt").innerHTML="<?php include ("context.php");?>";
		}
	</script>
<title>Welcome page</title>
</head>
<?php
session_start();
$id=$_SESSION['sId'];
error_reporting(0);
//logout 
if($_REQUEST['logout']=="y" or $id=="")
{
	$_SESSION['sId']="";
	$id="";
	header("location: index.php");
}

?>
<body>
<div class="header">
		<div class="logo1">
			<img src="whiz.jpg" width="166" height="71" />
		</div>
		<div class="mid" >
			<p>Welcome to Whiztrial :-<?php echo $id; ?></p>
		</div>
		<div class="right">
			<a href="welcome.php?event=setting">Setting</a>||<a href="welcome.php?logout=y">Logout</a>
		</div>
</div>
</table></div>
<div class="banner">
<!-- this coding is gone to banner.php and include file here-->
<img src="image/banner/1.jpg" width="100%" height="178" name="slide" />
    <script type="text/javascript">
	// this code id for sliding banner
		 var step=1;
            function slideit()
            {
                document.images.slide.src = eval("image"+step+".src");
                if(step<7)
                    step++;
                else
                    step=1;
                setTimeout("slideit()",2500);
            }
            slideit();
    </script>
	
</div>
<div class="content">
<div class="conhead"><?php include 'menu.php'; ?></div>
<div id="contt" class="slicon">
<?php
 error_reporting("0");
$event=$_REQUEST['event'];
if ($event=="")
{
include("home.php");
}
else
if($event=="home")
	{
	include("home.php");
	}
	elseif($event=="about")
	{
	include("about.php");
	}
	elseif($event=="contact")
	{
	include("contact.php");
	}
	elseif($event=="training")
	{
	include("training.php");
	}
	elseif($event=="context")
	{
	include("context.php");
	}
	elseif($event=="social")
	{
	include("social.php");
	}
	elseif($event=="setting")
	{
	include("setting.php");
	}
	elseif($event=="link")
	{
	include("linktest.php");
	}
	elseif($event=="drag")
	{
	include("dragNdrop.php");
	}
	elseif($event=="frame")
	{
	include("frame.php");
	}
	elseif($event=="popup")
	{
	include("popup.php");
	}
	elseif($event=="alert")
	{
	include("jsalerttest.php");
	}
	?>
</div>
</div>
<div class="slider">
<div class="shead"><h1>Testing Option</h1></div>
<a  id="ilink" href="welcome.php?event=link" name="lt">link Test</a><br />
<a href="welcome.php?event=context" id="icontext" >Context Test</a><br />
<a href="welcome.php?event=drag" id="dad" >Drag and Drop Test</a><br />
<a href="welcome.php?event=frame" id="iframe">Frame Test</a><br />
<a href="welcome.php?event=popup" id="popup">Window Test</a><br/>
<a href="welcome.php?event=alert" id="alert">Java Script alert Test</a><br/>
</div>
<div class="footer"><h1>2014-15 &copy copyright by Whiztrial</h1></div>
</body>
</html>
