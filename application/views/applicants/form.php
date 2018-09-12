<!-- Style -->
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="<?= base_url('resources/template/AdminLTE-2.4.3/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') ?>">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="<?= base_url('resources/template/AdminLTE-2.4.3/plugins/iCheck/all.css') ?>">
<!-- Bootstrap Select2 -->
<link rel="stylesheet" href="<?= base_url('resources/template/AdminLTE-2.4.3/bower_components/select2/dist/css/select2.min.css') ?>">

<style type="text/css">
	.remove-icon {
		position: relative;
		top: 4px;
		left: 5px;
		color: #d33724;
		cursor: pointer;
	}
</style>

<!-- Main content -->
<section class="content applicant-form">
	<div class="row">
		<div class="col-md-12">
			<!-- <form role="form" method="post" action="store"> -->
			<?php echo form_open_multipart('applicant/store') ?>
				<!-- Default box -->
				<div class="box">
					<!-- box body -->
					<div class="box-body">
						<!-- Custom Tabs -->
						<div class="nav-tabs-custom">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tab_1" data-toggle="tab">Personal Information</a></li>
								<li><a href="#tab_2" data-toggle="tab">Contact Information</a></li>
								<li><a href="#tab_3" data-toggle="tab">Education</a></li>
								<li><a href="#tab_4" data-toggle="tab">Employment History</a></li>
								<!-- <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li> -->
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="tab_1">
									<div class="row">
										<div class="col-md-4 col-md-offset-1">
											<div class="form-group">
												<label for="inputThumbnail">Select Thumbnail</label>
												<input type="file" id="inputThumbnail" name="thumbnail" >
											</div>

											<div class="form-group">
												<label for="inputPosition">Position Applied</label>
												<input type="text" class="form-control" id="inputPosition" placeholder="Position Appplied" name="position_applied" value="Web Developer" required>
											</div>

											<div class="form-group">
												<label for="inputName">Name</label>
												<input type="text" class="form-control" id="inputName" placeholder="Fullname" name="fullname" value="Jerome Fabricante" required>
											</div>

											<!-- Date -->
											<div class="form-group">
												<label for="inputBirthdate">Birthdate:</label>

												<div class="input-group date">
													<div class="input-group-addon">
														<i class="fa fa-calendar"></i>
													</div>

													<input type="text" class="form-control pull-right" id="inputBirthdate" placeholder="Birthdate" value="12/22/1992" name="birthdate" required>
												</div>
												<!-- /.input group -->
											</div>
											<!-- /.form group -->

											<div class="form-group">
												<label for="inputBirthplace">Birthplace</label>
												<input type="text" class="form-control" id="inputBirthplace" placeholder="Birthplace" value="Paco Manila" name="birthplace" required>
											</div>

											<div class="form-group">
												<label for="inputHeight">Height</label>
												<input type="text" class="form-control" id="inputHeight" placeholder="Height" value="5.3" name="height">
											</div>

											<div class="form-group">
												<label for="inputWeight">Weight</label>
												<input type="text" class="form-control" id="inputWeight" placeholder="Weight" value="53" name="weight">
											</div>

											<div class="form-group">
												<label for="inputReligion">Religion</label>
												<input type="text" class="form-control" id="inputReligion" placeholder="Religion" value="SDA" name="religion">
											</div>

										</div>

										<div class="col-md-4 col-md-offset-1">
											<!-- For thumbnail -->
											<div class="form-group">
												<img src="<?= base_url('resources/images/default.png') ?>" id="thumbnail" name="thumbnail" class="img img-responsive" style="width: 30%">
											</div>

											<div class="form-group">
												<label for="inputCivil">Civil Status</label>
												<select class="form-control select2" id="inputCivil" style="width: 100%;" name="civil_status" required>
													<option></option>
													<option selected>Single</option>
													<option>Married</option>
												</select>
											</div>

											<div class="form-group">
												<label>Gender</label>
												<div class="radio">
													<label>
														<input type="radio" name="gender" class="flat-blue" value="Male" checked required>
														Male
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" name="gender" class="flat-blue" value="Female" required>
														Female
													</label>
													
												</div>
											</div>

											<div class="form-group">
												<label for="inputFather">Father's Name</label>
												<input type="text" class="form-control" id="inputFather" placeholder="Father's name" name="father_name" value="Raul Fabricante" required>
											</div>

											<div class="form-group">
												<label for="inputMother">Mother's Name</label>
												<input type="text" class="form-control" id="inputMother" placeholder="Mother's name" name="mother_name" value="Arlene Fabricante" required>
											</div>

											<div class="form-group">
												<label for="inputSpouse">Spouse's Name</label>
												<input type="text" class="form-control" id="inputSpouse" placeholder="Spouse" name="spouse">
											</div>
										</div>
									</div>
								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane" id="tab_2">
									<div class="row">
										<div class="col-md-4 col-md-offset-1">
											<div class="form-group">
												<label for="primaryAddress">Primary Address</label>
												<input type="text" class="form-control" id="primaryAddress" name="primary_address" placeholder="Primary Address" value="Blk 4 Lot 24 Buklod Bahayan Tartaria Silang Cavite" required>
											</div>

											<div class="form-group">
												<label for="provincialAddress">Provincial Address</label>
												<input type="text" class="form-control" id="provincialAddress" name="provincial_address" placeholder="Provincial Address" value="Blk 4 Lot 24 Buklod Bahayan Tartaria Silang Cavite" required>
											</div>

											<div class="form-group">
												<label for="emailAdress">Email Address</label>
												<input type="email" class="form-control" id="emailAdress" name="email_address" placeholder="Email Address" value="fabricantejerome@gmail.com" required>
											</div>

											<div class="form-group">
												<label for="homePhone">Home Phone</label>
												<input type="text" class="form-control" id="homePhone" name="home_phone" placeholder="Home Phone">
											</div>

											<div class="form-group">
												<label for="mobileNumber">Mobile Number</label>
												<input type="text" class="form-control" id="mobileNumber" name="mobile_number" placeholder="Mobile Number" value="09272612690" required>
											</div>

										</div>

										<div class="col-md-4 col-md-offset-1">
											
											<div class="form-group">
												<label for="skypeAccount">Skype Account</label>
												<input type="email" class="form-control" id="skypeAccount" name="skype_account" placeholder="Skype Account">
											</div>

											<div class="form-group">
												<h4>Person to contact in case of emergency</h4>
												<label for="contactPerson">Contact Person</label>
												<input type="text" class="form-control" id="contactPerson" name="contact_person" value="Arlene Fabricante" placeholder="Name">
											</div>

											<div class="form-group">
												<label for="relation">Relation</label>
												<input type="text" class="form-control" id="relation" name="relation" placeholder="Relation" value="Mother">
											</div>

											<div class="form-group">
												<label for="contactAddress">Address</label>
												<input type="text" class="form-control" id="contactAddress" name="contact_address" placeholder="Contact Address" value="Blk 4 Lot 24 Buklod Bahayan Tartaria Silang Cavite">
											</div>

											<div class="form-group">
												<label for="contactNumber">Contact Number</label>
												<input type="text" class="form-control" id="contactNumber" name="contact_number" placeholder="Contact Number" value="09272612690">
											</div>

										</div>

									</div>
									
								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane" id="tab_3">
									<table class="table table-bordered" id="education_tbl">
										<tr>
											<th style="width: 150px;">Level</th>
											<th>Name of School</th>
											<th>Degree / Course</th>
											<th>Date Inclusive</th>
											<th></th>
										</tr>
										<tr>
											<td>
												<select class="form-control select2" style="width: 100%;" name="level[]">
													<option></option>
													<option selected>Elementary</option>
													<option>High School</option>
													<option>College</option>
													<option>Vocational</option>
													<option>Others</option>
												</select>
											</td>
											<td>
												<input type="text" class="form-control" name="school[]" value="M. Hebrado Elem. School" placeholder="School">
											</td>
											<td>
												<input type="text" class="form-control" name="degree[]" placeholder="Degree / Course">
											</td>
											<td>
												<input type="text" class="form-control" name="school_year[]" placeholder="yyyy - yyyy" value="1999 - 2005">
											</td>
											<td><i class="fa fa-2x fa-times-circle remove-icon"></i></td>
										</tr>
										
									</table>

									<button type="button" id="add_educ_btn" class="btn btn-success text-right">Add Row</button>
								</div>
								<!-- /.tab-pane -->

								<!-- /.tab-pane -->
								<div class="tab-pane" id="tab_4">
									<h4>Work Experience(present to previous)</h4>

									<table class="table table-bordered" id="employment_tbl">
										<tr>
											<th>Company Name</th>
											<th>Company Address</th>
											<th>Agency</th>
											<th>Position</th>
											<th>Dates</th>
											<th></th>
										</tr>
										<tr>
											<td>
												<input type="text" class="form-control" name="company_name[]" placeholder="Company Name" value="Isuzu Philippines Corporation">
											</td>
											<td>
												<input type="text" class="form-control" name="company_address[]" placeholder="Company Address" value="Laguna Technopark">
											</td>
											<td>
												<input type="text" class="form-control" name="agency[]" placeholder="Agency">
											</td>
											<td>
												<input type="text" class="form-control" name="position[]" placeholder="Position" value="System Analyst">
											</td>
											<td>
												<input type="text" class="form-control" name="dates[]" placeholder="Inclusive Dates" value="2017 - 2018">
											</td>
											<td><i class="fa fa-2x fa-times-circle remove-icon"></i></td>
										</tr>
									</table>

									<button type="button" id="add_emp_btn" class="btn btn-success text-right">Add Row</button>
								</div>
								<!-- /.tab-pane -->
							</div>
							<!-- /.tab-content -->
						</div>
						<!-- nav-tabs-custom -->
					</div>
					<!-- End of box body -->
					<!-- box footer -->
					<div class="box-footer">
						<input type="submit" class="btn btn-default pull-right" name="Submit">
					</div>
					<!-- End of box footer -->
				</div>
				<!-- End of box -->
			</form>
		</div>
		<!-- /.col -->
	</div>
