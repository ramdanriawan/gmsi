<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uxliner.com/bizadmin/demo/main/index-agency.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Jan 2019 07:46:51 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo e(env('APP_NAME')); ?></title>
    <!-- Tell the browser to be responsive to screen width -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Biz Admin is a Multipurpose bootstrap 4 Based Dashboard & Admin Site Responsive Template by uxliner."/>
    <meta name="keywords"
          content="admin, admin dashboard, admin template, cms, crm, Biz Admin, Biz Adminadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application"/>
    <meta name="author" content="uxliner"/>
    <!-- v4.1.3 -->
    <link rel="stylesheet" href="<?php echo e(url('')); ?>/dist/bootstrap/css/bootstrap.min.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(url('')); ?>/dist/img/favicon-16x16.png">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700" rel="stylesheet">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(url('')); ?>/dist/css/style.css">
    <link rel="stylesheet" href="<?php echo e(url('')); ?>/dist/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo e(url('')); ?>/dist/css/et-line-font/et-line-font.css">
    <link rel="stylesheet" href="<?php echo e(url('')); ?>/dist/css/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="<?php echo e(url('')); ?>/dist/css/simple-lineicon/simple-line-icons.css">
    <link rel="stylesheet" href="<?php echo e(url('')); ?>/dist/css/skins/_all-skins.min.css">

    <!-- Chartist CSS -->
    <link rel="stylesheet" href="<?php echo e(url('')); ?>/dist/plugins/chartist-js/chartist.min.css">
    <link rel="stylesheet" href="<?php echo e(url('')); ?>/dist/plugins/chartist-js/chartist-plugin-tooltip.css">


    
    
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
    <link href="<?php echo e(url("vendor/datatables/dataTables.bootstrap4.css")); ?>" rel="stylesheet">


    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_green.css">


    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">

    
    <link href="<?php echo e(url("css/style.css")); ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <style>
        .dropdown-menu > li a {
            color: #777;
            padding: 6px 20px;
            display: block;
            font-size: 14px;
        }

        .dropdown-menu > li a:hover {
            background-color: #e1e3e9;
            color: #333;
        }
    </style>

