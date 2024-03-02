<!-- Sign Up -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
     <!-- Favicons -->
  <link href="<?=base_url('assets/')?>img/logo00.png" rel="icon">

  <title>E-library : Sign Up</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url('assetss/')?>css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        .bg-gradient-primary{
            background-color: #481f46;
            background-image: linear-gradient(180deg, #481f46 10%, #481f46 100%);
            background-size: cover;
        }
    </style>
</head>
<body background="<?=base_url('assets/img/slide/00.jpg')?>" style="background-size: cover;">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-xl-5 col-lg-3 col-md-5">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body">
                <!-- Nested Row within Card Body -->
                    <div class="col-lg-0">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Sign Up</h1>
                                <h1 class="h6 text-gray-900 mb-4">Regist your account ! </h1>
                            </div>
                            <form class="user" action="<?=site_url('registrasi/proses')?>" method="post">
                            
                            <div class="form-group row">
                                        <input type="text" class="form-control form-control-user" name="username" id="exampleFirstName"
                                            placeholder="Username">
                                </div>
                                <div class="form-group row">
                                    <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                        <input type="password" name="password" id="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="form-group row">
                                        <input type="text" class="form-control form-control-user" name="nama" id="nama"
                                            placeholder="Nama Lengkap">
                                </div>    
                                <div class="form-group row">
                                        <input type="text" class="form-control form-control-user" name="alamat" id="alamat"
                                            placeholder=" Alamat">
                                </div>    
                                    <div class="form-group row ">
                                 <select name="jk" id="jk" class="form-control form-control"  placeholder="Gender">
                                <option name="jk" value="">Gender</option>
                                <option name="jk" value="Laki - laki">Laki-laki</option>
                                <option name="jk" value="Perempuan">Perempuan</option>
                                </select>
                                    </div>
                  
                                    <input type="text" name="level" id="level" value="user" hidden>
                                <button class="btn btn-primary btn-user btn-block" style="background-color: #4786E4;">Daftar</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                        <a style="color: #545454;" class="small">Already have an account?</a>
                                        <a style="color: #4786E4;" class="small" href="<?=site_url('login')?>"> Login</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url('assetss/')?>vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url('assetss/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?=base_url('assetss/')?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?=base_url('assetss/')?>js/sb-admin-2.min.js"></script>

</body>

</html>