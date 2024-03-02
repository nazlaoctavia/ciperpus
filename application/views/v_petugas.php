<!-- Navbar Sidebar Admin-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Favicons -->
  <link href="<?=base_url('assets/')?>img/logo00.png" rel="icon">
  <title>E-library : Dashboard Petugas</title>

    <!-- Custom fonts for this template-->
    
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <!-- Custom styles for this template-->
    <link href="<?=base_url('assetss/')?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.4/af-2.5.3/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/r-2.4.1/rg-1.3.1/rr-1.3.3/sc-2.1.1/sp-2.1.2/datatables.min.css" rel="stylesheet"/>
    
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.4/af-2.5.3/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/r-2.4.1/rg-1.3.1/rr-1.3.3/sc-2.1.1/sp-2.1.2/datatables.min.js"></script>

    <style>
        .bg-gradient-primary {
        background-color: #263F67;
        background-image: linear-gradient(180deg, #263F67 10%, #263F67 100%);
        background-size: cover;
        }
        .bg-white{
            background-color: #FFFFFF;
            background-image: linear-gradient(180deg, #FFFFFF 10%, #FFFFFF 100%);
        }

    </style>




</head>


<body>

    <!-- Page Wrapper -->
    <div id="wrapper" >

        <!-- Sidebar -->
        <ul  class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" style=""  id="accordionSidebar" >  
            
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center"style="">
            <tr>
                <div class="sidebar-brand-icon rotate-n-15"style="">
                    <i class="fas fa-laugh-wink"></i>
                </div><img src="<?=base_url('assetss/')?>img/002.svg" width="150px" alt="">
            </a>
        <!-- Divider -->
            <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
            <li class="nav-item active"style="">
                <a class="nav-link" href="<?=site_url('petugas')?>">
                    <i class="fas fa-fw fa-tachometer-alt" ></i>
                    <span style="font-family: 'cambria', sans-serif;">Dashboard Petugas</span></a>
            </li>
              <!-- Divider -->
              <hr class="sidebar-divider my-0">
        <!-- Heading -->
            <div class="sidebar-heading">
            </div>
       <br>
      
          <!-- Heading -->
          <div class="sidebar-heading">
                Kelola Data
            </div>
        <!-- Nav Item - Utilities Collapse Menu -->
         <li class="nav-item"style="">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span style="font-family: 'cambria', sans-serif;">Data Master</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?=site_url('petugas/buku')?>">Data Buku</a>
                        <a class="collapse-item" href="<?=site_url('petugas/kategori')?>">Kategori</a>
                        <a class="collapse-item" href="<?=site_url('petugas/ulasan')?>">ulasan</a>
                    </div>
                </div>
            </li>
            <li class="nav-item active">
            <li class="nav-item">
                <a class="nav-link" href="<?=site_url('petugas/laporanpeminjaman')?>">
                    <i class=""></i>
                    <span style="color: white;font-family: 'cambria', sans-serif;">Laporan</span>
                </a>
            </li>
             <!-- Divider -->
             <hr class="sidebar-divider my-0">
             <br>
              <!-- Heading -->
          <div class="sidebar-heading">
                Setting
            </div>
        <!-- Side bar Log Out -->
        <li class="nav-item"style="">
                    <a class="nav-link collapsed" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class=""></i>
                    <span style="color: white;font-family: 'cambria', sans-serif;">Log Out</span>
                </a>
            </li>
           <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown"> 
        <!-- Divider -->
            <hr class="sidebar-divider">
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    
            </li>
        <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span></span></a>
            </li>
        <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
        <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">    
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column" >
        <!-- Main Content -->
            <div id="content" >
        <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" style="background-color: #30393A;">
        <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3" >
            <i class="fa fa-bars" ></i>
            </button>
        <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto" >
        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
             <li class="nav-item dropdown no-arrow d-sm-none" >
                 <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                </a>
        <!-- Dropdown - Messages -->
             <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                        aria-labelledby="searchDropdown" >
             <form class="form-inline mr-auto w-100 navbar-search">
             <div class="input-group" >
             <input type="text" class="form-control bg-light border-0 small"
                         placeholder="Search for..." aria-label="Search"
                         aria-describedby="basic-addon2">
             <div class="input-group-append">
             <button class="btn btn-primary" type="button">
             <i class="fas fa-search fa-sm" ></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            </li>
         <!-- Nav Item - Alerts -->
             <li class="nav-item dropdown no-arrow mx-1">
             <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <i class="fas fa-bell fa-fw"></i>
         <!-- Counter - Alerts -->
             <span class="badge badge-danger badge-counter"></span>
             </a>
         <!-- Dropdown - Alerts -->
             <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                       
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>
                    </li>
                </ul>
            </nav>
         <!-- End of Topbar -->
                
    <?php include($page .'.php')?>  

    <!-- Begin Page Content -->
    <!-- End of Main Content -->
            </div>
    <!-- End of Content Wrapper -->
        </li>
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo site_url('home/logout')?>">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url('assetss/')?>vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url('assetss/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?=base_url('assetss/')?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?=base_url('assetss/')?>js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="<?=base_url('assetss/')?>vendor/chart.js/Chart.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="<?=base_url('assetss/')?>js/demo/chart-area-demo.js"></script>
    <script src="<?=base_url('assetss/')?>js/demo/chart-pie-demo.js"></script>
    <script>
    $(document).ready(function () {
      $('#myTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
          'csv', 'excel', 'pdf', 'print'
        ]
      });
    });
  </script>
 <link href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.4/af-2.5.3/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/r-2.4.1/rg-1.3.1/rr-1.3.3/sc-2.1.1/sp-2.1.2/datatables.min.css" rel="stylesheet"/>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
 <script src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.4/af-2.5.3/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/r-2.4.1/rg-1.3.1/rr-1.3.3/sc-2.1.1/sp-2.1.2/datatables.min.js"></script>
</body>

</html>