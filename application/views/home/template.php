<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="https://p3tgai-bwsnt1-opivbidom2021.id/assets/img/favicon.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://p3tgai-bwsnt1-opivbidom2021.id/assets/css/style.css">
    <title>Kementerian Pekerjaan Umum dan Perumahan Rakyat</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="https://p3tgai-bwsnt1-opivbidom2021.id/">
                    <img src="https://p3tgai-bwsnt1-opivbidom2021.id/assets/img/logo.png" alt="Logo" height="30px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item <?= $this->uri->segment(2) == ""? "active":'' ?>">
                            <a class="nav-link" href="<?= base_url('/home') ?>">Home</a>
                        </li>
                        <li class="nav-item <?= $this->uri->segment(2) == "daftar"? "active":'' ?>">
                            <a class="nav-link" href="<?= base_url('/home/daftar') ?>">Daftar</a>
                        </li>
                        <li class="nav-item <?= $this->uri->segment(2) == "pengumuman"? "active":'' ?>">
                            <a class="nav-link" href="<?= base_url('/home/pengumuman') ?>">Pengumuman</a>
                        </li>
                        <li class="nav-item <?= $this->uri->segment(2) == "info"? "active":'' ?>">
                            <a class="nav-link" href="<?= base_url('/home/info') ?>">Info</a>
                        </li>
                        <li class="nav-item <?= $this->uri->segment(2) == "download"? "active":'' ?>">
                            <a class="nav-link" href="<?= base_url('/home/download') ?>">Download</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container" style="margin-bottom: 100px;">
        <?= $contents; ?>
    </div>
    <footer class="footer">
        <div class="container py-3">
            <span class="text-muted">Copyrights © 2021 Kementerian Pekerjaan Umum dan Perumahan Rakyat</span>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>