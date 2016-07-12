<?php 
$pageTitle = "Thank You";
include("includes/header.php"); 
?>

	<main>
		<div>
			<h3 class="text-center">Thank you <?php echo $_GET['name']; ?>!<h3>			
			<p class="text-center">Your reservation has been made sucessfully.</p>
			<p class="text-center">You will receive a email shortly at "<?php echo $_GET['email']; ?>".</p>
			<p class="text-center">Feel free to contact us at 502-***-**** for any questions.</p>
		</div>
	</main>
	
<?php include("includes/footer.php"); ?>