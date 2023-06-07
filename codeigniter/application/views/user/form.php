<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!DOCTYPE html>
<html lang="en">
<?php include 'application/views/head.php'; ?>
<body>

<div id="container">
	<h2>Add New User </h2>
	<?=form_open_multipart()?>
		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" class="form-control" id="email" placeholder="Enter email" name="user_email" value="<?=$user->user_email?>">
		</div>
		<div class="form-group">
			<label for="email">Name:</label>
			<input type="text" class="form-control" placeholder="Name " name="user_name" value="<?=$user->user_name?>">
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" placeholder="Enter password" name="user_password" value="<?=$user->user_password?>">
		</div>

		<input type="submit" class="btn btn-primary"/>
	</form>
</div>

</body>
</html>
