<!-- Login -->

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
 

    <title>E-library : Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url('assetss/')?>css/sb-admin-2.min.css" rel="stylesheet">
 
    <style>
        .bg{
            margin: auto;
            width: 100%;
            padding: 100px;
            
        }
    </style>
</head>

<body background="<?=base_url('assets/img/slide/00.jpg')?>" style="background-size: cover;">
    <div class="container">
        <!-- Outer Row --> 
            <div class="row justify-content-center">
            <div class="col-xl-0 col-lg-0 col-md-4">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-5">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-3">
                                <?php echo $this->session->flashdata('admin');?>
                                    <div class="text-center"> 
                                    <h1 class="h4 text-gray-900 mb-4">LOGIN</h1>
                                    <h1 class="h6 text-gray-900 mb-4">Hello ! let's Get Started</h1>
                                    </div>
                                    <form class="user" action="<?=site_url('login/auth')?>" method="Post">
                                    <?php $this->session->flashdata('msg');?>
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user"
                                                id="username" aria-describedby="emailHelp"
                                                placeholder="Masukan username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="Password" placeholder="Masukan password">
                                        </div>
                                            <input type="submit" value="login" class="btn btn-primary btn-user btn-block" style="background-color: #4786E4;">
                                        </div>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a style="color: #545454;" class="small">Don't have an account?</a>
                                        <a style="color: #4786E4;" class="small" href="<?=site_url('registrasi')?>"> Sign Up</a>
                                    </div>
                                    <br>
                                    <a style="color: #545454;" class="small" href="<?=site_url('home')?>"> back</a>

                                     </div>
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