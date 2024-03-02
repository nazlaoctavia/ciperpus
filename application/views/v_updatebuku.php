<!-- Edit Data Buku -->

<div class="container mt-5">
  <center><h3>Edit Data Buku</h3></center>
  <hr>

  <a href="<?=site_url('admin/buku')?>" class="btn btn-primary btn-sm float-left">← kembali</a>
  <div class="clearfix"></div>
  <form action="<?=site_url('admin/do_update_buku')?>" method="POST" class="mt-3" enctype="multipart/form-data" autocomplete="off">
  <input type="text" value="<?=$rec['id_buku']?>" name="id_buku" id="id_buku" hidden>
  <div class="form-group">
  <label for="jenis">ID Buku</label>
      <input type="text" value="<?=$rec['buku_id']?>" id="buku_id" name="buku_id" placeholder="" class="form-control" autofocus required>
    </div>
    <label for="jenis">Judul Buku</label>
    <div class="form-group">
      <input type="text" value="<?=$rec['judul_buku']?>" id="judul_buku" name="judul_buku" placeholder="Masukan Judul Buku" class="form-control" autofocus required>
    </div>
    <div class="form-group">
    <label for="jenis">Tahun Terbit</label>
      <input type="text" value="<?=$rec['tahun_terbit']?>" id="tahun_terbit" name="tahun_terbit" placeholder="" class="form-control" autofocus required>
    </div>
    <label for="jenis">Pengarang</label>
    <div class="form-group">
      <input type="text" value="<?=$rec['pengarang']?>" id="pengarang" name="pengarang" placeholder="Masukan Pengarang" class="form-control" autofocus required>
    </div>
    <label for="jenis">Penerbit</label>
    <div class="form-group">
      <input type="text" value="<?=$rec['penerbit']?>" id="penerbit" name="penerbit" placeholder="Masukan penerbit" class="form-control" autofocus required>
    </div>
    <label for="jenis">Kategori</label>
    <div class="form-group">
                <select name="kategori" id="kategori" class="form-control" required placeholder="">
                    <option  value="<?=$rec['kategori']?>">--pilih Kategori Buku--</option>
                    <option name="kategori" value="Novel / Komik">Novel / Komik</option>
                    <option name="kategori" value="Misteri">Misteri</option>
                    <option name="kategori" value="Romance">Romance</option>
                    <option name="kategori" value="Bisnis dan Ekonomi">Bisnis dan Ekonomi</option>
                    <option name="kategori" value="Buku Anak">Buku Anak</option>
                </select>
            </div>
            <div class="col-md-12">
 <div class="form-group">
   <label for="ket">Deskripsi</label>
   <textarea class="form-control" name="deskripsi" id="deskripsi" value="<?=$rec['deskripsi']?>" placeholder=""></textarea>
 </div>
      </div>
                             <div class="form-group">
                                <label>Foto</label>
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="input-append">
                                        <div class="uneditable-input">
                                            <span class="fileupload-preview"></span>
                                        </div>
                                        <span class="btn btn-default btn-file">
                                            <span class="fileupload-exists">Change</span>
                                            <span class="fileupload-new">Select file</span>
                                            <input type="file" name="sampul" id="sampul" />
                                        </span> 
                                        <a href="#" class="btn btn-primary fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
                                <p class="help-block">*Ukuran gambar jangan lebih dari 100kb</p>
                            </div>
      <div class="col-md-2">
 <button type="submit" name="simpan" class="btn btn-primary btn-sm" style="margin-top:32px; width:100%;"><b>Simpan</b></button>
      </div>
    </div>
  </form>
</div>