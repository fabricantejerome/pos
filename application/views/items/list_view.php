<!-- Main content -->
<section class="content item-list">
	<div class="row">
		<div class="col-md-12">
			<?php echo $this->session->flashdata('message') ?>
			<!-- Default box -->
			<div class="box">
				<div class="box-header with-border text-right">
					<a href="<?= base_url('item/create/') ?>">
						<button class="btn bg-purple btn-flat">	<i class="fa fa-plus"></i> New Item</button>
					</a>
					
				</div>

				<div class="box-body">
					<table id="example2" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Product Line</th>
								<th>Style Number</th>
								<th>Size</th>
								<th>Color</th>
								<th>Quantity</th>
								<th>Price</th>
								<th>Barcode</th>
								<th>Category</th>
							</tr>
						</thead>

						<tbody>
							<?php $i = 1 ?>
							<?php foreach($entities as $entity): ?>
								<tr>
									<td><?= $i ?></td>
									<td><?= $entity->product_line ?></td>
									<td><?= $entity->style_number ?></td>
									<td><?= $entity->size ?></td>
									<td><?= $entity->color ?></td>
									<td><?= $entity->quantity ?></td>
									<td><?= $entity->price ?></td>
									<td><?= $entity->barcode ?></td>
									<td><?= $entity->category ?></td>
								</tr>
								<?php $i++ ?>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
			<!-- /.box -->
		</div>
	</div>

</section>
<!-- /.content -->
<script>
  $(function () {
    $('#example2').DataTable({});
  })
</script>