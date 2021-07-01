  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<!-- Content Header (Page header) -->
  	<section class="content-header">
  		<h1>
  			Dashboard
  			<small>Control panel</small>
  		</h1>
  		<ol class="breadcrumb">
  			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  			<li class="active">Dashboard</li>
  		</ol>
  	</section>

  	<!-- Main content -->
  	<section class="content">
  		<!-- Small boxes (Stat box) -->
  		<div class="row">
  			<div class="col-lg-6 col-xs-12">
  				<!-- small box -->
  				<div class="small-box bg-aqua">
  					<div class="inner">
  						<h3><?= $jml_daftar; ?></h3>

  						<p>Jumlah Pendaftar</p>
  					</div>
  					<div class="icon">
  						<i class="ion ion-android-people"></i>
  					</div>
  					<a href="<?= base_url('pendaftar'); ?>" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
  				</div>
  			</div>
  			<!-- ./col -->
			<div class="col-lg-6 col-xs-12">
				<div class="small-box bg-green">
				<div class="inner">
					<h3><?= $jml_admin ?></h3>
					<p>Jumlah Admin</p>
				</div>
				<div class="icon">
					<i class="ion ion-android-people"></i>
				</div>
				<a href="#" class="small-box-footer">Selengkapny <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
  			
  		</div>
  		<!-- /.row -->
  		<!-- Main row -->
  		<div class="row">
  			<section class="col-md-12">
  				<div class="box box-info">
  					<div class="box-header">
  						<i class="fa fa-envelope"></i>
  						<h3 class="box-title">Status Pendaftaran</h3>
  						<div class="pull-right box-tools">
                          <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
  						</div>
  					</div>
  					<div class="box-body">
					  	<?= $this->session->flashdata('message'); ?>
  						<form action="admin/update" method="POST">
  							<label for="status">Status</label>
							<select name="status" id="status" class="form-control">
								<option value="1" <?= $status == '1' ? 'selected':''; ?> >AKTIF</option>
								<option value="0" <?= $status == '0' ? 'selected':''; ?> >TIDAK AKTIF</option>
							</select>
							<button type="submit" class="btn btn-primary" style="margin-top: 5px;">UBAH STATUS</button>
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