<!DOCTYPE html>
<html lang="en">
<head>
	<title>Natureway</title>
	<?php include "includes/head.php" ;?>
</head>

<body>
<?php include "includes/nav.php" ;?>

	<div class="container">
	<div class="alert alert-danger alert-dismissable">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		Registration for NatureWay 2017 is now closed. We hope you can join us next year!
	</div>
			<hr>
		<div class="container">
			<div class="col-md-6">
				<img class="img-responsive fill" src="static/img/natureway/natureway1.png">
			</div>
			<div class="col-md-6">
				<h2 class="text-primary">What is the NatureWay Summer Camp?</h2>
				<p class="lead">
		NatureWay is a free day camp for elementary school children (ages 6-10) co-led by the Student Environmental Education Coalition, a local 501(c)(3) nonprofit organization. NatureWay aims to stimulate interest in STEM fields through unique and engaging lessons/activities, especially in the context of the natural environment. To accomplish, we:
				</p>
				<ul>
					<li>Integrate academic lessons with safe hands-on activities, like learning how to identify flora by exploring nearby nature trails or learning about aquatic organisms by bringing in live sea stars</li>
					<li>Invite accomplished guest speakers who work in scientific or environmental fields</li>
					<li>Help campers pursue their own individual projects, such as testing a creek's water quality, writing a letter to the governor, analyzing soil 
		samples, and more</li>
				</ul>
			</div>

		</div>
			<hr>
		<div class="container">
			<div class="col-md-6">
				<img class="img-responsive fill" src="static/img/natureway/natureway2.png">
			</div>
			<div class="col-md-6">
				<h2>Who runs the program?</h2>
				<p>
				In terms of administration, all of the counselors are top students selected through application (from schools like Harvard, Yale, and NCSSM). We've chosen outgoing counselors that are qualified to teach topics including Earth science, aquatic ecology, environmental engineering, and more. Many past campers are returning partly because they enjoyed spending time with older students who served as role models, particularly for girls and minorities interested in STEM. Furthermore, NatureWay maintains a low counselor-to-camper ratio in order to ensure proper supervision at all times. 
				</p>
			</div>
		</div>
		<hr>
		<div class="container">
					<div class="col-md-6">
				<img class="img-responsive fill" src="static/img/natureway/natureway3.png">
			</div>
			<div class="col-md-6">
				<h2>When and where is it?</h2>
				<p>NatureWay will be held from August 7-11 (Monday-Friday, 9 AM-5 PM) at East Chapel Hill High School. Parents can drop off their children after 8:45 AM and pick them up before 5:15 PM.</p>
			</div>

		</div>
		<div class="container">
			<h2>Sample Daily Schedule</h2>
			<ul class="list-group">
				<li class="list-group-item">8:45 AM-9:00 AM  <b>Drop-off</b></li>
				<li class="list-group-item">9:00 AM-12:00 PM <b>Interactive presentation from guest speaker (e.g. EPA Scientist)</b></li>
				<li class="list-group-item">12:00 PM-1:00 PM <b>Lunch</b></li>
				<li class="list-group-item">1:00 PM-2:00 PM  <b>Break</b></li>
				<li class="list-group-item">2:00 PM-4:00 PM  <b>Field trip to pollinator garden</b></li>
				<li class="list-group-item">4:00 PM-5:00 PM  <b>Activities and projects (e.g. Compost Bin Building Project)</b></li>
				<li class="list-group-item">5:00 PM-5:15 PM  <b>Pick-up</b></li>
		</div>
		<div class="container">
			<h2>Additional Information</h2>
		<!--	<p>Interested in registering a camper? <a href="https://goo.gl/forms/pOMc4jXSh1uih0Kf2">Register now!</a></p>
			<p>Interested in helping out as a high school or college counselor? <a href="https://goo.gl/forms/3PIO1bj3Vfeq0zpJ2">Apply before April 3rd!</a></p>
			-->
			<p>Know others who might be interested? <a href="https://drive.google.com/uc?export=download&id=0B72bH9i84WaDS241S21yRl9mdVU">Share our flyer!</a></p>
		</div>
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
