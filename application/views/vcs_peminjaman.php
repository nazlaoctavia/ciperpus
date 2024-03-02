<!-- Form Peminjaman Buku -->


<div class="container mt-5">
  <center><h2>Isi Form Peminjaman</h2></center>
  <hr>
  
  <a href="<?=site_url('user')?>" class="btn btn-primary btn-sm float-left">← kembali</a>
  <div class="clearfix"></div>
 
  
  <form action="<?=site_url('user/c_peminjaman')?>" method="POST" class="mt-3">
    <div class="form-group">
        <label for="nama_buku">Nama </label>
        <input type="text" name="username" id="username" placeholder="" class="form-control" autofocus required>
    </div>
<div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="jumlah">Judul Buku</label>
                <input type="text" name="buku" min="1" placeholder="" class="form-control" required>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label for="ruang">Tanggal Peminjaman</label>
        <input type="date" name="tanggal_peminjaman" class="form-control" required placeholder="">
    </div>
</div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="ket">Tanggal Pengembalian</label>
            <input type="date" class="form-control" name="tanggal_pengembalian" placeholder=""></textarea>
        </div>
    </div>
</div>
 
</div>
<div>
    <div class="col-md-2">
        <button type="submit" name="simpan" class="btn btn-primary btn-sm" style="margin-top:32px; width:100%;"><b>Simpan</b></button>
    </div>
</div>
    <input type="text" name="status" id="status" value="kosong" hidden>
    <input type="datetime" name="tgl_waktu" value="<?php echo date('Y-m-d H:i:s');?>" id="" hidden   >
</form>
</div>