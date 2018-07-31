<!-- Main content -->
<section class="content category-list">
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->session->flashdata('message') ?>
			<!-- Default box -->
			<div class="box">
				<div class="box-header with-border text-right">
					<a href="<?= base_url('category/create/') ?>">
						<button class="btn bg-purple btn-flat"><i class="fa fa-plus"></i> New Category</button>
					</a>
					
				</div>

				<div class="box-body">
					<table id="example2" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Category Name</th>
								<th>Action</th>
							</tr>
						</thead>

						<tbody>
							<?php $i = 1; ?>
							<?php foreach($entities as $entity): ?>
								<tr>
									<td><?php echo $i ?></td>
									<td><?php echo $entity->name ?></td>
									<td>
										<a href="<?= base_url('category/edit/' . $entity->id) ?>">
											<button class="btn btn-sm btn-flat btn-info" data-toggle="tooltip" data-placement="top" title="Click to edit this item">
												<i class="fa fa-pencil"></i>
											</button>
										</a>
										<a href="<?= base_url('category/delete/' . $entity->id) ?>">
											<button class="btn btn-sm btn-flat btn-danger" data-toggle="tooltip" data-placement="top" title="Click to remove this item">
												<i class="fa fa-times"></i>
											</button>
										</a>
									</td>
								</tr>
								<?php $i++; ?>
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