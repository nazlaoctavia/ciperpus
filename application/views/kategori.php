<!-- Table Buku -->

 <!-- Favicons -->
 <link href="<?=base_url('assets/')?>img/logo00.png" rel="icon">
<title>E-library : Dashboard Admin</title>

<!-- Head line -->
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-12">
            <h2 style="text-align: center;margin-bottom: 30px">Data Kategori </h2>
            <a href="<?=site_url('admin/c_kategori')?>" class="btn btn-secondary btn-icon-split" enctype="multipart/form-data">
                                        <span class="text">tambah +</span>
                                    </a>
            <hr>
            <!-- Field Table -->
            <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
               <th style="width:50px;">Action</p></th>
                </tr>
              </thead>
              <tbody>
                    <?php 
                        $no=1;
                        foreach ($kategori as $b) {
                    ?>
                        <tr>
                            <td><?php echo $no++?></td>
                            <td><?php echo $b->nama_kategori?></td>
                            <td style="text-align: center;">
                                <a href="<?=site_url('admin/update_kategori/'.$b->id_kategori)?>"><button class="btn btn-sm btn-primary" onclick=""><img src="<?=base_url('assets/img')?>/pen-solid.png" width="10px"></button></a>
                                <a href="<?=site_url('admin/delete_kat/'.$b->id_kategori)?>" class="btn btn-sm btn-danger" onclick=""><img src="<?=base_url('assets/img')?>/trash-can-regular.png" width="10px"></a>
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