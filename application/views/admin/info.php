
  <div class="content-wrapper">
  	<section class="content-header">
		<h1>Kelola Info</h1>
  		<ol class="breadcrumb">
  			<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
  			<li>Pengaturan</li>
  			<li class="active">Info</li>
  		</ol>
  	</section>

  	<!-- Main content -->
  	<section class="content">
  		<div class="row">
  			<section class="col-md-12">
  				<div class="box box-info">
  					<div class="box-body">
					  	<?= $this->session->flashdata('message'); ?>
  						<form action="" method="POST">
                            <div class="form-group">
                                <label for="info">Info Saat Ini</label>
                                <textarea name="info" id="info" cols="30" rows="10" class="textarea form-control" required><?= $info ?></textarea>
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