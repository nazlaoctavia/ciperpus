<!--Dashboard Home Anggota -->


<!-- Page Heading -->
<div> <centerh1 class="collapse-header"></h1></center</div>
<div class="container-fluid">
<div> <centerh1 class="collapse-header"></h1></center</div>
<div class="container-fluid">
<div class="pagetitle">
  <h3>Dashboard</h3>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="user">Home</a></li>
      <li class="breadcrumb-item active">Dashboard Anggota</li>
    </ol>
  </nav>
</div>
<!-- Alert Berhasil Login Anggita -->
<section class="content">
    <div class="alert alert-warning alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <strong>Selamat Datang
            <br>Anda Berhasil Login Sebagai Anggota, Apakah Anda Ingin Meminjam Buku ?</strong>
        </div>
<!-- Table Buku Di Anggota-->   
<div class="row text-center">
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-12">
            <h2 style="text-align: center;margin-bottom: 30px">Data Buku Tersedia  </h2>
            <hr>
            <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
              <tr>
                    <th>No</th>
                    <th>ID Buku</th>
                    <th>Sampul</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                </tr>
              </thead>
              <tbody>
                    <?php 
                        $no=1;
                        foreach ($buku as $b) {?>
                        <tr>
                        <td><?php echo $no++?></td>
                            <td><?php echo $b->buku_id?></td>
                            <td><img src="<?php echo base_url('upload/'.$b->sampul)?>"style="Width: 110px; height: 170px;" alt="" srcset=""></td>
                            <td><?php echo $b->judul_buku?></td>
                            <td><?php echo $b->pengarang?></td>
                            <td><?php echo $b->penerbit?></td>
                            <td><?php echo $b->tahun_terbit?></td>
                            <td><?php echo $b->kategori?></td>
                            <td><?php echo $b->deskripsi?></td>
                        </tr>
                    <?php }?>
              </tbody>
            </table>
        </div>
    </div>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>

</body>
</html>