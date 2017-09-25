<!DOCTYPE html>
<html lang="en">
<head>
	<title>Meet the Team</title>
	<?php include "includes/head.php" ;?>
</head>

<body>
<?php include "includes/nav.php" ;?>

	<div class="container">
		<h1 class="text-primary">Meet the Team</h1>
		<p class="lead">Lorem ipsum dolor SEEC amet</p>
	</div>
	<div id='imagesCarousel' class='carousel slide' data-ride='carousel'>
		<!-- this could be replaced with some php, and I had that, but this loads faster.
		If you want to optimize, maybe try a static site generator.
		Something that takes a foreach image in home/homeSlider[0,9]+.jpg and the captions
		and makes all the indicators and items, defaulting to no caption.-->
		<ol class='carousel-indicators'>
			<li data-target='#imagesCarousel' data-slide-to='0'></li>
			<li data-target='#imagesCarousel' data-slide-to='1'></li>
		</ol>

		<div class='carousel-inner' role='listbox'>
			<div class='item active'>
				<img class='d-block img-fluid' src='static/img/meet/Alyssa.jpg'>
				<div class="carousel-caption hidden-xs"><span>
				Alyssa Chen
				</span></div>
			</div>

				<div class='item'>
					<img class='d-block img-fluid top-0' src='static/img/meet/Bob.jpg'>
					<div class="carousel-caption hidden-xs"><p>Bob Keener</p></div>
				</div>


		</div>

					<a class="carousel-control-prev" href="#imagesCarousel" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#imagesCarousel" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
		</a>
	</div>

<?php include "includes/footer.php" ;?>
</body>

<?php include_once "includes/js.php" ; ?>
<script>
// This sets the active link in the nav.

var url = window.location.pathname;
var filename = url.substring(url.lastIndexOf('/')+1);
var noExtension = filename.slice(0, -4);
console.log('#' + noExtension);

$(document).ready(function () {
	$(".nav li").removeClass("active");

	$($('#' + noExtension)).addClass("active");
});
</script>

</html>
