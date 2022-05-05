<?php
include('header.php');
include('upload.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stellar Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../../vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrappera">
            <div class="page-header">
                <nav class="edit">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <br>
                        <div class="icon"> <i class="icon-arrow-up-circle"></i></div>
                    </div>
                    <div class="icon">
                        <div class="preview"> <i class="icon-people"></i></div>
                    </div>
                    <div class="icon">
                        <div class="msg"> <i class="icon-speech"></i></div>
                    </div>
                    <div class="icon">
                        <div class="preview"> <i class="icon-bell"></i></div>
                    </div>
                </nav>

            </div>
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-bodr">
                            <div class="col-lg-6 grid-margin stretch-card">
                                <div class="cardz">
                                <i class="icon-magnifier"><input class="pesquisa" type="text"></i>
                                <div class="card-bodye">                                                                                               
                                        <form action="upload.php" method="POST" enctype="multipart/form-data">
                                            <input type="file" name="file" id="">
                                            <input type="submit" name="enviar" value="Enviar">
                                            </form>
                                                <h5 class="left" >Arquivos enviados</h5> 
                                                <div class="temp">
                                            <?php require 'arquivos.php'?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:../../partials/_footer.html -->
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="../../vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="../../js/off-canvas.js"></script>
        <script src="../../js/misc.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <!-- End custom js for this page -->
</body>

</html>
<?php
include('footer.php');
?>