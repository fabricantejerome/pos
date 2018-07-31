<!-- Main content -->
<section class="content category-form">
	<!-- Row -->
	<div class="row">
		<!-- Grid -->
		<div class="col-md-4">
			<!-- box -->
			<div class="box">
				<!-- Box element -->
				<div class="box box-default">
					<!-- form -->
					<form role="form" action="<?php echo base_url('category/store') ?>" method="post">
						<!-- box body -->
						<div class="box-body">
							<div class="form-group">
								<label for="category">Category:</label>
								<input type="text" name="category" id="category" class="form-control" placeholder="Enter your category name" required>
							</div>
						</div>
						<!-- end of box body -->

						<!-- box footer -->
						<div class="box-footer">
							<input type="submit" class="btn btn-flat bg-purple pull-right" value="Submit">
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
