<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/vendor/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/style.css">
	<title>Code Igniter CRUD</title>
</head>
<body class="bg-light">
	<?php
		$this->load->view('layouts/navbar');
		$this->load->view(isset($view) ? $view : '', [
			'data' => isset($data) ? $data : '',
		]);
	?>
	<script src="<?php echo base_url(); ?>static/vendor/jquery/jquery-3.4.1.js"></script>
	<script src="<?php echo base_url(); ?>static/vendor/bootstrap/js/bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>static/js/app.js"></script>
</body>
</html>
