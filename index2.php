<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repeat exam reminder</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/custom.css" />

  </head>

  <body>
          <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
            <h1 class="text-light display-1 text-center">..Hello  <?php echo $_SESSION['name']; ?>..</h1>
            <h1 class="text-light display-3 text-center">Welcome To our Repeat Exam Reminder</h1>
            <br>
            <h3>Click here to view subjects</h3>
            <a href="result.php" class="btn btn-primary mb-2">result</a>
            <h3>Click here to logout</h3>
            <a href="logout.php" class="btn btn-secondary">logout</a>

          </div>
    </div>
    </div>
  </body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 