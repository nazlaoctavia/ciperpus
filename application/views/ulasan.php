<!-- Table Buku -->

 <!-- Favicons -->
 <link href="<?=base_url('assets/')?>img/logo00.png" rel="icon">
<title>E-library : Dashboard Admin</title>

<!-- Head line -->
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-12">
            <h2 style="text-align: center;margin-bottom: 30px">Data Ulasan </h2>
            <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            
            <!-- Field Table -->
            <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pengulas</th>
                    <th>Buku </th>
                    <th>Ulasan</th>
                    <th>Rating</th>
                </tr>
              </thead>
              <tbody>
                    <?php 
                        $no=1;
                        foreach ($ulasan as $b) {
                    ?>
                        <tr>
                            <td><?php echo $no++?></td>
                            <td><?php echo $b->id_user?></td>
                            <td><?php echo $b->id_buku?></td>
                            <td><?php echo $b->ulasan?></td>
                            <td><?php echo $b->rating?></td>
                        </tr>
                    <?php }?>
              </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>