</section>
<!-- Select2 -->
<script src="<?= base_url('resources/template/AdminLTE-2.4.3/bower_components/select2/dist/js/select2.full.min.js') ?>"></script>
<!-- Datepicker -->
<script src="<?= base_url('resources/template/AdminLTE-2.4.3/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') ?>"></script>
<!-- iCheck 1.0.1 -->
<script src="<?= base_url('resources/template/AdminLTE-2.4.3/plugins/iCheck/icheck.min.js') ?>"></script>

<!-- End of main content -->
<script type="text/javascript">
	var ApplicantForm = (function() {
		var init = function() {
			var $birthdate = $('#inputBirthdate');

			$birthdate.datepicker();

			$('.select2').select2();

			$('input[type="radio"].flat-blue').iCheck({
				checkboxClass: 'icheckbox_flat-blue',
				radioClass   : 'iradio_flat-blue'
			})

			$birthdate.on('change', function() {
				console.log($date = new Date($(this).val()));

				console.log($date.getDay());
			});

			$(document).on('click', '.remove-icon', function() {
				$(this).closest('tr').remove();
			});
		}

		var addEducation = function() {
			var $add_btn = $('#add_educ_btn');
			var $table = $('#education_tbl');

			$add_btn.on('click', function() {
				var markup = '<tr>';
					markup += '<td>';
						markup += '<select class="form-control select2" style="width: 100%;" name="level[]">';
							markup += '<option></option>';
							markup += '<option>Elementary</option>';
							markup += '<option>High School</option>';
							markup += '<option>College</option>';
							markup += '<option>Vocational</option>';
							markup += '<option>Others</option>';
						markup += '</select>';
					markup += '</td>';
					markup += '<td>';
						markup += '<input type="text" class="form-control" name="school[]" placeholder="School">';
					markup += '</td>';
					markup += '<td>';
						markup += '<input type="text" class="form-control" name="degree[]" placeholder="Degree / Course">';
					markup += '</td>';
					markup += '<td>';
						markup += '<input type="text" class="form-control" name="school_year[]" placeholder="yyyy - yyyy">';
					markup += '</td>';
					markup += '<td><i class="fa fa-2x fa-times-circle remove-icon"></i></td>';
				markup += '</tr>';


				$table.append(markup);

				// Attach JS functionality
				$('.select2').select2();
			});
		}

		var addEmployment = function() {
			var $add_btn = $('#add_emp_btn');
			var $table   = $('#employment_tbl');

			$add_btn.on('click', function() {
				var markup = '<tr>';
						markup +='<td>';
							markup +='<input type="text" class="form-control" name="company_name[]" placeholder="Company Name">';
						markup +='</td>';
						markup +='<td>';
							markup +='<input type="text" class="form-control" name="company_address[]" placeholder="Company Address">';
						markup +='</td>';
						markup +='<td>';
							markup +='<input type="text" class="form-control" name="agency[]" placeholder="Agency">';
						markup +='</td>';
						markup +='<td>';
							markup +='<input type="text" class="form-control" name="position[]" placeholder="Position">';
						markup +='</td>';
						markup += '<td>';
							markup += '<input type="text" class="form-control" name="dates[]" placeholder="yyyy - yyyy">';
						markup += '</td>';
						markup +='<td><i class="fa fa-2x fa-times-circle remove-icon"></i></td>';
					markup +='</tr>';

				$table.append(markup);
			});
		}

		var uploadThumbnail = function() {
			$('#inputThumbnail').on('change', function(event) {
				var tmppath = URL.createObjectURL(event.target.files[0]);
				$('#thumbnail').attr('src', tmppath);
			});
		}

		return {
			getInstance: function() {
				init();
				addEducation();
				addEmployment();
				uploadThumbnail();
			}
		}
	})();

	$(document).ready(function() {
		ApplicantForm.getInstance();
	});


</script>