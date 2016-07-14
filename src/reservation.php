<?php 
$pageTitle = "Make Reservations";
include("includes/header.php"); ?>

	<main>
	
		<h4 class="golden"> Fill the form below to make a reservation. Please check the table status <a href="tableStatus.php">here</a>.</h4>
		
		<form method="post" action="process.php" class="form-horizontal">
		  
		<table class = "table table-responsive"> 
		  		 
		  <div class="form-group">
			<tr>
				<th><label for="name" class="col-md-4">Name</label></th>
				<td><input class="form-control col-md-10" type="text" id="name" name="name" value="" /></td>
			</tr>
		  <div> 
		  
		  <div class="form-group">
			<tr>
				<th><label for="email" class="col-md-4">E-Mail ID</label></th>
				<td><input class="form-control col-md-10" type="text" id="email" name="email" value="" /></td>
			</tr>
		  <div> 
		  <div class="form-group">
			  <tr>
				<th><label for="time" class="col-md-4">Time</label></th>
				<td><select class="form-control col-md-10" id="time">
				  <option>6:30PM</option>
				  <option>7:30PM</option>
				  <option>8:30PM</option>
				  <option>9:30PM</option>
				  <option>10:30PM</option>
				  <option>11:30PM</option>
				  <option>12:30PM</option>
				</select></td>
			  </tr>
		  <div> 
		  <div class="form-group">
			  <tr>
				<th><label for="count" class="col-md-4">Diner's Count</label></th>
				<td><input class="form-control col-md-10" type="number" id="count" name="count" value="" /></td>
			  </tr>
		  <div> 
		  
		 <div class="form-group">
			  <tr>
				<th><label for="tableNumber" class="col-md-4">Table Number</label></th>
				<td><select class="form-control col-md-10" id="tableNumber">
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
					  <option>6</option>
					  <option>7</option>
					  <option>8</option>
					  <option>9</option>
					  <option>10</option>
					  <option>11</option>
					  <option>12</option>
					  <option>13</option>
					  <option>14</option>
					  <option>15</option>
					  <option>16</option>
					  <option>17</option>
					  <option>18</option>
					  <option>19</option>
					  <option>20</option>
				</select></td>
			  </tr>
		  <div> 
		  		  
		</table>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-primary submit-btn">Submit</button>
			</div>
		  </div>
		  
		</form>
	</main>
	
<?php include("includes/footer.php"); ?>