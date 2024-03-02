<!-- Data Laporan Peminjaman ( Histori Peminjaman )-->
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-12">
            <h2 style="text-align: center;margin-bottom: 30px">Laporan Peminjaman</h2>
            <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead> 
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
               <th  style="width:50px; text-align: center;" >Status</th>
                </tr>
              </thead>
              <tbody>
                    <?php 
                        $no=1;
                        foreach ($peminjaman as $s) {?>
                        <?php $status=$s->status; 
                            if($status=="dikembalikan") { ?>
                        <tr>
                            <td><?php echo $no++?></td>
                            <td><?php echo $s->username?></td>
                            <td><?php echo $s->buku?></td>
                            <td><?php echo $s->tanggal_peminjaman?></td>
                            <td><?php echo $s->tanggal_pengembalian?></td>
                            <td><?php echo $s->tgl_waktu?></td>
                        <?php } if($status=="DITERIMA") { ?>
                          <td> 
                          <div class="button-container">
                        <button type="button" style="text-align: center; font-weight:bold;" class="btn btn-success">Dikembalikan</button></div>
                        </td>
                        <?php } ?>                          
                          </tr>
                    <?php }?>
                  

              </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>