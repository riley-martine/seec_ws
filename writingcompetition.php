<!DOCTYPE html>
<html lang="en">
<head>
	<title>SEEC Photography & Writing Competition</title>
	<?php include "includes/head.php" ;?>
</head>

<body>
<?php include "includes/nav.php" ;?>

	<div class="container">
	<h1 class="text-primary">2018 SEEC Photography & Writing Competition Official Rules</h1>
		<p class="lead">
		Mission: This competition offers K-12 students an opportunity to showcase their work
		about environmental science and activism. This year, we are expanding the competition from
		just photography to also include writing. We hope to inspire students to learn more
		about the environment and take initiative in impacting their community.
	</p>
		<ol>
				<li>The piece of work must be related to environmental education, science, or activism.</li>
				<li>This competition is open for all students in any part of the United States.</li>
				<li>This competition is only open for students from grades kindergarten to 12th grade.</li>
				<li>This competition will be divided into three age divisions: elementary school students,
					middle school students, and high school students.</li>
				<li>There are two writing competition categories: prose and poetry.</li>
				<li>There is only one category for photography.</li>
				<li>There will be monetary awards for winners, and monetary value will be determined for each category
					depending on the number of participants.</li>
		</ol>
		<p>
		If you have any questions, please email us at
		contact@ncseec.org! The deadline is March 15, 2018 at 11:59pm!
	</p>
	<h2>		<a href="https://tinyurl.com/seecphotographyandwriting" target=\"_blank\"><b>Click here to submit your work!</b></a>
		</h2>

		<h3>Here are some pictures from SEEC's 2017 Photography Competition!</h3>
	<img src='static/img/home/flowerreplacement.jpg' width="500" height="400"></img>
	<img src='static/img/home/2016photography.jpg' width="500" height="400">
	<img src='static/img/home/homeSlider2.jpg' width="500" height="400">	
	<img src='static/img/home/bear.jpg' width="500" height="400">
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
