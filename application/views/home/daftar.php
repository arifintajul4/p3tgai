<section class="container">
    <h1 class="text-center mt-4">Pendaftaran</h1>
    <?= $this->session->flashdata('message'); ?>
    <?php if($status == '1'): ?>
    <form action="<?= base_url('pendaftar/daftar'); ?>" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="no_hp">Nomor HP</label>
                    <input type="number" name="no_hp" id="no_hp" class="form-control" required>
                    <small>*contoh: 085866XXXX</small>
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select name="jk" id="jk" class="form-control" required>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" rows="2" required></textarea>
                </div>
                <div class="form-group">
                    <label for="berkas">Berkas</label>
                    <input type="file" name="berkas" id="berkas" class="form-control" accept=".zip,.rar,.7zip" required>
                    <small>*file wajib format .zip atau .rar dan ukuran maksimal 10mb</small>
                </div>
                <button type="submit" class="btn btn-primary float-right">DAFTAR</button>
                <button type="reset" class="btn btn-outline-primary float-right mr-2">RESET</button>
            </div>
        </div>
    </form>
    <?php else: ?>
        <div class="alert alert-warning" role="alert">
            <strong>Mohon Maaf, </strong>pendaftaran sedang ditutup untuk saat ini
        </div>
    <?php endif; ?>
</section>