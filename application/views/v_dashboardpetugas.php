<!-- Dashboard Home Admin --> 


<!-- Page Heading -->
<div> <centerh1 class="collapse-header"></h1></center</div>
<div class="container-fluid">
<div class="pagetitle">
  <h3>Dashboard</h3>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="admin">Home</a></li>
      <li class="breadcrumb-item active">Dashboard Petugas</li>
    </ol>
  </nav>
</div>
<!-- Alert Berhasil Login Anggita -->
<section class="content">
    <div class="alert alert-warning alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <strong>Selamat Datang
            <br>Anda Berhasil Login Sebagai Petugas</strong>
        </div>
<!-- Page Heading -->

<div class="container mt-7"  >
<div class="row text-center">
    <div class="col-md-3" >
            <div class="card" style="width: 15rem;" >
                <div class="card-body" style="background-color: #263F67;">
                    <h5 class="card-tittle" style="color: white;">Data Akun</h5>
                    <p class="card-text" style="color: white;">Jumlah Akun Keseluruhan</p>
                    <h4 style="color: white;"><?php echo $hitungakun?></h4>
            </div>          
        </div>  
    </div>  
            <div class="col-md-3">
            <div class="card" style="width: 15rem;">
                <div class="card-body" style="background-color: #5D7BAD;">
                    <h5 class="card-tittle" style="color: white;">Data Buku</h5>
                    <p class="card-text" style="color: white;">Jumlah Buku Saat ini</p>
                    <h4 style="color: white;"><?php echo $hitungbuku?></h4>
            </div>          
            </div>  
            </div>  
            <div class="col-md-3" >
            <div class="card" style="width: 15rem;" >
                <div class="card-body" style="background-color: #7A8BA8;">
                    <h5 class="card-tittle" style="color: white;">Data Peminjaman</h5>
                    <p class="card-text" style="color: white;">Jumlah Buku Saat Ini</p>
                    <h4 style="color: white;"><?php echo $hitungpeminjaman?></h4>
            </div>          
        </div>  
    </div>  
    <div class="col-md-3" >
            <div class="card" style="width: 15rem;" >
                <div class="card-body" style="background-color: #ADBAD2;">
                    <h5 class="card-tittle" style="color: white;">Data Pengembalian</h5>
                    <p class="card-text" style="color: white;">Jumlah Buku Saat Ini</p>
                    <h4 style="color: white;"><?php echo $hitungpengembalian?></h4>
            </div>          
        </div>  
    </div>  
       
    
            </div>          
            </div>  
            </div>  
            </div>  
            </div>  