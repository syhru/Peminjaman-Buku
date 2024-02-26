<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                <i class="bi bi-book-fill"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Peminjaman Buku</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url(); ?>home/index">
                    <i class="fa fa-database" aria-hidden="true"></i>
                    <span>Peminjaman</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url(); ?>buku/index">
                        <i class="fas fa-fw fa-book"></i>
                        <span>Buku</span></a>
                    </li>

                    <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url(); ?>home/index">
                        <i class="fas fa-fw fa-users"></i>
                        <span>Anggota</span></a>
                    </li>

                    <!-- Divider -->
                    <hr class="sidebar-divider d-none d-md-block">

                    <!-- Sidebar Toggler (Sidebar) -->
                    <div class="text-center d-none d-md-inline">
                        <button class="rounded-circle border-0" id="sidebarToggle"></button>
                    </div>


                </ul>
        <!-- End of Sidebar -->