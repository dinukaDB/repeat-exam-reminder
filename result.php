<?php 
session_start();
include "db_conn.php";


// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    // Redirect to the login page if not logged in
    header("Location: login.php");
    exit();
}


// Retrieve the student's results from the database
$id = $_SESSION['id'];

$sql = "SELECT * FROM result WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <title>Results</title>
</head>
<body class="bg-dark">
    <div class="container">
      <div class="row mt-5">
        <div class="col">
          <div class="card mt-5">
            <div class="card-header">
              
              <h2 class="display-6 text-center">..These are the subjects you have to face..</h2>

            </div>
            <div class="card-body">
              <table class="table table-bordered text-center">
                <tr class="bg-dark text-white">
                    <td>Subject</td>
                    <td>Type</td>
                </tr>

                <?php while ($row = $result->fetch_assoc()) { ?>
                 <tr>
                    <td><?php echo $row['subject']; ?></td>
                    <td><?php echo $row['type']; ?></td>
                </tr>
                <?php } ?>
                </table>
            </div>
          </div>
        </div>
      </div>
     </div>
     <div class="container">
        <div class="row mt-5">
            <a href="logout.php" class="btn btn-outline-light btn-sm" role="button">Logout</a>
        </div> 
    </div>  
    </body>
</html>