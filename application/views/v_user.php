<!-- Navbar Sidebar Admin-->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Favicons -->
  <link href="<?=base_url('assets/')?>img/logo00.png" rel="icon">
  <link href="<?=base_url('assets/')?>img/apple-touch-icon.png" rel="apple-touch-icon">

    <title>E-library : Dashboard Anggota</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url('assetss/')?>css/sb-admin-2.min.css" rel="stylesheet">

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
                <a class="nav-link" href="<?=site_url('user')?>">
                    <i class="fas fa-fw fa-tachometer-alt" ></i>
                    <span style="font-family: 'cambria', sans-serif;">Dashboard Anggota</span></a>
            </li>
        

            <!-- Divider -->
           
            <hr class="sidebar-divider my-0">

            <!-- Heading -->
            <div class="sidebar-heading">
                
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
        <!-- Heading -->
            <div class="sidebar-heading">
            </div>
       <br>
      
          <!-- Heading -->
          <div class="sidebar-heading">
                Data Pinjam
            </div>
            
            <li class="nav-item active">
            <li class="nav-item">
                <a class="nav-link" href="<?=site_url('user/vcs_peminjaman')?>">
                    <i class=""></i>
                    <span style="color: white;font-family: 'cambria', sans-serif;">Buat Peminjaman</span>
                </a>
            </li>
            <li class="nav-item active">
            <li class="nav-item">
                <a class="nav-link" href="<?=site_url('user/vcs_ulasan')?>">
                    <i class=""></i>
                    <span style="color: white;font-family: 'cambria', sans-serif;">Buat Ulasan</span>
                </a>
            </li>
            <li class="nav-item active">
            <li class="nav-item">
                <a class="nav-link" href="<?=site_url('user/bukupeminjaman')?>">
                    <i class=""></i>
                    <span style="color: white;font-family: 'cambria', sans-serif;">Histori Peminjaman</span>
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
            <!-- Sidebar Message -->
            <div class="">
              
               
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        
        <div id="content-wrapper" class="d-flex flex-column">
            
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
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

                       
                        
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <h7 style="color: black;
                                          background-color: #FFFFFF;"><?=$username?></h7>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="">
                              
                            </div>
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
    <script>
    $(document).on("click", ".btn-danger", function () {
      var id = $(this).data('id');

      $('#idk').attr('value', id)

    
        /*
        proceed with rest of modal using the id variable as necessary 
        */
    });
    </script>
    
    <!-- Page level custom scripts -->
    <script src="<?=base_url('assetss/')?>js/demo/chart-area-demo.js"></script>
    <script src="<?=base_url('assetss/')?>js/demo/chart-pie-demo.js"></script>


</body>

</html>