<?php session_start();
include("head_admin.php");

if (isset($_SESSION['valid_user']) && $_SESSION['valid_user']!=""){ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>:::Sulekha Gems:::</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="icon"
type="image/png"
href="image/logo.png" />

<link href="css.css" type="text/css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" type="text/css" />


<!-- dd menu -->
<script type="text/javascript">
<!--
var timeout         = 500;
var closetimer		= 0;
var ddmenuitem      = 0;

// open hidden layer
function mopen(id)
{	
	// cancel close timer
	mcancelclosetime();

	// close old layer
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

	// get new layer and show it
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';

}
// close showed layer
function mclose()
{
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}

// go close timer
function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}

// cancel close timer
function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

// close layer when click-out
document.onclick = mclose; 
// -->
</script>
<style type="text/css" media="screen">
#slider {
    width: 247px; /* important to be same as image width */
    height: 250px; /* important to be same as image height */
    position: relative; /* important */
	overflow: hidden; 
	margin:0px;
	padding:0px;
	/* important */
}
#sliderContent {
    width:247px; /* important to be same as image width or wider */
    position: absolute;
	top: 0; 
	padding:0px;
	margin:0px;
	
}
.sliderImage {
    float: left;
    position: relative;
	display: none;
	padding:0px;
	margin:0px;

}
.sliderImage span {
    position: absolute;
	font: 10px/15px Arial, Helvetica, sans-serif;
    padding: 10px 13px;
    width: 247px;
    background-color: #000;
    filter: alpha(opacity=70);
    -moz-opacity: 0.7;
	-khtml-opacity: 0.7;
    opacity: 0.7;
    color: #fff;
    display: none;
	padding:0px;
	margin:0px;
}
.clear {
	clear: both;
}
.sliderImage span strong {
    font-size: 14px;
	margin:0px;
	padding:0px;

}
.top {
	top: 0;
	left: 0;
	margin:0px;
	padding:5px 0px 5px 0px;
}
.bottom {
	bottom: 0;
    left: 0;
	margin:0px;
	padding:0px;
}
ul { list-style-type: none;}

</style>

<style type="text/css">

/*set CSS for SPAN tag surrounding each image*/
.seqslidestyle{
margin-right: 10px;
display:inline;
}
</style>
<!-- JavaScripts-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="s3Slider.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#slider').s3Slider({
            timeOut: 3000
        });
    });
</script>
<link href="css/default.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="coutent">
	<div id="flash">
    <div id="slider">
        <ul id="sliderContent">
            <li class="sliderImage">
                <a href=""><img src="example_images/410/9.jpg" alt="1" /></a>
                <span class="top"><strong>Ruby Glass Filled</strong><br /></span>
            </li>
            <li class="sliderImage">
                <a href=""><img src="example_images/410/5.jpg" alt="2" /></a>
                <span class="top"><strong>Black Diamond Beads</strong><br /></span>
            </li>
            <li class="sliderImage">
              <a href="">  <img src="example_images/410/12.jpg" alt="3" /></a>
                <span class="top"><strong>Blue Sapphire Shaded</strong><br /></span>
            </li>
            <li class="sliderImage">
               <a href=""> <img src="example_images/410/10.jpg" alt="4" /></a>
                <span class="top"><strong>Multi Sapphire</strong><br /></span>
            </li>
            <li class="sliderImage">
                <a href=""><img src="example_images/410/7.jpg" alt="5" /></a>
                <span class="top"><strong>Emerald Drops</strong><br /></span>
            </li>
			 <li class="sliderImage">
                <a href=""><img src="example_images/410/7.jpg" alt="6" /></a>
                <span class="top"><strong>Ruby Shaded</strong><br /></span>
            </li>
						
            <div class="clear sliderImage"></div>
        </ul>
    </div>
	
	</div>
      <div id="welcome">
	  <div class="welcome_image"><img src="image/welcome_sulekha_jems.gif" /></div>
	  <div class="welcome_text"><strong>Sulekha Gems</strong> stands strongly amongst the most prestigious   manufacturers and exporters of GemStones, Precious and Semi Precious Beads &amp; Silver Jewellery. We are pleased to present ourselves as one of the top    exporters in Gemstone Beads, Semi-Precious, Precious Stones, and Fashion Jewelry etc. Our products have typical Indian craftsmanship with pinch of latest                    fashion and workmanship. From beginning to end, nobody puts it together like Sulekha Gems. Incredible Amethyst, Citrine, Garnet, Peridot, Blue Topaz, Tourmaline and other gems put us miles ahead when it comes to creating the most marvelous finished pieces. So, whatever your needs, small Gemstones, large gemstones or exclusive finished jewelry, we make ends meet.</div>
	</div> 
</body>
</html>	
<?php
include("foot_admin.php");
?>
<?php	
	
}else{
	
	header("location:admin_sulekha.php");
}		
?>


