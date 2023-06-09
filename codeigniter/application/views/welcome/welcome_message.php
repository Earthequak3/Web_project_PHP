<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!DOCTYPE html>
<html lang="en">
<?php include 'application/views/head.php'; ?>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="userguide3/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
<div class="container">
	<table class="datatable">
		<thead>
		<tr>
			<th>1</th>
			<th>2</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>a</td>
			<td>b</td>
		</tr>
		<tr>
			<td>a</td>
			<td>b</td>
		</tr>

		</tbody>
	</table>
</div>

</body>
<script>
	window.onload = ()=>{
		let table = new DataTable('.datatable');
	}
</script>
</html>
