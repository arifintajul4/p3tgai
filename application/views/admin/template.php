<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/ionicons.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/AdminLTE.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/skin-blue.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/dataTables.bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.dataTables.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap3-wysihtml5.min.css') ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style>
    .example-modal .modal {
        position: relative;
        top: auto;
        bottom: auto;
        right: auto;
        left: auto;
        display: block;
        z-index: 1;
    }

    .example-modal .modal {
        background: transparent !important;
    }
    </style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <a href="<?= base_url('admin'); ?>" class="logo">
                <span class="logo-mini"><b>Admin</b></span>
                <span class="logo-lg"><b>Admin</b>Panel</span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= base_url('assets/img/user2-160x160.jpg') ?>" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?= $this->session->userdata('username'); ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?= base_url('assets/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image">
                                    <p>
                                        <?= $this->session->userdata('username'); ?>
                                        <small>Super Admin</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?= base_url('auth/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?= base_url('assets/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?= $this->session->userdata('username'); ?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="<?= $this->uri->segment(1) == "admin"? "active":'' ?>">
                        <a href="<?= base_url('admin'); ?>">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="<?= $this->uri->segment(1) == "pendaftar"? "active":'' ?>">
                        <a href="<?= base_url('pendaftar'); ?>">
                            <i class="fa fa-users"></i> <span>Pendaftar</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-gears"></i>
                            <span>Pengaturan</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?= base_url('admin/info'); ?>"><i class="fa fa-circle-o"></i> Info</a></li>
                            <li><a href="<?= base_url('admin/pengumuman'); ?>"><i class="fa fa-circle-o"></i> Pengumuman</a></li>
                            <li><a href="<?= base_url('download'); ?>"><i class="fa fa-circle-o"></i> Download</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= base_url('auth/logout'); ?>">
                            <i class="fa fa-sign-out"></i> <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <?= $contents ?>


        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0.0
            </div>
            <strong>Copyright &copy; 2021 <a href="">Tajul Arifin S</a>.</strong> All rights
            reserved.
        </footer>

    </div>
    <!-- ./wrapper -->

    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/adminlte.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/dataTables.bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/dataTables.responsive.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap3-wysihtml5.all.min.js'); ?>"></script>
    <script>
        $(function () {
            setTimeout(() => {
                $('.alert').fadeOut();
            }, 3000);

            $('#dataTable').DataTable({
                "columnDefs": [{
                "orderable": false,
                "targets": [-1]
                }],
                responsive: true
            });

            $('.textarea').wysihtml5()
        })
    </script>
</body>

</html>