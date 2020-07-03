<?php
  include("dbconfig/connect.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page">

      <div class="page-content d-flex align-items-stretch"> 
        <div class="content-inner">
          <!-- Forms Section-->
          <section class="forms"> 
            <div class="container">
              <div class="row">

                <!-- Form Elements -->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">All form elements</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Username</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="username">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="name">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Email</label>
                          <div class="col-sm-9">
                            <input type="text" name="email" class="form-control">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Phone no</label>
                          <div class="col-sm-9">
                            <input type="text" name="phn" class="form-control">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Availability</label>
                          <div class="col-sm-9">
                            <input type="text" name="avaiablity" class="form-control">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Profession</label>
                          <div class="col-sm-9">
                            <input type="text" name="profession" class="form-control">
                          </div>
                        </div>

                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Education</label>
                          <div class="col-sm-9">
                            <input type="text" name="edu" class="form-control">
                          </div>
                        </div>
                        
                        <div class="line"></div>
                        <div class="form-group row">
                          <label for="fileInput" class="col-sm-3 form-control-label">Image </label>
                          <div class="col-sm-9">
                            <input type="file" class="form-control-file" name="uploadimg">
                          </div>
                        </div>

                        <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
                          </div>
                        </div>
                      </form>

                      <?php
                        if (isset($_POST['submit'])) 
                        {
                          $username = $_POST['username'];
                          $name = $_POST['name'];
                          $email = $_POST['email'];
                          $phn = $_POST['phn'];
                          $avaiablity = $_POST['avaiablity'];
                          $profession = $_POST['profession'];
                          $edu = $_POST['edu'];

                          $filename = $_FILES["uploadimg"]["name"];
                          $tempname = $_FILES["uploadimg"]["tmp_name"];
                          $folder = "gnome_img/".$filename;
                          move_uploaded_file($tempname, $folder);

                          $query = "INSERT INTO gnome_profile VALUES('','$username','$name',$
                          email','$phn','$avaiablity','$profession','$profession','$edu','$folder')";

                          $data = mysqli_query($con, $query);
                          if ($data) 
                          {
                            echo "Data insert";
                          }
                          else
                          {
                            echo "Failed to insert";
                          }
                        }
                      ?>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>