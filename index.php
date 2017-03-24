<!--
@Author: Miclain K <mkkeffeler>
@Date:   03-01-2017
@Last modified by:   user
@Last modified time: 03-04-2017
-->


<!DOCTYPE html>

<html lang="en">
<html class="no-js">
<div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>
<div class="pt-page" id="about-section">
	<div class="back-button hidden-xs">
		<a href="index.php?p=home" class="back" data-animation="1" data-target=".pt-page-1">
			<i class="fa"></i>
		</a>
	</div>
	<div class="container visible-xs">
		<h1>About Me</h1>
	</div>
	<div id="team" class="page-content">
		<div class="team-gallery">
			<article class="hidden-xs">
				<div class="controls-team"></div>
				<div class="team-info-wrapper"></div>
			</article>
			<div id="team-carousel" class="owl-carousel owl-theme">

			</div>
		</div>
	</div>
</div>
<head>

		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Miclain Keffeler</title>
        <meta name="description" content="">
		<meta name="msapplication-tap-highlight" content="no" />
		<meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, minimal-ui" />
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="custom.css">
        <script src="https://use.fontawesome.com/f51cd50d82.js"></script>
		<script src="js/jquery-2.1.0.min.js"></script>
        <script src="js/modernizr-2.6.2.min.js"></script>
    </head>
<div id="content">

  <body class="yo-anim-enabled">

 <div class="container header-mobile visible-xs">
 	<div class="row">


 	</div>
 </div>

 <div class="pt-page pt-page-1 home hidden-xs" id="home" data-direction="center">
   <div class="full">
		<div class="overlay-image"></div>
	</div>
   <div class="slide-content">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 slide-header">
        <h1>
 						Hello,
 						<a href="/home.html" class="tooltips change-section highlight-color yo-anim yo-anim-fade-ttb" data-target="#about-section" data-direction="bottom" rel="tooltip" data-toggle="tooltip" data-placement="top" title="about me" data-animation-delay="1000"> I'm Miclain</a><br/>
</h1>
<IMG HEIGHT="250" WIDTH="250" SRC="Images/composite.jpeg">


<br>

 				</div>

 		</div>
 	</div>
 	<div class="nav-horizontal menu-top hidden-xs nav">
 	<div class="nav-bg">

 	</div>

 </div>

 </div>
</div>

</div>
</div>
</div>
</div>
<script src="js/jquery.superslides.min.js"></script>
		<script src="js/masonry.pkgd.min.js"></script>
		<script src="js/jquery.imagesloaded.js"></script>
		<script src="js/jquery.waitforimages.min.js"></script>
		<script src="js/jquery.nicescroll.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/tooltip.js"></script>
		<script src="js/transit.js"></script>
		<script src="js/transition.js"></script>
		<script src="js/jquery.hoverdir.js"></script>
		<script src="js/main.js"></script>
 	</body>

<script>
function disable() {
    document.getElementById("mySelect").disabled=true;
}
function enable() {
    document.getElementById("mySelect").disabled=false;
}
$('.enter_link').click(function() {
       $(this).parent().fadeOut(2500);
});
</script>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Miclain Keffeler</title>
        <meta name="description" content="">
		<meta name="msapplication-tap-highlight" content="no" />
		<meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, minimal-ui" />
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="custom.css">
        <script src="https://use.fontawesome.com/f51cd50d82.js"></script>
		<script src="js/jquery-2.1.0.min.js"></script>
        <script src="js/modernizr-2.6.2.min.js"></script>
<style>

html{background: #61210B }
.wrap {
width: 100&#37;;
height: 600px; /* optional */
background: #FFFFFF; /* optional */
            font-family: 'times new roman', arial, sans-serif;
            font-size: 1em;
color: #FFFFFF;
}
#loader-wrapper .loader-section {
    position: fixed;
    top: 0;
    width: 51%;
    height: 100%;

    background: img src="Images/ualogo.png";
    z-index: 1000;
}

#loader-wrapper .loader-section.section-left {
    left: 0;
}

