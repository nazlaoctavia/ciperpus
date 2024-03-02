<!-- Table Anggota -->

<!-- Head Line -->
<div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-12">
                <h2 style="text-align: center;margin-bottom: 30px">Data Pengguna</h2>
                <a href="<?=site_url('admin/c_mahasiswa')?>" class="btn btn-secondary btn-icon-split" enctype="multipart/form-data">
                                            <span class="text">tambah +</span>
                                        </a>
                <hr>
                <table id="myTable" class="table table-striped table-bordered" cellspacing="0" >
                    
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis kelamin</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>level</th>
                        <th>status</th>
                        <th>action</th>
                        
                    </tr>
                </thead>
                <tbody>
                        <?php 
                            $no=1;
                            foreach ($user as $s) {?>
                            <tr>
                                <td><?php echo $no++?></td>
                                <td><?php echo $s->nama?></td>
                                <td><?php echo $s->alamat?></td>
                                <td><?php echo $s->jk?></td>
                                <td><?php echo $s->username?></td>
                                <td><?php echo $s->email?></td>
                                <td><?php echo $s->level?></td>
                                <td><?php echo $s->onofff?></td>

                                <td style="text-align: center;">
                                <button  class="btn btn-sm btn-info" data-toggle="modal" data-target="#modaledit" data-id="<?php echo $s->id_user?>">Edit</button>
                                <a class="btn btn-sm btn-danger" href="<?=site_url('admin/delete_user/'.$s->id_user)?>">Delete</a>

                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header" style="background-color: #263F67;">
            <h5 class="modal-title" id="exampleModalLongTitle">Form Edit Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #ffffff;">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="<?=site_url('admin/do_update_admin')?>" method="post">
                <input type="hidden" name="hij" id="hij" value="abd">
                <div class="col-md-12"> 
      <div class="form-group">
      <label for="nama_buku">Nama Lengkap</label>
      <input type="text" value="" name="nama" id="nama" placeholder="Masukan Nama" class="form-control" autofocus required>
    </div> 
    <div class="form-group">
    <label for="alamat"> Alamat</label>
    <input type="text" value="" name="alamat" id="alamat" placeholder="Masukan Alamat" class="form-control" autofocus required>
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
      <label for="nama">Username</label>
      <input type="text" value="" name="username" placeholder="" class="form-control" autofocus required>
    </div>
    </div>
      <div class="col-md-12">
 <div class="form-group">
   <label for="jenis">Password</label>
   <input type="password" value="" name="password" class="form-control" required placeholder="">
 </div>
</div>
      <div class="col-md-12">
 <div class="form-group">
   <label for="jumlah">email</label>
   <input type="email" value="" name="email" min="1" placeholder="" class="form-control" required>
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
        <div class="modal-footer">
        <center> <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button></center>
                <button type="submit" class="btn btn-primary">Ya</button>
            </div>
        </div>
           
            </form>
        </div>
        </div>
    </div>
    </div>





    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script>
    $(document).on("click", ".btn-info", function () {
      var id = $(this).data('id');

      $('#hij').attr('value', id)

        
        /*
        proceed with rest of modal using the id variable as necessary 
        */
    });
    </script>
    </body>
    </html>