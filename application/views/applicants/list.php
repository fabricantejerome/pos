<style type="text/css">
	.img-thumbnail {
		width: 75px;
	}
	tbody > tr >  td {
		vertical-align: middle !important;
	}
</style>
<!-- Main content -->
<section class="content applicant-list">
	<?php echo $this->session->flashdata('message') ?>
	<!-- Default box -->
	<div class="box">
		<div class="box-header with-border text-right">
			<a href="<?= base_url('applicant/form/') ?>">
				<button class="btn btn-primary">Add Applicant</button>
			</a>
			
		</div>

		<div class="box-body">
			<table id="example2" class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>Picture</th>
						<th>Name</th>
						<th>Birthdate</th>
						<th>Age</th>
						<th>Gender</th>
						<th>Height</th>
						<th>Weight</th>
						<th>Religion</th>
						<th>Job Title</th>
						<!-- <th>Length of Exp.</th>
						<th>Skills</th> -->
					</tr>
				</thead>

				<tbody>
					<?php foreach ($entities as $row): ?>
						<tr>
							<td><img src="<?= base_url('resources/images/' . $row->thumbnail) ?>" class="img img-responsive img-thumbnail"></td>
							<td><?php echo $row->fullname ?></td>
							<td><?php echo date('m/d/Y', strtotime($row->birthdate)) ?></td>
							<td><?php echo date('m') > date('m', strtotime($row->birthdate)) ? date('Y') - date('Y', strtotime($row->birthdate)) : date('Y') - date('Y', strtotime($row->birthdate)) - 1 ?></td>
							<td><?php echo $row->gender ?></td>
							<td><?php echo $row->height ?></td>
							<td><?php echo $row->weight ?></td>
							<td><?php echo $row->religion ?></td>
							<td><?php echo $row->position_applied ?></td>
							<!-- <td>2</td>
							<td>Eating</td> -->
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>

		<!-- /.box-body -->
		<!-- <div class="box-footer">
			Footer
		</div> -->
		<!-- /.box-footer-->
	</div>
	<!-- /.box -->
</section>
<!-- /.content -->
<script>
  $(function () {
    $('#example2').DataTable({});
  })
</script>