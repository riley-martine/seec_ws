<!DOCTYPE html>
<html lang="en">
<head>
	<title>Donate</title>
	<?php include "includes/head.php" ;?>
</head>

<body>
<?php include "includes/nav.php" ;?>

	<div class="container">
		<h1 class="text-primary">Donate Here</h1>
		<p class="lead">Donate page really coming soon!</p>
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
