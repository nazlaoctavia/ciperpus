<!-- Table Buku Peminjaman -->
<style>
  .button-container {
  display: flex;
  justify-content: center;
}
</style>

<div class="container mt-5">
  <center><h2>Buku Peminjaman</h2></center>
  <hr>
  <a href="<?=site_url('user')?>" class="btn btn-primary btn-sm float-left">← kembali</a>
<div class="clearfix"></div>
  <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                  <tr>
                  <th>No</th>
                  <th>Nama </th>
                    <th>Judul Buku</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Status</th>
                    <th  style="width:100px; text-align: center;" >Action</th>
                  </tr>
                </thead>
                <tbody> 
                      <?php 
                          $no=1;
                          foreach ($peminjaman as $s) {?>
                          <?php $status=$s->status;
                                $username=$s->username  ; 
                           { ?>
                          <tr>
                            <td><?php echo $no++?></td>
                            <td><?php echo $s->username?></td>
                            <td><?php echo $s->buku?></td>
                            <td><?php echo $s->tanggal_peminjaman?></td>
                            <td><?php echo $s->tanggal_pengembalian?></td>
                            <td><?php echo $s->status?></td>
                              <?php if($status=="" or $status=="kosong") { ?>
                        <td> <div class="button-container"><button type="button" class="btn btn-secondary" style="font-weight:bold;"><i class="fas fa-bars"></i>Dipinjam</button></td>
                        <td style="text-align: center;"><button data-toggle="modal" data-id="<?php echo $s->id_peminjaman?>" data-target="#modalbatal" class="btn btn-sm btn-danger" onclick="">Batalkan</a></td></div>
                        <?php } if($status=="dibatalkan") { ?>
                        <td> <button type="button" class="btn btn-warning"><span class="fa fa-cog fa-spin" aria-hidden="true"></span>dibatalkan</button></td>
                        <td style="text-align: center;"><a href="<?=site_url('user/delete_p/').$s->id_peminjaman?>" class="btn btn-sm btn-danger" onclick="">Hapus</a></td>
                        <?php } if($status=="TIDAK SETUJU") { ?>
                        <td> <button type="button" class="btn btn-danger"><span class="fa fa-cog fa-spin" aria-hidden="true"></span>tidak disetujui</button></td>
                        <td style="text-align: center;"><a href="<?=site_url('user/delete_p/').$s->id_peminjaman?>" class="btn btn-sm btn-danger" onclick="">Hapus</a></td>
                        <?php } if($status=="Dikembalikan") { ?>
                          <td> 
                          <div class="button-container">
                        <button type="button" style="text-align: center; font-weight:bold;" class="btn btn-warning">Dikembalikan</button></div>
                        </td><td></td> 
                        <?php } ?>                          
                          </tr>
                      <?php }?>
                      <?php }?>
                </tbody>
              </table>
</div>
<div class="modal fade" id="modalbatal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Batalkan Peminjaman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?=site_url('user/batalkan')?>" method="post">
        <input type="hidden" name="idk" value="abcd" id="idk">
        <input type="hidden" name="status" value="dibatalkan" id="status">
        Apakah anda yakin?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </form>
      </div>
    </div>
  </div>
</div>