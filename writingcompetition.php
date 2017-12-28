<!DOCTYPE html>
<html lang="en">
<head>
	<title>SEEC Photography & Writing Competition</title>
	<?php include "includes/head.php" ;?>
</head>

<body>
<?php include "includes/nav.php" ;?>

	<div class="container">
		<h1 class="text-primary">2018 SEEC Photography & Writing Competition Submission Information</h1>
		<p class="lead">
		This competition offers K-12 students an opportunity to showcase their work about environmental science and activism. The piece of work must be related to environmental education, science, or activism. The competition is open for all students in any part of the United States from grades kindergarten to 12th grade. There are two writing competition categories: prose and poety. There is only one category for photography. The competition is divided into three age divisions: elementary students, middle school students, and high school students. There are monetary awards for winners, which will be determined for each category depending on the number of participants. If you have any questions, please email us at contact@ncseec.org! The deadline is March 15, 2018 at 11:59pm! <a href="https://tinyurl.com/seecphotographyandwriting" target=\"_blank\">Click here to submit your work!</a> </p>
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
