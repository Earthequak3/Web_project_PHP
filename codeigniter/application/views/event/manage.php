<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!DOCTYPE html>
<html lang="en">
<?php include 'application/views/head.php'; ?>
<body>

<div id="container">
	<h2>Events</h2>
	<table class="datatable">
		<thead>
		<tr>
			<th>Name</th>
			<th>Date</th>
			<th>Actions</th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($events as $event){?>
			<tr>
				<td><?=$event['name']?></td>
				<td><?=$event['date']?></td>
				<td>
					<a href="<?=site_url("events/event/{$event['id']}")?>">Edit</a>
					<a href="<?=site_url("events/delete/{$event['id']}")?>">Delete</a>
				</td>
			</tr>
		<?php } ?>
		</tbody>

	</table>
</div>
<script>
	window.onload = ()=>{
		let table = new DataTable('.datatable');
	}
</script>
</body>
</html>
