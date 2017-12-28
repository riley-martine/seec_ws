<!DOCTYPE html>
<html lang="en">
<head>
	<title>About Us</title>
	<?php include "includes/head.php" ;?>
</head>

<body>
<?php include "includes/nav.php" ;?>

<div class='container ' id='about'>
		<div class="">
			<h2 class="text-primary text-center">About Us</h2>
			<p class="lead">The Student Environmental Education Coalition (SEEC) was founded by Kenneth Xu while in high school, after he was inspired to combat the effects of scientific ignorance on the environment. Based in North Carolina, SEEC is a 501(c)(3) nonprofit organization led by a 10-member board of directors composed entirely of high students.</p>
			<br>
		</div>
		<div class="">
			<h2 class="text-center">What We Do</h2>
			<p>SEEC aims to cultivate environmental literacy by providing unique opportunities for young people to engage in environmentalism. SEEC launches grassroots campaigns, mentors disadvantaged youth through service learning projects, teaches interdisciplinary seminars for gifted students, and holds a free annual summer camp for elementary school children. Additionally, SEEC hosts a colloquium series for young adults to explore environmental fields through discussions with local environmental leaders and scientists from the Research Triangle. Thanks to this vibrant academic community, SEEC also connects underrepresented minorities in STEM with advanced environmental research opportunities.
By offering a myriad of exciting experiences for young people, we can empower future leaders to bring about change in the subsequent generations that will be most affected by environmental issues. We envision a global community in which people of all ages understand their shared responsibility to work towards a cleaner and more sustainable world.</p>
			<br>
		</div>
		<div class="">
			<h2 class="text-center">Who We Are</h2>
			<p>SEEC prides itself on maintaining diverse perspectives in its leadership and membership. Comprised of high school and undergraduate environmentalists, SEEC is an entirely youth-run organization whose board members specialize in many aspects of environment studies, ranging from climate change and oceanography to energy science and environmental ethics. While they hail from all over North Carolina, all board members and officers share a common commitment to furthering environmental education and action. SEEC is especially grateful for the intersectional support it has received from various organizations, including the Walt Disney Company, the Chapel-Hill Carrboro NAACP, the United Church of Chapel Hill, the Triangle Nonprofit & Volunteer Leadership Center, the Carolina Campus Community Garden, the North Carolina Office of Environmental Education and Public Affairs, the North Carolina School of Science and Mathematics, Youth Service America, and NatureWay Charity.</p>
			<br>
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
