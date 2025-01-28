<?php

include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap v5 css -->
  <link rel="stylesheet" type="text/css" href="public/css/bootstrap.rtl.min.css">
  <!--bootstrap select-->
  <link rel="stylesheet" href="public/css/Bootstrap-select.css" />
  <!--Font-awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <!--fancybox-->
  <link rel="stylesheet" href="public/css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="public/css/styles.css">

</head>

<body>

  <header>
    <div class="row">
      <div class="col-md-3 col-lg-3 col-sm-12">
        <h3>Royal Real Estate</h3>
      </div>
      <div class="col-md-9 col-lg-9 col-sm-12">
        <div class="head">
          <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="estates.php">Estates</a>
            <a href="contact.php">Contact Us</a>
            <?php if (!isset($_SESSION['email'])) : ?>
              <div class="dropdown">
                <button class="dropbtn">Register</button>
                <div class="dropdown-content">
                  <a href="login.php">Login</a>
                  <a href="register.php">Register</a>
                </div>
              </div>
            <?php else : ?>
              <a href="logout.php">Logout</a>
              <?php if (isset($role) && $role == 'admin') {
                echo '<a href="admin.php">admin</a>';
              } ?>
            <?php endif; ?>
            <a role="button" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search"></i></a>
          </nav>

        </div>

      </div>
    </div>


  </header>
  <div class="modal fade" id="search-modal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center">search for estate</h4>
        </div>
        <form method="get">
          <div class="modal-body">

            <div class="form-group">
              <div>
                <label>search for estate</label>
                <input type="text" class="form-control" name="search" placeholder="Enter estate name" />
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">search</button>
          </div>
        </form>
      </div>

    </div>
  </div>