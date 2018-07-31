<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>POS</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?= base_url('resources/template/AdminLTE-2.4.3/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url('resources/template/AdminLTE-2.4.3/bower_components/font-awesome/css/font-awesome.min.css') ?>">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?= base_url('resources/template/AdminLTE-2.4.3/bower_components/Ionicons/css/ionicons.min.css') ?>">
	<!-- Datatable -->
	<link rel="stylesheet" href="<?= base_url('resources/template/AdminLTE-2.4.3/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('resources/template/AdminLTE-2.4.3/dist/css/AdminLTE.min.css') ?>">
	<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?= base_url('resources/template/AdminLTE-2.4.3/dist/css/skins/_all-skins.min.css') ?>">

	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

	<!-- jQuery 3 -->
	<script src="<?= base_url('resources/template/AdminLTE-2.4.3/bower_components/jquery/dist/jquery.min.js') ?>"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?= base_url('resources/template/AdminLTE-2.4.3/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
	<!-- DataTables -->
	<script src="<?= base_url('resources/template/AdminLTE-2.4.3/bower_components/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
	<script src="<?= base_url('resources/template/AdminLTE-2.4.3/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>
	<!-- SlimScroll -->
	<script src="<?= base_url('resources/template/AdminLTE-2.4.3/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') ?>"></script>
	<!-- FastClick -->
	<script src="<?= base_url('resources/template/AdminLTE-2.4.3/bower_components/fastclick/lib/fastclick.js') ?>"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url('resources/template/AdminLTE-2.4.3/dist/js/adminlte.min.js') ?>"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?= base_url('resources/template/AdminLTE-2.4.3/dist/js/demo.js') ?>"></script>
</head>
<body class="hold-transition skin-purple-light sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Header -->
		<?php include_once('header.php') ?>

		<!-- Left side column. contains the sidebar -->
		<?php include_once('main-sidebar.php') ?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1><?php echo $title ?></h1>
			</section>

			<?php $this->load->view($content) ?>
		</div>
		<!-- /.content-wrapper -->

		<?php include_once('footer.php') ?>

		<?php include_once('control-sidebar.php') ?>

	</div>
	<!-- ./wrapper -->
	<script>
		$(document).ready(function () {
			$('.sidebar-menu').tree()
		})
	</script>
</body>
</html>