</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a href="index.html" class="logo blue-bg">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><img src="<?php echo e(url("")); ?>/dist/img/logo-small.png" alt=""></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><img src="<?php echo e(url("")); ?>/dist/img/logo.png" alt=""></span> </a>
        <!-- Header Navbar -->
        <nav class="navbar blue-bg navbar-static-top">
            <!-- Sidebar toggle button-->
            <ul class="nav navbar-nav pull-left">
                <li><a class="sidebar-toggle" data-toggle="push-menu" href="#"></a></li>
            </ul>

            <H3 style="margin-bottom: 0px; display: inline-block; color: white; margin-top: 15px;"><?php echo e(env('APP_NAME')); ?>

                - <?php echo e(env('APP_OBJECT_NAME')); ?></H3>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Notifications  -->
                    <li class="dropdown messages-menu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i
                                class="fa fa-bell-o"></i>

                            <?php if($notifications->count()): ?>
                                <div class="notify"><span class="heartbit"></span> <span class="point"></span></div>
                            <?php endif; ?>
                        </a>
                        <?php if($notifications->count()): ?>
                            <ul class="dropdown-menu">
                                <li class="header">Notifications</li>
                                <li>
                                    <ul class="menu">

                                        <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><a href="#">
                                                    <div class="pull-left icon-circle red"><i
                                                            class="icon-lightbulb"></i>
                                                    </div>
                                                    <h4><?php echo e($item->anggota->nama); ?></h4>
                                                    <p><?php echo e($item->tanggal); ?></p>
                                                    <p><span class="time"><?php echo e($item->anggota->no_telepon); ?></span></p>
                                                </a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                                
                            </ul>
                        <?php endif; ?>
                    </li>
                    <!-- User Account  -->
                    <li class="dropdown user user-menu p-ph-res"><a href="#" class="dropdown-toggle"
                                                                    data-toggle="dropdown"> <img
                                src="<?php echo e(url('avatar/png/014-boy.png')); ?>"
                                class="user-image"
                                alt="User Image"> <span
                                class="hidden-xs"><?php echo e(auth()->user()->name); ?></span> </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <div class="pull-left user-img"><img src="<?php echo e(url('avatar/png/014-boy.png')); ?>"
                                                                     class="img-responsive img-circle" alt="User"></div>
                                <p class="text-left"><?php echo e(auth()->user()->name); ?>

                                    <small> <?php echo e(auth()->user()->email); ?></small></p>
                            </li>

                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo e(url(route('user.profile', auth()->id()))); ?>"><i class="icon-gears"></i>
                                    Pengaturan</a></li>
                            <li role="separator" class="divider"></li>
                            <li>

                                <form method="POST" action="<?php echo e(route('logout')); ?>" style="all: initial;">
                                    <?php echo csrf_field(); ?>
                                    <a href="#"
                                       onclick="event.preventDefault(); if(confirm('Yakin akan logut?')) this.closest('form').submit(); ">
                                        <i class="fa fa-power-off"></i> Logout
                                    </a>
                                </form>

                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li><a href="#" data-toggle="control-sidebar"><i class="fa fa-gear animated "></i></a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="image text-center"><img src=" <?php echo e(url('avatar/png/014-boy.png')); ?>" class="img-circle"
                                                    alt="User Image"></div>
            </div>

            <!-- sidebar menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class=""><a href="<?php echo e(url('home')); ?>"> <i class="fa fa-dashboard"></i> <span>Dashboard</span> <span
                            class="pull-right-container"> </span> </a></li>
                <li class="active treeview"><a href="#"> <i class="icon-menu"></i> <span>Menu</span> <span
                            class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                    <ul class="treeview-menu">

                        <?php if(in_array(auth()->user()->level, ['Admin', ''])): ?>
                            <li class="sidebar-item">
                                <a href="<?php echo e(route('user.index')); ?>"
                                   aria-expanded="false" class="sidebar-link waves-effect waves-dark sidebar-link">
                                    <i class="fa fa-angle-right"></i>
                                    <span class="hide-menu">User</span>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if(in_array(auth()->user()->level, ['Admin', 'Petugas'])): ?>
                            <li class="sidebar-item">
                                <a href="<?php echo e(route('anggota.index')); ?>"
                                   aria-expanded="false" class="sidebar-link waves-effect waves-dark sidebar-link">
                                    <i class="fa fa-angle-right"></i>
                                    <span class="hide-menu">Anggota</span>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if(in_array(auth()->user()->level, ['Admin', 'Petugas', 'Siswa', 'Guru'])): ?>
                            <li class="sidebar-item">
                                <a href="<?php echo e(route('buku.index')); ?>"
                                   aria-expanded="false" class="sidebar-link waves-effect waves-dark sidebar-link">
                                    <i class="fa fa-angle-right"></i>
                                    <span class="hide-menu">Buku</span>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if(in_array(auth()->user()->level, ['Admin', 'Petugas', 'Siswa', 'Guru'])): ?>
                            <li class="sidebar-item">
                                <a href="<?php echo e(route('peminjaman.index')); ?>"
                                   aria-expanded="false" class="sidebar-link waves-effect waves-dark sidebar-link">
                                    <i class="fa fa-angle-right"></i>
                                    <span class="hide-menu">Peminjaman</span>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if(in_array(auth()->user()->level, ['Admin', 'Petugas', 'Siswa', 'Guru'])): ?>
                            <li class="sidebar-item">
                                <a href="<?php echo e(route('pengembalian.index')); ?>"
                                   aria-expanded="false" class="sidebar-link waves-effect waves-dark sidebar-link">

                                    <i class="fa fa-angle-right"></i>
                                    <span class="hide-menu">Pengembalian</span>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if(in_array(auth()->user()->level, ['Admin', 'Petugas', 'Siswa', 'Guru'])): ?>
                            <li class="sidebar-item">
                                <a href="<?php echo e(route('kode-buku.index')); ?>"
                                   aria-expanded="false" class="sidebar-link waves-effect waves-dark sidebar-link">
                                    <i class="fa fa-angle-right"></i>
                                    <span class="hide-menu">Kode Buku</span>
                                </a>
                            </li>
                        <?php endif; ?>

                    </ul>
                </li>

                <?php if(in_array(auth()->user()->level, ['Admin', 'Petugas'])): ?>
                    <li class="active treeview"><a href="#"> <i class="fa fa-print"></i> <span>Laporan</span> <span
                                class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li class="sidebar-item <?php if(Route::current()->action['as'] == 'anggota.laporan.index'): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('anggota.laporan.index')); ?>" class="sidebar-link"><i
                                        class="fa fa-angle-right"></i>

                                    <span class="hide-menu"> Anggota </span>
                                </a>
                            </li>

                            <li class="sidebar-item <?php if(Route::current()->action['as'] == 'buku.laporan.index'): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('buku.laporan.index')); ?>" class="sidebar-link"><i
                                        class="fa fa-angle-right"></i>

                                    <span class="hide-menu"> Buku </span>
                                </a>
                            </li>

                            <li class="sidebar-item <?php if(Route::current()->action['as'] == 'peminjaman.laporan.index'): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('peminjaman.laporan.index')); ?>" class="sidebar-link"><i
                                        class="fa fa-angle-right"></i>

                                    <span class="hide-menu"> Peminjaman </span>
                                </a>
                            </li>

                            <li class="sidebar-item <?php if(Route::current()->action['as'] == 'pengembalian.laporan.index'): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('pengembalian.laporan.index')); ?>" class="sidebar-link"><i
                                        class="fa fa-angle-right"></i>

                                    <span class="hide-menu"> Pengembalian </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->


    <?php echo $__env->yieldContent('content'); ?>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">Version 1.0</div>
        Copyright © <?php echo e(date('Y')); ?> <?php echo e(env("APP_NAME")); ?>. All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab"></div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo e(url("")); ?>/dist/js/jquery.min.js"></script>
