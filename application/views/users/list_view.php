<!-- <style type="text/css">
	.img-thumbnail {
		width: 75px;
	}
	tbody > tr >  td {
		vertical-align: middle !important;
	}
</style> -->
<!-- Main content -->
<section class="content user-list">

	<div class="row">
		<div class="col-md-12">
			<?php echo $this->session->flashdata('message') ?>
			<!-- Default box -->
			<div class="box">
				<div class="box-header with-border text-right">
					<a href="<?= base_url('user/create/') ?>">
						<button class="btn bg-purple btn-flat"><i class="fa fa-plus"></i> New User</button>
					</a>
					
				</div>

				<div class="box-body">
					<table id="example2" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Username</th>
								<th>Fullname</th>
								<th>Birthdate</th>
								<th>Age</th>
								<th>Gender</th>
								<th>Mobile No.</th>
								<th>Email</th>
							</tr>
						</thead>

						<tbody>
							<?php foreach($entities as $entity): ?>
								<tr>
									<td><?php echo $entity->username ?></td>
									<td><?php echo $entity->fullname ?></td>
									<td><?php echo date('M d, Y', strtotime($entity->birthdate)) ?></td>
									<td><?php echo date_diff(new DateTime(), new DateTime($entity->birthdate))->y ?></td>
									<td><?php echo $entity->gender ?></td>
									<td><?php echo $entity->mobile ?></td>
									<td><?php echo $entity->email ?></td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
				<!-- /.box-body -->
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