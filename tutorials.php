<?php
  session_start();

  if (!isset($_SESSION['u_id'])) {

      header("Location: login.php");
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Programming,learn code online">
  <meta name="author" content="Manoranjan Dash">

  <title>Welcome | Ed2pro.com</title>
  <!-- Preload CSS  -->
  <link rel="stylesheet" href="./css/preload.min.css" />

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- MDB CSS -->
  <link href="css/mdb.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Courgette|Lato|Montserrat|Muli|Open+Sans|Roboto|Roboto+Slab|Ubuntu" rel="stylesheet">


  <!-- Font Awesome CDN -->
  <script src="js/fontawesome-all.min.js" charset="utf-8"></script>
  <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.3/js/all.js"></script> -->

  <!-- Custom Style  -->

  <link href="css/style.css" rel="stylesheet">

  <link href="css/userstyle.css" rel="stylesheet">

  <script>
    // new WOW().init();
  </script>

  <!-- Smooth Scrolling -->
  <script src="./js/scrollreveal.js"></script>
  <style>
    /* .space-for-content{
      padding-bottom: 100px;
    } */
/*
 CHECK BOX AND RADIO BUTTON DESIGN
*/

@keyframes click-wave {
  0% {
    height: 40px;
    width: 40px;
    opacity: 0.35;
    position: relative;
  }
  100% {
    height: 200px;
    width: 200px;
    margin-left: -80px;
    margin-top: -80px;
    opacity: 0;
  }
}

.option-input {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  -o-appearance: none;
  appearance: none;
  position: relative;
  top: 13.33333px;
  right: 0;
  bottom: 0;
  left: 0;
  height: 40px;
  width: 40px;
  transition: all 0.15s ease-out 0s;
  background: #cbd1d8;
  border: none;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  margin-right: 0.5rem;
  outline: none;
  /* position: relative; */
  z-index: 1000;
}

.option-input:hover {
  background: #9faab7;
}

.option-input:checked {
  background: #40e0d0;
}

.option-input:checked::before {
  height: 40px;
  width: 40px;
  position: absolute;
  content: '✔';
  display: inline-block;
  font-size: 26.66667px;
  text-align: center;
  line-height: 40px;
}

.option-input:checked::after {
  -webkit-animation: click-wave 0.65s;
  -moz-animation: click-wave 0.65s;
  animation: click-wave 0.65s;
  background: #40e0d0;
  content: '';
  display: block;
  position: relative;
  z-index: 100;
}

.option-input.radio {
  border-radius: 50%;
}

.option-input.radio::after {
  border-radius: 50%;
}

  </style>

  <script>
    window.addEventListener('load', function() {
      var mspreload = document.getElementById("mspreload");
      // document.body.removeChild("mspreloader");
      mspreload.style.display = 'none';
      // setTimeout(mspreload, 4000);
    })

  </script>

</head>


<body>
  <!-- PreLoader -->
  <div class="container">
    <div id="mspreload" class="ms-preload">
      <div id="status">
        <div class="spinner">
          <div class="dot1"></div>
          <div class="dot2"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.PreLoader -->

  <!-- Navigation -->

  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container" id="branding">
      <a class="navbar-brand animated zoomInRight text-primary" id="logo" href="user_index.php"><i class="fas fa-code fa-lg"></i> &nbsp;Ed 2 <span class="">Pro</span></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mr-auto animated zoomIn">
          <li class="nav-item">
            <a class="nav-link active" href="user_index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Give Test</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class='dropdown-item' target='_blank' href="test.php">Test Your Programming</a>

            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tutorials</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <?php

                include './includes/db.inc.php';
                $q1 = "SELECT * FROM `subject`";

                $result = mysqli_query($conn, $q1);
                while($row = mysqli_fetch_array($result)){
                    echo "<a class='dropdown-item' href='tutorials.php?subID=".$row['sub_id']."'>".$row['sub_name']."</a>";
                }
              ?>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact US</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto nav-flex-icons">
          <li class="nav-item">
            <a href="#" class="nav-link waves-effect waves-light">
              0
              <i class="fa fa-envelope"></i>
            </a>
          </li>

          <li class="nav-item avatar dropdown">
            <a href="" class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="images/no-photo.jpg" width="30" height="30" alt="" class="img-fluid rounded-circle z-depth-0">

            </a>

            <div class="dropdown-menu dropdown-menu-right special" aria-labelledby="navbarDropdownMenuLink-5" style="position: absolute;">

              <a href="user_account.php" class="dropdown-item waves-effect waves-light"><i class="fa fa-user"></i> Account</a>
              <a href="logout.php" class="dropdown-item waves-effect waves-light"><i class="fas fa-sign-out-alt"></i> Sign-Out </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- /. Navigation -->
  <div class="mb-5"></div>
  <div class="pt-5"></div>


                <?php
                  include_once './includes/db.inc.php';
                  $subID = $_REQUEST['subID'];
                  $q1 = "SELECT * FROM `video` WHERE `sub_id` = $subID";
                  $q2 = "SELECT * FROM `subject` WHERE `sub_id` = $subID";

                  $subject = mysqli_query($conn, $q2);
                  $subname = mysqli_fetch_array($subject);

                  $result = mysqli_query($conn, $q1);

                ?>
    <div class="container">
      <div class="row">
        <div class="col">
            <h1 class="text-uppercase text-center"><span id="subject"><?php echo $subname['sub_name']; ?> </span>Tutorials</h1>
        </div>
      </div>
    </div>
    <div class="mb-5"></div>
    <!-- Video Section -->


   <section>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-4">
          <div class="card">
            <div class="list-group nav-tabs nav" id="myTab" role="tablist">

            <?php
            $f = true;
              while($row = mysqli_fetch_array($result)){
                $id = $row['video_id'];

                if($f == true){
                   echo '<a class="list-group-item active ripple" id="video-'.$id.'" data-toggle="pill" href="#v-'.$id.'" role="tab" aria-controls="v-'.$id.'" aria-selected="true">'.$row['video_title'].'</a>';
                   $f = false;
                } else {
                   echo '<a class="list-group-item ripple" id="video-'.$id.'" data-toggle="pill" href="#v-'.$id.'" role="tab" aria-controls="v-'.$id.'" aria-selected="true">'.$row['video_title'].'</a>';
                }

              }
            ?>



            </div>
          </div>
        </div>
        <div class="col-12 col-md-8">
          <div class="card ripple p-4">
          <div class="tab-content" id="v-pills-tabContent">

              <?php

              $res = mysqli_query($conn, $q1);
              $first = true;
               while($row = mysqli_fetch_array($res)){

                $id = $row['video_id'];
                if($first == true){
                      echo '<div class="tab-pane fade show active" id="v-'.$id.'" role="tabpanel" aria-labelledby="video-'.$id.'">
                          <iframe width="100%" height="330" src="'.$row['video_link'].'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>';
                        $first = false;
                } else {
                  echo '<div class="tab-pane fade" id="v-'.$id.'" role="tabpanel" aria-labelledby="video-'.$id.'">
                          <iframe width="100%" height="330" src="'.$row['video_link'].'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>';
                }

              }



              ?>

          </div>
          </div>
        </div>
      </div>
    </div>

  </section>

    <!-- /. Video Section -->

  <div class="mt-5"></div>
  <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container-fluid wow zoomIn">
        <div class="row">
          <div class="col-12 justify-content-start">
            <p class="m-0 text-white"><i class="fas fa-code fa-lg"></i></p>
            <p class="m-0 text-white">Copyright &copy; Ed2Pro.com 2018</p>
          </div>
        </div>
      </div>
    </footer>
<!--  /.Footer -->
    <!-- Bootstrap JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- <script src="./js/manualscroll.js"></script> -->
  </body>


  <!-- Smooth Scrooling  -->
  <script>
  // $(function() {
  //   // Smooth Scrolling
  //   $('a[href*="#"]:not([href="#"])').click(function() {
  //     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
  //       var target = $(this.hash);
  //       target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
  //       if (target.length) {
  //         $('html, body').animate({
  //           scrollTop: target.offset().top
  //         }, 1000);
  //         return false;
  //       }
  //     }
  //   });
  // });
  </script>

  <!-- /.Smooth Scrolling -->

  <!-- Animation -->

	<!-- <link href="css/animate.css" rel="stylesheet"> -->

  <!-- <script src="js/wow.min.js"></script> -->

</html>
