<!-- Table Kelola Peminjaman -->
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-12">
            <h2 style="text-align: center;margin-bottom: 30px">Data Peminjaman </h2>
            <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr> 
                    <th>No</th>
                    <th>Nama</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Status</th>
               <th style="width:50px; text-align: center;" >Action</th>
                </tr>
              </thead>
              <tbody>
                    <?php 
                        $no=1;
                        foreach ($peminjaman as $s) {
                    ?>
                        <tr>
                            <td><?php echo $no++?></td>
                            <td><?php echo $s->username?></td>
                            <td><?php echo $s->buku?></td>
                            <td><?php echo $s->tanggal_peminjaman?></td>
                            <td><?php echo $s->tanggal_pengembalian?></td>
                            <td><?php echo $s->status?></td>
                            <td style="width:500px; text-align: center;">
                           <button  class="btn btn-sm btn-warning" data-toggle="modal" data-id="<?php echo $s->id_peminjaman?>" data-target="#modalsetuju">Dikembalikan</button>
                            </td>
                        </tr>
                    <?php }?>
              </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modaltsetuju" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tidak Setuju</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="<?=site_url('admin/tsetuju')?>" method="post">
            <input type="hidden" name="idk" id="idk" value="abd">
            Apa anda yakin tidak setuju?
            <input type="hidden" name="status" value="TIDAK SETUJU" id='status'>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
            <button type="submit" class="btn btn-primary">Ya</button>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modalsetuju" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Setuju</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="<?=site_url('admin/setuju')?>" method="post">
            <input type="hidden" name="idkl" id="idkl" value="abd">
            Apa anda yakin setuju?
            <input type="hidden" name="status" value="Dikembalikan" id='status'>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
            <button type="submit" class="btn btn-primary">Ya</button>
        </form>
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
<script>
    $(document).on("click", ".btn-danger", function () {
      var id = $(this).data('id');

      $('#idk').attr('value', id)

    
        /*
        proceed with rest of modal using the id variable as necessary 
        */
    });
    </script>
<script>
    $(document).on("click", ".btn-warning", function () {
      var id = $(this).data('id');

      $('#idkl').attr('value', id)

    
        /*
        proceed with rest of modal using the id variable as necessary 
        */
    });
    </script>
</body>
</html>