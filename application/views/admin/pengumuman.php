
  <div class="content-wrapper">
  	<section class="content-header">
		<h1>Kelola Pengumuman</h1>
  		<ol class="breadcrumb">
  			<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
  			<li>Pengaturan</li>
  			<li class="active">Pengumuman</li>
  		</ol>
  	</section>

  	<!-- Main content -->
  	<section class="content">
  		<div class="row">
  			<section class="col-md-12">
  				<div class="box box-info">
  					<div class="box-body">
					  	<?= $this->session->flashdata('message'); ?>
  						<form action="" method="POST" enctype="multipart/form-data">
                            <div class="col-md-4">
                                <img width="100%" src="<?= base_url('assets/img/'.$pengumuman['sampul']); ?>" alt="Sampul Pengumuman" class="img-fluid">
                                <small>*sampul saat ini</small>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="sampul">Sampul</label>
                                    <input type="file" name="sampul" id="sampul" class="form-control" accept="image/png, image/gif, image/jpeg">
                                </div>
                                <div class="form-group">
                                    <label for="file">File Download</label>
                                    <input type="file" name="file" id="file" class="form-control" accept="application/pdf">
                                </div>
                                <button type="submit" class="btn btn-warning" style="margin-top: 5px;">Ubah</button>
                            </div>
                        </form>
  					</div>
  				</div>
  			</section>
  		</div>
  		<!-- /.row (main row) -->

  	</section>
  	<!-- /.content -->
  </div>
  <!-- /.content-wrapper -->