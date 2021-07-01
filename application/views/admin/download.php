
  <div class="content-wrapper">
  	<section class="content-header">
		<h1>Data Download</h1>
  		<ol class="breadcrumb">
  			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  			<li><a  href="#">Pengaturan</a></li>
  			<li class="active">Download</li>
  		</ol>
  	</section>

  	<!-- Main content -->
  	<section class="content">
  		<div class="row">
  			<section class="col-md-12">
  				<div class="box box-info">
  					<div class="box-header">
                        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-default"> <i class="fa fa-plus"></i> Tambah Data</button>
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
									<th>Judul</th>
									<th class="text-center">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($download as $key => $row): ?>
								<tr>
									<td><?= $key+1 ?></td>
									<td><?= $row['judul']; ?></td>
									<td class="text-center">
										<a href="<?= base_url('assets/file/'.$row['file']); ?>" class="btn btn-sm btn-success" target="_blank">Download Berkas</a>
										<a onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" href="<?= base_url('download/delete/'.$row['id']); ?>" class="btn btn-sm btn-danger">Hapus</a>
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

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= base_url('download/add'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Data Download</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" id="judul" class="form-control" required>
                    </div>                
                    <div class="form-group">
                        <label for="file">File Download</label>
                        <input type="file" name="file" id="file" class="form-control" required>
                        <small>*file maksimal 10Mb</small>
                    </div>  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->