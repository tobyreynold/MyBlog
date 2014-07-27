<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Olivia Blog</title>
	<link type="text/css" rel="stylesheet" href="../statics/css/reset.css">
	<link type="text/css" rel="stylesheet" href="../statics/css/lib.css">
	<link type="text/css" rel="stylesheet" href="../statics/css/base.css">
</head>
<body>
<header id="header">
		<h1 class="logo" ><a href="#">Olivia</a></h1>
		<nav class="nav">
			<ul class="">
				<li id="" class="">
					<a href="/about">About</a>
				</li>
				<li id="" class="">
					<a href="/archives">Archives</a>
				</li>
			</ul>		
		</nav>
</header>
<section class="banner">
    <ul>
        <li style="background-image: url(../statics/images/slide_bg1.jpg);"></li>
        <li style="background-image: url(../statics/images/slide_bg2.jpg);"></li>
        <li style="background-image: url(../statics/images/slide_bg3.jpg);"></li>
        <li style="background-image: url(../statics/images/slide_bg4.jpg);"></li>
    </ul>
</section>
<main id="">
	<!-- <h1 class="">Welcome to CodeIgniter!:)</h1> -->
	<div id="" >
		<!-- <svg id="svg" width="500px" height="300px"></svg>-->
		 
		
	</div>
</main>
<footer>

	<!-- Page rendered in <strong>{elapsed_time}</strong> seconds -->
</footer>

</body>

<script type="text/javascript" src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="../statics/js/unslide.js"></script>
<script>

$(function() {
   	if(window.chrome) {
		$('.banner li').css('background-size', '100% 100%');
	}

	$('.banner').unslider({
		speed: 800,               //  The speed to animate each slide (in milliseconds)
		delay: 5000,              //  The delay between slide animations (in milliseconds)
		complete: function() {},  //  A function that gets called after every slide animation
		keys: true,               //  Enable keyboard (left, right) arrow shortcuts
		dots: false,               //  Display dot navigation
		fluid: false              //  Support responsive design. May break non-responsive designs
	});
});
</script>
 </html>




