<!-- Table Buku -->

 <!-- Favicons -->
<link href="<?=base_url('assetss/')?>img/logo00.png" rel="icon">
<title>E-library : Dashboard Admin</title>

<!-- Head line -->
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-12">
            <h2 style="text-align: center;margin-bottom: 30px">Data Buku </h2>
            <a href="<?=site_url('admin/c_buku')?>" class="btn btn-secondary btn-icon-split" enctype="multipart/form-data">
                                        <span class="text">tambah +</span>
                                    </a>
            <hr>
            <!-- Field Table -->
            <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
               <th style="width:50px;">Action</p></th>
                </tr>
              </thead>
              <tbody>
                    <?php 
                        $no=1;
                        foreach ($buku as $b) {
                    ?>
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
                            <td style="text-align: center;">
                                <a href="<?=site_url('admin/update_buku/'.$b->id_buku)?>"><button class="btn btn-sm btn-primary" onclick=""><img src="<?=base_url('assets/img')?>/pen-solid.png" width="10px"></button></a>
                                <a href="<?=site_url('admin/delete/'.$b->id_buku)?>" class="btn btn-sm btn-danger" onclick=""><img src="<?=base_url('assets/img')?>/trash-can-regular.png" width="10px"></a>
                            </td>
                        </tr>
                    <?php }?>
              </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>