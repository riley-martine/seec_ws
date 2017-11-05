<!DOCTYPE html>
<html lang="en">
<head>
	<title>SEEC Home</title>
	<link rel="stylesheet" href="static/css/bs4carousel.css">
	<?php include 'includes/head.php';?>
	<!-- <link rel="stylesheet" href="static/css/style.css"> -->

</head>

<body>
<?php include 'includes/nav.php';?>
		<div id='imagesCarousel' class='carousel slide' data-ride='carousel'>
			<!-- this could be replaced with some php, and I had that, but this loads faster.
			If you want to optimize, maybe try a static site generator.
		 	Something that takes a foreach image in home/homeSlider[0,9]+.jpg and the captions
			and makes all the indicators and items, defaulting to no caption.-->
			<ol class='carousel-indicators'>
				<li data-target='#imagesCarousel' data-slide-to='0'></li>
				<li data-target='#imagesCarousel' data-slide-to='1'></li>
				<li data-target='#imagesCarousel' data-slide-to='2'></li>
				<li data-target='#imagesCarousel' data-slide-to='3'></li>
				<li data-target='#imagesCarousel' data-slide-to='4'></li>
				<li data-target='#imagesCarousel' data-slide-to='5'></li>
				<li data-target='#imagesCarousel' data-slide-to='6'></li>
				<li data-target='#imagesCarousel' data-slide-to='7'></li>
				<li data-target='#imagesCarousel' data-slide-to='8'></li>
				<li data-target='#imagesCarousel' data-slide-to='9'></li>
				<li data-target='#imagesCarousel' data-slide-to='10'></li>
			</ol>

			<div class='carousel-inner' role='listbox'>
				<div class='item'>
					<img class='d-block img-fluid' src='static/img/home/seecfieldday.jpg'>
					<div class="carousel-caption hidden-xs"><span>
					 Members of our NCSSM SEEC branch pose for a group picture after an incredible SEEC Field day!
					</span></div>
				</div>


				
				<div class='item'>
					<img class='d-block img-fluid' src='static/img/home/homeSlider1.jpg'>
					<div class="carousel-caption hidden-xs"><span>
					 Meet Executive President Vincent Xia! Vincent lives in Chapel Hill and loves the environment. He is using his experience to bridge gaps within the community through SEEC!
					</span></div>
				</div>


        <div class='item'>
					<img class='d-block img-fluid' src='static/img/home/2016photography.jpg'>
					<div class="carousel-caption hidden-xs"><p>Photograph by Samantha Ixcot from Hialeah, FL, winner of the 2016 SEEC Nature Photography Contest.</p></div>
				</div>
				 
				<div class='item'>
					<img class='d-block img-fluid' src='static/img/home/websiteslider.jpg'>
					<div class="carousel-caption hidden-xs"><p>SEEC partnered with the Dogwood Alliance for Storytelling Night at Motorco Music Hall on July 27th, helping to bring together the community with a fun and informative time. <a href="https://ncseec.wordpress.com/2017/09/09/stories-happen-in-forests-a-live-storytelling-event/" target=\"_blank\">Read more about Storytelling Night here!</a></p></div>
				</div>

				<div class='item'>
					<img class='d-block img-fluid' src='static/img/home/homeSlider3.jpg'>
					<div class="carousel-caption hidden-xs"><p>Founder and Past Executive President, Kenneth Xu, jokingly hugs his favorite tree. <a href="https://www.northcarolina.edu/news/2016/11/His-Own-Environment" target=\"_blank\">Read more about Kenneth’s passion for environmentalism.</a></p></div>
				</div>

				<div class='item'>
					<img class='d-block img-fluid top-0' src='static/img/home/homeSlider4.jpg'>
					<div class="carousel-caption hidden-xs"><p>SEEC attended Paul Ehrlich’s talk on “Surviving the Sixth Mass Extinction.” <a href="https://ncseec.wordpress.com/2016/11/08/paul-ehrlich-ideas-impressions-impacts/" target=\"_blank\">Here’s what we thought.</a></p></div>
				</div>

				<div class='item'>
					<img class='d-block img-fluid' src='static/img/home/homeSlider5.jpg'>
					<div class="carousel-caption hidden-xs"><p>Stuart Pimm, a world leader in conservation biology and the Doris Duke Professor of Conservation Ecology, kicked off the SEEC Colloquium Series at the North Carolina School of Science and Mathematics with an engaging talk in front of an overflowing crowd!</p></div>
				</div>

				<div class='item'>
					<img class='d-block img-fluid' src='static/img/home/homeSlider6.jpg'>
					<div class="carousel-caption hidden-xs"><p>
					Keshav is from Cary, NC, and is extremely dedicated to helping teach people about the environment and how to protect it! He has helped out with various SEEC fundraisers, activism events, outreach, and more!
					</p></div>
				</div>

				<div class='item'>
					<img class='d-block img-fluid' src='static/img/home/flowerreplacement.jpg'>
					<div class="carousel-caption hidden-xs"><p>
					SEEC is a strong proponent of going outside whenever you have the chance! <a href="http://www.huffingtonpost.com/2014/06/22/how-the-outdoors-make-you_n_5508964.html" target=\"_blank\">Here’s proof that nature truly makes us healthier.</a></p></div>
				</div>

				<div class='item'>
					<img class='d-block img-fluid' src='static/img/home/higherqualitymatthew.jpg'>
					<div class="carousel-caption hidden-xs"><p>Farms in Eastern North Carolina continue to recover from the devastating effects of Hurricane Matthew. The neglected issue of Eastern North Carolina’s water quality poses a danger to residents, as the amount of animal waste from farms that contaminated rivers and other bodies of water was largely underestimated.</p></div>
				</div>

				<div class='item'>
					<img class='d-block img-fluid top-0' src='static/img/home/homeSlider9.jpg'>
					<div class="carousel-caption hidden-xs"><p>At the 2016 NatureWay Charity Summer Camp, some campers created their own compost bins as a guided science project. Through composting, kids gain an awareness of their roles in the world as they learn about how waste is produced and how it could be reduced.</p></div>
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

<div class="container hide-nonmobile">
			  <p>
				  SEEC aims to cultivate environmental literacy by providing unique opportunities for young people to engage in environmentalism. 
				</p>
		  </div>



<?php include 'includes/footer.php';?>
</body>

<?php include_once 'includes/js.php'; ?>
<script>

// This sets the active link in the nav.

// var url = window.location.pathname;
// var filename = url.substring(url.lastIndexOf('/')+1);
// var noExtension = filename.slice(0, -4);

$(document).ready(function () {
	$(".nav li").removeClass("active");
	//$($("#" + noExtension)).addClass("active");
	// Set first carousel item to active
	$(".carousel-indicators").children().first().addClass("active");
	$(".carousel-inner").children().first().addClass("active");

});
</script>

</html>