<script src="<?php echo e(url("")); ?>/dist/bootstrap/js/bootstrap.min.js"></script>

<!-- template -->
<script src="<?php echo e(url("")); ?>/dist/js/bizadmin.js"></script>

<!-- Jquery Sparklines -->
<script src="<?php echo e(url("")); ?>/dist/plugins/jquery-sparklines/jquery.sparkline.min.js"></script>
<script src="<?php echo e(url("")); ?>/dist/plugins/jquery-sparklines/sparkline-int.js"></script>

<!-- Chartjs JavaScript -->
<script src="<?php echo e(url("")); ?>/dist/plugins/chartjs/chart.min.js"></script>

<!-- for demo purposes -->
<script src="<?php echo e(url("")); ?>/dist/js/demo.js"></script>
<!--Start of Tawk.to Script-->



<script src="<?php echo e(url("vendor/datatables/jquery.dataTables.js")); ?>"></script>
<script src="<?php echo e(url("vendor/datatables/dataTables.bootstrap4.js")); ?>"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.flash.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://npmcdn.com/flatpickr/dist/l10n/id.js"></script>


<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="<?php echo e(url('autocomplete')); ?>/js/autoComplete.min.js"></script>


<script>
    $(document).ready(function () {
        // untuk mengecek apakah disebuah array ada nilainya atau tidak
        function inArray(needle, haystack) {
            var length = haystack.length;
            for (var i = 0; i < length; i++) {
                if (typeof haystack[i] == 'object') {
                    if (arrayCompare(haystack[i], needle)) return true;
                } else {
                    if (haystack[i] == needle) return true;
                }
            }
            return false;
        }

        // flatpickr
        $(".flatpickr").flatpickr({
            enableTime: false,
            dateFormat: "d-M-Y",
            locale: 'id'
        });

        // fungsi untuk mendapatkan semua id tabel yg dipilih untuk hapus semua
        function getIdOfRows(selector) {
            var ids = [];
            for (data of selector) {
                ids.push(data.dataset.id);
            }

            return ids;
        }

        // dibaris ini kita mengatur datatable untuk semua halaman
        // ketika data dihalaman tersebut ditampilkan maka datatabel akan mengatur desain tablenya
        // dari mulai filter, tombol hapus semua, aktifkan, dll..
        // pengaturan ini tidak sama untuk beberapa halaman
        // sehingga kita perlu melakukan if conditional lagi
        // if dibuat karena autocomplete gak bekerja kalo ada datatable
        <?php if(!in_array(Route::current()-> action['as'], ['pembayaran_santri_detail.create',
            'pembayaran_santri_detail.edit', 'pembayaran_infaq_detail.create',
            'pembayaran_infaq_detail.edit'
        ])): ?>

        $('#dataTable').DataTable({
            paging: true,
            pageLength: 25,
            dom: 'Blfrtip',
            "columnDefs": [{
                "orderable": false,
                "targets": columnOrders
            }],
            buttons: tampilkan_buttons === false ? (button_manual === false ? [] : button_manual) :
                [{
                    extend: 'selectAll',
                    text: 'Pilih Semua',
                    className: "btn btn-primary buttons-select-all btn-sm"
                },
                    {
                        extend: "selectNone",
                        text: 'Batal Pilih',
                        className: "btn btn-primary buttons-select-none  btn-sm"
                    },

                        <?php if(in_array(Route::current()->action['as'], ['pembayaran_santri_detail.index']) && auth()->user()->level == 'superadmin'): ?>
                    {
                        text: 'Hapus',
                        className: "btn btn-primary btn-sm",
                        action: function (e, dt, node, config) {
                            var ids = JSON.stringify(getIdOfRows($('tr.selected')));
                            if (confirm("Yakin akan menghapus semua data yang dipilih?")) {
                                location.href = `${locationHrefHapusSemua}?ids=${ids}`;
                            }
                        }
                    },
                        <?php elseif(!in_array(Route::current()->action['as'], ['pembayaran_santri_detail.index', 'pembayaran_santri.index'])): ?>
                    {
                        text: 'Hapus',
                        className: "btn btn-primary btn-sm",
                        action: function (e, dt, node, config) {
                            var ids = JSON.stringify(getIdOfRows($('tr.selected')));
                            if (confirm("Yakin akan menghapus semua data yang dipilih?")) {
                                location.href = `${locationHrefHapusSemua}?ids=${ids}`;
                            }
                        }
                    },
                        <?php endif; ?>

                        <?php if(in_array(Route::current()->action['as'], ['kode-buku.index'])): ?>
                    {
                        text: 'Tambah',
                        className: "btn btn-primary btn-sm",
                        action: function (e, dt, node, config) {
                            location.href = locationHrefCreate
                        }
                    },
                        <?php endif; ?>

                        <?php if(in_array(Route::current()->action['as'], ['user.index', 'anggota.index', 'buku.index', 'peminjaman.index', 'peminjaman.show'])): ?>
                    {
                        text: 'Tambah',
                        className: "btn btn-primary btn-sm",
                        action: function (e, dt, node, config) {
                            location.href = locationHrefCreate
                        }
                    },
                    <?php endif; ?>

                    // khusus halaman user (untuk export)
                    // <?php if(in_array(Route::current()->action['as'], ['user.index', 'pembayaran_santri.index', 'pembayaran_infaq.index', 'transaksi_lainnya.index'])): ?>
                    // {
                    //     text: "Export",
                    //     className: "btn btn-primary btn-sm",
                    //     action: function (e, dt, node, config) {
                    //         location.href = locationHrefExport
                    //     }

                    // },
                    // <?php endif; ?>

                    // khusus halaman user (untuk ubah kelas)
                    <?php if(in_array(Route::current()->action['as'], ['user.index'])): ?>
                    // {
                    //     text: "Ubah Kelas",
                    //     className: "btn btn-primary btn-sm",
                    //     action: function (e, dt, node, config) {
                    //         var kelas = prompt('Ubah ke kelas berapa? (<?php echo e($kelass ?? ''); ?>)', 0);

                    //         if(kelas) {
                    //             if(confirm('Yakin akan mengubah kelas data yg dipilih?')) {
                    //                 var ids = JSON.stringify(getIdOfRows($('tr.selected')));

                    //                 location.href = `${locationHrefUbahKelas}?ids=${ids}&kelas=${kelas}`;
                    //             }
                    //         }
                    //     }

                    // },
                    <?php endif; ?>
                ],
            select: true,
        });
        <?php endif; ?>

        // khusus halaman yang ada autocompletenya
        <?php if(in_array(Route::current()-> action['as'], ['pembayaran_santri_detail.create',
            'pembayaran_santri_detail.edit', 'pembayaran_infaq_detail.create',
            'pembayaran_infaq_detail.edit'
        ])): ?>

        $('#tags').on('keyup', function () {
            $.ajax({
                url: '<?php echo e(route("pembayaran_santri_detail.get_users")); ?>',
                data: {
                    term: $("#tags").val()
                },
                success: function (response) {

                    var users = [];
                    $.each(response, function (index, el) {
                        users.push(
                            `${el.nama} | Kelas: ${el.kelas.nama} | Id: ${el.id}`
                        );
                    });

                    $("#tags").autocomplete({
                        source: users
                    });
                }
            });
        });

        $("#submit, #cetak_kwitansi").click(function () {
            var id = $("#tags").val().split(" | ")[2].split(" ")[1];

            $('#user_id').val(id);
        });
        <?php endif; ?>
    });

</script>


<script src="<?php echo e(url('js/script.js')); ?>"></script>

<?php echo $__env->yieldContent('dashboard-script'); ?>

</body>
</html>

<?php /**PATH D:\bikinaplikasi\project\40. ebi\perpustakaan\resources\views/layouts/app2.blade.php ENDPATH**/ ?>