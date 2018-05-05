<?php
  session_start();

  if (isset($_SESSION['a_id'])) {

      header("Location: index.php");
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ed2pro Admin Area</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
        <div class="container">
            <a href="index.php" class="navbar-brand">ADMIN DASHBOARD</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            </div>
        </div>
    </nav>

    <header id="main-header" class="py-2 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><i class="fa fa-user"></i> ED2PRO Admin</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- ACTIONS -->
    <section id="action" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </section>

    <!-- LOGIN -->
    <section id="login">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header bg-light">
                            <h4>Account Login</h4>
                        </div>
                        <div class="card-body">
                            <form action="./includes/login.inc.php" method="POST">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="jdoe@gmail.com" autofocus> 
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="pwd" class="form-control" placeholder="******">
                                </div>
                                <input type="submit" name="submit" class="btn btn-primary btn-block" value="Login">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
        <div class="conatiner">
            <div class="row">
                <div class="col">
                    <p class="lead text-center">Copyright &copy; 2018 ed2pro.com</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor1');
    </script>
</body>

</html>
