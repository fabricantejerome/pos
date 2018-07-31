<header class="main-header">
	<!-- Logo -->
	<a href="<?php echo base_url('user') ?>" class="logo">
		<!-- mini logo for sidebar mini 50x50 pixels -->
		<span class="logo-mini"><b>P</b>OS</span>
		<!-- logo for regular state and mobile devices -->
		<span class="logo-lg"><b>P</b>OS</span>
	</a>
	<!-- Header Navbar: style can be found in header.less -->
	<nav class="navbar navbar-static-top">
		<!-- Sidebar toggle button-->
		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>

		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<!-- User Account: style can be found in dropdown.less -->
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?= base_url('resources/images/default.png') ?>" class="user-image" alt="User Image">
						<span class="hidden-xs"><?= $this->session->userdata('fullname') ?></span>
					</a>
					<ul class="dropdown-menu">
						<!-- User image -->
						<li class="user-header">
							<img src="<?= base_url('resources/images/default.png') ?>" class="img-circle" alt="User Image">
							<p>
								<?= $this->session->userdata('fullname') ?>
								<!-- <small>Member since Nov. 2012</small> -->
							</p>
						</li>
						<!-- Menu Body -->
						<!-- <li class="user-body"> -->
							<!-- <div class="row">
								<div class="col-xs-4 text-center">
									<a href="#">Followers</a>
								</div>
								<div class="col-xs-4 text-center">
									<a href="#">Sales</a>
								</div>
								<div class="col-xs-4 text-center">
									<a href="#">Friends</a>
								</div>
							</div> -->
							<!-- /.row -->
						<!-- </li> -->
						<!-- Menu Footer-->
						<li class="user-footer">
							<div class="pull-left">
								<a href="#" class="btn btn-default btn-flat">Profile</a>
							</div>
							<div class="pull-right">
								<a href="<?php echo base_url('login/logout/') ?>" class="btn btn-default btn-flat">Sign out</a>
							</div>
						</li>
					</ul>
				</li>
				<!-- Control Sidebar Toggle Button -->
				<li class="hidden">
					<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
				</li>
			</ul>
		</div>
	</nav>
</header>