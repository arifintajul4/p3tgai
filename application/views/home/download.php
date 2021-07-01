<section class="container mt-4">
    <h2 class="text-center">File Pendukung</h2>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered" style="width: 100%;">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(empty($download)): ?>
                        <tr>
                            <td colspan="3" class="text-center">File tidak tersedia</td>
                        </tr>
                    <?php endif; ?>
                    <?php foreach($download as $key => $row): ?>
                    <tr>
                        <td><?= $key+1; ?></td>
                        <td><?= $row['judul']; ?></td>
                        <td class="text-center"><a class="btn btn-success btn-sm" href="<?= base_url('assets/file/'.$row['file']); ?>" target="_blank">Download File</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>