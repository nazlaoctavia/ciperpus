<!-- Form Buat Ulasan -->


<div class="container mt-5">
  <center><h2>Ulas Buku</h2></center>
  <hr>
  
  <a href="<?=site_url('user')?>" class="btn btn-primary btn-sm float-left">← kembali</a>
  <div class="clearfix"></div>
 
  
  <form action="<?=site_url('user/c_ulasan')?>" method="POST" class="mt-3">
    <div class="form-group">
        <label for="nama_buku">Nama Pengulas</label>
        <input type="text" name="id_user" id="id_user" placeholder="" class="form-control" autofocus required>
    </div>
<div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="jumlah">Buku</label>
                <input type="text" name="id_buku" id="id_buku" min="1" placeholder="" class="form-control" required>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label for="ruang"> Ulasan</label>
        <input type="text" name="ulasan" id="ulasan" class="form-control" required placeholder="">
    </div>
</div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="ket">Rating</label>
            <input type="text" class="form-control" name="rating" id="rating" placeholder=""></textarea>
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