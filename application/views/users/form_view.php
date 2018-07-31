<!-- Style -->
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="<?= base_url('resources/template/AdminLTE-2.4.3/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') ?>">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="<?= base_url('resources/template/AdminLTE-2.4.3/plugins/iCheck/all.css') ?>">
<!-- Bootstrap Select2 -->
<link rel="stylesheet" href="<?= base_url('resources/template/AdminLTE-2.4.3/bower_components/select2/dist/css/select2.min.css') ?>">

<!-- Main content -->
<section class="content user-form">
	<!-- Row -->
	<div class="row">
		<!-- Grid -->
		<div class="col-md-4">
			<!-- box -->
			<div class="box">
				<!-- Box element -->
				<div class="box box-default">
					<!-- box-header -->
					<div class="box-header with-border">
						<h3 class="box-title">Personal Information</h3>
					</div>
					<!-- end of box header -->

					<!-- form -->
					<form role="form" action="<?php echo base_url('user/store') ?>" method="post">
						<!-- box body -->
						<div class="box-body">
							<div class="form-group">
								<label for="fullname">Fullname:</label>
								<input type="text" name="fullname" id="fullname" class="form-control" placeholder="Enter your fullname" required>
							</div>

							<div class="form-group">
								<label>Gender:</label>
								<br />
								<div class="row">
									<label class="col-md-3">
										<input type="radio" name="gender" class="gender" value="Male" required> Male
									</label>

									<label class="col-md-3">
										<input type="radio" name="gender" class="gender" value="Female" required> Female
									</label>
								</div>
							</div>

							<div class="form-group">
								<label for="birthdate">Birthdate:</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
									<input type="text" class="form-control" name="birthdate" id="birthdate" placeholder="Enter your birthdate" required>
								</div>
							</div>

							<div class="form-group">
								<label for="address">Complete Address:</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									<input type="text" class="form-control" name="address" id="address" placeholder="Enter your complete address" required>
								</div>
							</div>

							<div class="form-group">
								<label for="mobile">Mobile Number:</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-mobile"></i></span>
									<input type="text" class="form-control" name="mobile" id="mobile" data-inputmask='"mask": "(9999) 999-9999"' data-mask required>
								</div>
							</div>

							<h4>User Credentials</h4>

							<div class="form-group">
								<label for="username">Username:</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="text" class="form-control" name="username" id="username" placeholder="Enter your username" required>
								</div>
							</div>

							<div class="form-group">
								<label for="password">Password:</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
									<input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
								</div>
							</div>

							<div class="form-group">
								<label for="email">Email:</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
								</div>
							</div>

							<div class="form-group">
								<label for="user_type">User Type:</label>
								<select class="select2 form-control" name="user_type" required>
									<?php foreach($roles as $role): ?>
										<option value="<?php echo $role->id ?>"><?php echo $role->name ?></option>
									<?php endforeach ?>
								</select>
							</div>

							<div class="form-group">
								<label for="branch">Branch:</label>
								<select class="select2 form-control" name="branch" required>
									<?php foreach($branches as $branch): ?>
										<option value="<?php echo $branch->id ?>"><?php echo $branch->name ?></option>
									<?php endforeach ?>
								</select>
							</div>
							
						</div>
						<!-- end of box body -->

						<!-- box footer -->
						<div class="box-footer">
							<input type="submit" class="btn btn-flat bg-purple pull-right" name="Submit">
						</div>
						<!-- End of box footer -->
					</form>
					<!-- end of form -->
				</div>
				<!-- End of box -->
			</div>
			<!-- End of box -->
		</div>
		<!-- End of grid -->
	</div>
	<!-- End of row -->
</section>
<!-- End of main content -->
<!-- Select2 -->
<script src="<?= base_url('resources/template/AdminLTE-2.4.3/bower_components/select2/dist/js/select2.full.min.js') ?>"></script>
<!-- Datepicker -->
<script src="<?= base_url('resources/template/AdminLTE-2.4.3/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') ?>"></script>
<!-- iCheck 1.0.1 -->
<script src="<?= base_url('resources/template/AdminLTE-2.4.3/plugins/iCheck/icheck.min.js') ?>"></script>
<!-- InputMask -->
<script src="<?= base_url('resources/template/AdminLTE-2.4.3/plugins/input-mask/jquery.inputmask.js') ?>"></script>
<script src="<?= base_url('resources/template/AdminLTE-2.4.3/plugins/input-mask/jquery.inputmask.date.extensions.js') ?>"></script>
<script src="<?= base_url('resources/template/AdminLTE-2.4.3/plugins/input-mask/jquery.inputmask.extensions.js') ?>"></script>

<script type="text/javascript">
	var UserForm = (function() {
		var init = function() {
			var birthdate = $('#birthdate');
			var gender    = $('.gender');
			var mobile    = $('#mobile').inputmask();
			var select2   = $('.select2').select2();

			birthdate.datepicker();
			gender.iCheck({
				checkboxClass: 'icheckbox_minimal-blue',
				radioClass   : 'iradio_minimal-blue'
			});
		}

		return {
			getInstance: function() {
				init();
			}
		}
	})();

	$(document).ready(function() {
		UserForm.getInstance();
	});
</script>