<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!DOCTYPE html>
<html lang="en">
<?php include 'application/views/head.php'; ?>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<body>

<div id="container">
	<h2>Add New User </h2>
	<?=form_open_multipart('',['autocomplete'=>"off"])?>
		<div class="form-group">
			<label for="date">date:</label>
			<input type="text" class="form-control" id="date" name="date" value="<?=isset($item)?date('d-m-Y',strtotime($item->date)):date('d-m-Y')?>">
		</div>
		<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" class="form-control" placeholder="Name " name="name" value="<?=$item->name?>">
		</div>
		<div class="form-group">
			<label for="capacity">Capacitate:</label>
			<input type="text" class="form-control" placeholder="Enter capacity" name="capacity" value="<?=$item->capacity?>">
		</div>
		<div class="form-group">
			<label for="price">Pret:</label>
			<input type="text" class="form-control" placeholder="Enter price" name="price" value="<?=$item->price?>">
		</div>
		<input type="submit" class="btn btn-primary"/>
	</form>
</div>
<script type="text/javascript">
	window.onload=()=>{
		$('#date').datepicker({dateFormat: "dd-mm-yy"});
	}
</script>
</body>
</html>
