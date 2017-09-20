<!DOCTYPE html>
<html lang="en">
<head>
	<title>Get Involved!</title>
	<?php include "includes/head.php" ;?>
</head>

<body>
<?php include "includes/nav.php" ;?>

	<div class="container">
		<h1 class="text-primary">Get Involved</h1>

		<h2>Buisnesses, Nonprofits, and Service Groups:</h2>
		<p>Interested in supporting or partnering with SEEC? We are always looking for creative ways to expand our reach! <a href="contact.php">Contact us</a> for more information.</p>
		<hr>
		<h2>Adults:</h2>
		<p>Want to help out SEEC in the most convenient way possible? Consider making an online <a href="donate.php">donation</a>!</p>
		<hr>
		<h2>Young Adults:</h2>
		<p>SEEC is constantly searching for bright and passionate students with potential for leadership. We have several officer positions open, and any teenager is welcome to apply. Just <a href="contact.php">ask us</a> about available positions.</p>
		<hr>
		<h2>Kids:</h2>
		<p>Think you might be interested in fun environmental activities? Check out our main programs, and with your parent/guardian’s permission, either sign up on the respective page, <a href="contact.php">contact us</a>, or simply show up!</p>
	</div>


<?php include "includes/footer.php" ;?>
</body>

<?php include_once "includes/js.php" ; ?>
<script>
// This sets the active link in the nav.

var url = window.location.pathname;
var filename = url.substring(url.lastIndexOf('/')+1);
var noExtension = filename.slice(0, -4);

$(document).ready(function () {
	$(".nav li").removeClass("active");

	$($('#' + noExtension)).addClass("active");
});
</script>

</html>
