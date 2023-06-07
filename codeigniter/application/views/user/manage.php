<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!DOCTYPE html>
<html lang="en">
<?php include 'application/views/head.php'; ?>
<body>

<div id="container">
	<h2>Users</h2>
	<table class="datatable">
		<thead>
		<tr>
			<th>User Name</th>
			<th>User Email</th>
			<th>Actions</th>
		</tr>
		</thead>
		<tbody>
			<?php foreach ($users as $user){?>
			<tr>
				<td><?=$user['user_name']?></td>
				<td><?=$user['user_email']?></td>
				<td>
					<a href="<?=site_url("users/user/{$user['user_id']}")?>">Edit</a>
					<a href="<?=site_url("users/delete/{$user['user_id']}")?>">Delete</a>
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
