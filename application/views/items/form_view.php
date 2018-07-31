<!-- Bootstrap Select2 -->
<link rel="stylesheet" href="<?= base_url('resources/template/AdminLTE-2.4.3/bower_components/select2/dist/css/select2.min.css') ?>">
<!-- Main content -->
<section class="content item-form">
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
						<h3 class="box-title">Product Details</h3>
					</div>
					<!-- end of box header -->

					<!-- form -->
					<form role="form" action="<?php echo base_url('item/store') ?>" method="post">
						<!-- box body -->
						<div class="box-body">
							<div class="form-group">
								<label for="product_line">Product Line:</label>
								<input type="text" name="product_line" id="product_line" class="form-control" placeholder="Enter product line" required>
							</div>

							<div class="form-group">
								<label for="style_number">Style Number:</label>
								<input type="text" name="style_number" id="style_number" class="form-control" placeholder="Enter style number" required>
							</div>

							<div class="form-group">
								<label for="size">Size:</label>
								<input type="text" name="size" id="size" class="form-control" placeholder="Enter size" required>
							</div>

							<div class="form-group">
								<label for="color">Color:</label>
								<input type="text" name="color" id="color" class="form-control" placeholder="Enter color" required>
							</div>

							<div class="form-group">
								<label for="quantity">Quantity:</label>
								<input type="text" name="quantity" id="quantity" class="form-control" placeholder="Enter quantity" required>
							</div>

							<div class="form-group">
								<label for="price">Price:</label>
								<input type="text" name="price" id="price" class="form-control" placeholder="Enter price" required>
							</div>

							<div class="form-group">
								<label for="barcode">Barcode:</label>
								<input type="text" name="barcode" id="barcode" class="form-control" placeholder="Enter barcode">
							</div>

							<div class="form-group">
								<label for="category_id">Category:</label>
								<select class="form-control select2" name="category_id">
									<option selected disabled></option>
									<?php foreach($categories as $category): ?>
										<option value="<?= $category->id ?>"><?= $category->name ?></option>
									<?php endforeach ?>
								</select>
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
<!-- Select2 -->
<script src="<?= base_url('resources/template/AdminLTE-2.4.3/bower_components/select2/dist/js/select2.full.min.js') ?>"></script>
<script type="text/javascript">
	var ItemForm = (function() {
		var init = function() {
			var select2 = $('.select2').select2();
		}

		return {
			getInstance: function() {
				init();
			}
		}
	})();

	$(document).ready(function() {
		ItemForm.getInstance();
	});
</script>
