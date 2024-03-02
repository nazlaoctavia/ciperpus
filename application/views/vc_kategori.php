<!-- Tambah Data Buku-->

<!-- Head Line -->
<div class="container mt-5">
 
  <center><h3>Tambah Data Kategori</h3></center>
  <hr>

  <a href="<?=site_url('admin/kategori')?>" class="btn btn-primary btn-sm float-left">← kembali</a>
  <div class="clearfix"></div>

  <form action="<?=site_url('admin/cr_kategori')?>" method="POST" class="mt-3" enctype="multipart/form-data">
    <div class="form-group">
    <label for="kategori">Nama Kategori</label>
    <div class="form-group">
      <input type="text" value="" id="nama_kategori" name="nama_kategori" placeholder="Masukan Nama Kategori" class="form-control" autofocus required>
    </div>
    
      <div class="col-md-2">
 <button type="submit" name="simpan" class="btn btn-primary btn-sm" style="margin-top:32px; width:100%;"><b>Simpan</b></button>
      </div>
    </div>
  </form>
</div>