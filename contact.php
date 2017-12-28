<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact Us</title>
	<?php include "includes/head.php" ;?>
</head>

<body>
<?php include "includes/nav.php" ;?>

	<div class="container">
		<h1 class="text-primary">Contact</h1>

		<form class="form-horizontal" role="form" method="post" action="https://formspree.io/contact@ncseec.org">
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">Name</label>
				<div class="col-sm-10" >
					<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
					<?php echo "<p class='text-danger'>$errName</p>";?>
				</div>
			</div>
			<div class="form-group">
				<label for="email" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10" >
					<input type="email" class="form-control" id="email" name="_replyto" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
					<?php echo "<p class='text-danger'>$errEmail</p>";?>
				</div>
			</div>
			<div class="form-group">
				<label for="message" class="col-sm-2 control-label">Message</label>
				<div class="col-sm-10">
					<textarea class="form-control" rows="4" name="message" value=""><?php echo htmlspecialchars($_POST['message']); ?></textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer" value="<?php echo htmlspecialchars($_POST['email']); ?>">
					<?php echo "<p class='text-danger'>$errHuman</p>";?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<input id="submit" name="submit" type="submit" value="submit" class="btn btn-raised btn-primary">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
<?php echo $result; ?>
				</div>
			</div>
		</form>
		<p> For comments or questions, please fill out the above form or email us directly at "<a href="mailto:contact@ncseec.org">contact@ncseec.org</a>"! </p>
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
