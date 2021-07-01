
  <div class="content-wrapper">
  	<section class="content-header">
		<h1>Data Pendaftar</h1>
  		<ol class="breadcrumb">
  			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  			<li><a  href="<?= base_url('admin'); ?>">Dashboard</a></li>
  			<li class="active">Pendaftar</li>
  		</ol>
  	</section>

  	<!-- Main content -->
  	<section class="content">
  		<div class="row">
  			<section class="col-md-12">
  				<div class="box box-info">
  					<div class="box-header">
  						<!-- tools box -->
  						<div class="pull-right box-tools">
                          <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
  						</div>
  						<!-- /. tools -->
  					</div>
  					<div class="box-body">
					  	<?= $this->session->flashdata('message'); ?>
  						<table id="dataTable"  class="table display responsive nowrap" style="width:100%">
							<thead class="bg-primary">
								<tr>
									<th>No</th>
									<th>Nama Lengkap</th>
									<th>Tgl Lahir</th>
									<th>Jenis Kelamin</th>
									<th>No Hp</th>
									<th>Email</th>
									<th>Alamat</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($pendaftar as $key => $row): ?>
								<tr>
									<td><?= $key+1 ?></td>
									<td><?= $row['nama_lengkap']; ?></td>
									<td><?= $row['tgl_lahir']; ?></td>
									<td><?= $row['jk']=='L'?'Laki-laki':'Perempuan'; ?></td>
									<td><?= $row['no_hp']; ?></td>
									<td><?= $row['email']; ?></td>
									<td><?= $row['alamat']; ?></td>
									<td>
										<a href="<?= base_url('assets/file/'.$row['berkas']); ?>" class="btn btn-sm btn-success" target="_blank">Download Berkas</a>
										<a onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" href="<?= base_url('pendaftar/delete/'.$row['id']); ?>" class="btn btn-sm btn-danger">Hapus</a>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
  					</div>
  				</div>
  			</section>
  		</div>
  		<!-- /.row (main row) -->

  	</section>
  	<!-- /.content -->
  </div>
  <!-- /.content-wrapper -->