#loader-wrapper .loader-section.section-right {
    right: 0;
}
#loader {
    z-index: 1001; /* anything higher than z-index: 1000 of .loader-section */
}
h1 {
    color: #61210B;
}
#content {

    margin: 0 auto;
    padding-bottom: 50px;
    width: 80%;
    max-width: 978px;
}
$(document).ready(function() {

    setTimeout(function(){
      $(this).parent().fadeIn(1000);

        $('body').addClass('loaded');
        $('h1').css('color','#DC143C');
    }, 2500);

});
.nav2 {clear: both; margin: 0px; background-color: #FFFFFF;padding: 0px; font-family: verdana, arial, sans serif; font-size: 1.0em;}
.nav2 ul {float: left; width: 770px; margin: 0px; padding: 0px; border-top: solid 1px rgb(54,83,151); border-bottom: solid 1px rgb(54,83,151); background-color: rgb(127,162,202); font-weight: bold;}
.nav2 li {display: inline; list-style: none; margin: 0px; padding: 0px;}
.nav2 li a {display: block; float: left; margin: 0px 0px 0px 0px; padding: 5px 10px 5px 10px; border-right: solid 1px rgb(54,83,151); color: rgb(255,255,255); text-transform: uppercase; text-decoration: none; font-size: 100%;}
.nav2 a:hover, .nav2 a.selected {color: rgb(50,50,50); text-decoration: none;}
.buffer {clear: both; width: 730px; height: 0px; margin: 20px; padding: 20px; background-color: rgb(255,255,255);}
.content1-pagetitle {overflow: hidden; width: 750px; margin: 0px 0px 0px 0px; padding: 0px 0px 2px 0px; border-bottom: solid 3px rgb(88,144,168);); background-color: #FFFFFF;font-weight: bold; font-size: 180%;}
.loaded #loader-wrapper .loader-section.section-right,
.loaded #loader-wrapper .loader-section.section-left {


}
.loaded #loader-wrapper {
        -webkit-transform: translateY(-100%);
            -ms-transform: translateY(-100%);
                transform: translateY(-100%);

        -webkit-transition: all 2.5s 2.5s ease-out;
                transition: all 2.5s 2.5s ease-out;
}
.loaded #loader {
    opacity: 1;
}



.page-container-3 {width: 770px;margin: 0px auto; padding: 0px; background-color: url('Images/crimson-background.gif'); border: solid 1px rgb(0,0,250);}

.style16 {
    margin-left: 40px;
    font-size: medium;
}
body {font-size: 90%; width: 770px;margin: 0px auto; padding: 20px; background-color: rgb(255,255,255); font-family: arial, sans-serif;min-height: 500px;}


.content3 {float: left; width: 730px; min-height: 500px; background-color: #FFFFFF; margin: 0px; padding: 0px 0px 2px 0px; color: rgb(0,0,0); font-size: 1.0em;}

.site-name {
width: 300px;
height: 45px;
top: 12px;
position: absolute;
          z-index: 4;
overflow: hidden;
margin: 0px;
        padding-left: 0px;
        background-image: url('Images/crimson-background.gif');
}








a:link {
color: black;
       background-color: transparent;
       text-decoration: underline;
  }
a:visited {
color: blue;
       background-color: transparent;
       text-decoration: underline;
  }
a:hover {
color: red;
       background-color: transparent;
       text-decoration: underline;
  }
a:active {
color: yellow;
       background-color: transparent;
       text-decoration: underline;
  }
</style>
<head onload="timeout()" class="loaded">

<title>Miclain K Keffeler</title>
<style type="text/CSS">
body {background-color: #61210B}
</style>
<script type="text/javascript">
window.onload=timeout;
function timeout(){


function redirect(){
  opacity=1
window.location="Home.html"
return}


</script>
<div class="style16">
<meta charset="utf-8" />
<meta name="keywords" content="Miclain,Keffeler,Machine Learning, Computer, Science, Alabama, The, University, Microsoft,UA,Bama,CS,student,illinois,tennessee,memphis" />




</head>


<body>
</body>
</html>
