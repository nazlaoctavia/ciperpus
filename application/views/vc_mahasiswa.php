<!-- Tambah Data Pengguna -->
<div class="container mt-5">
  <center><h2>Tambah Data Pengguna</h2></center>
  <hr>
  <a href="<?=site_url('admin/user')?>" class="btn btn-primary btn-sm float-left">← kembali</a>
  <div class="clearfix"></div>
  <form action="<?=site_url('admin/cr_mahasiswa2')?>" method="POST" class="mt-3" autocomplete="off">
      <div class="col-md-12"> 
      <div class="form-group">
      <label for="nama">Nama Lengkap</label>
      <input type="text"  name="nama" id="nama" placeholder="Masukan Nama" class="form-control" autofocus required>
    </div> 
    <div class="form-group">
      <label for="alamat">Alamat</label>
      <input type="text"  name="alamat" id="alamat" placeholder="Masukan Alamat" class="form-control" autofocus required>
    </div> 
        <div class="col-md-12">
            <div class="form-group">
                <label for="jk">Jenis Kelamin</label>
                <select name="jk" id="jk" class="form-control" required placeholder="">
                    <option  value="">-- Gender </option>
                    <option name="jk" value="perempuan">Perempuan</option>
                    <option name="jk" value="laki-laki">Laki-Laki</option>
                </select>
            </div>
        </div>
  <div class="form-group">
      <label for="nama_buku">Username</label>
      <input type="text" value="" name="username" placeholder="Username" class="form-control" autofocus required>
    </div>
    </div>
      <div class="col-md-12">
 <div class="form-group">
   <label for="jenis">Password</label>
   <input type="password" value="" name="password" class="form-control" required placeholder="...">
 </div>
 </div>
      <div class="col-md-12">
 <div class="form-group">
   <label for="jumlah">Email</label>
   <input type="email" value="" name="email" min="1" placeholder="Masukan Email" class="form-control" required>
  </div>
</div>
        <div class="col-md-12">
            <div class="form-group">  
                <label for="jenis">Level</label>
                <select name="level" id="level" class="form-control" required placeholder="">
                    <option  value="">-- Pilih Level </option>
                    <option name="level" value="admin">Admin</option>
                    <option name="level" value="petugas">Petugas</option>
                    <option name="level" value="user">Anggota</option>
                </select>
            </div>
        </div>
<input type="hidden" name="status" min="1" placeholder="" class="form-control" value="0">

 <!-- form foto-->
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
                                            <input type="file" name="foto" id="foto" />
                                        </span> 
                                        <a href="#" class="btn btn-info fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
                                <p class="help-block">*Ukuran gambar jangan lebih dari 100kb</p>
                            </div>
                           
      <div class="col-md-2">
 <button type="submit" name="simpan" class="btn btn-info btn-sm" style="margin-top:32px; width:100%;"><b>Simpan</b></button>
      </div> 
    </div>
  </form>
</div>