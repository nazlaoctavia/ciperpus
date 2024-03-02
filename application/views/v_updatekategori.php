<!-- Edit Data Kategori -->

<div class="container mt-5">
  <center><h3>Edit Data Kategori</h3></center>
  <hr>
  <a href="<?=site_url('admin/kategori')?>" class="btn btn-primary btn-sm float-left">← kembali</a>
  <div class="clearfix"></div>
  <form action="<?=site_url('admin/do_update_kategori')?>" method="POST" class="mt-3" enctype="multipart/form-data" autocomplete="off">
  <input type="text" value="<?=$rec['id_kategori']?>" name="id_buku" id="id_buku" hidden>
  <div class="form-group">
  <label for="jenis">Nama Kategori</label>
      <input type="text" value="<?=$rec['nama_kategori']?>" id="nama__kategori" name="nama_kategori" placeholder="" class="form-control" autofocus required>
    </div>
 
      <div class="col-md-2">
 <button type="submit" name="simpan" class="btn btn-primary btn-sm" style="margin-top:32px; width:100%;"><b>Simpan</b></button>
      </div>
    </div>
  </form>
</div>