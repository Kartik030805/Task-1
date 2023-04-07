<?php
require_once "Navbar/nav.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>To Do List of Tasks</title>
  <link rel="stylesheet" href="CSSs/home.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
  <div class="main">
    <div class="head">
      <h1>Schedule Tasks</h1>
    </div>
    <div class="data_table">
      <?php

      require "Database/Connection.php";
      $rft = "SELECT  * FROM `taskInfo`";
      $rd = mysqli_query($con, $rft);
      $r = mysqli_num_rows($rd);

      if ($r > 0) {
        echo "<table class='table'>
        <thead>
          <tr>
            <th>Task Title</th>
            <th>Task Discription</th>
            <th>Task Start-date</th>
            <th>Task End-date</th>
          </tr>
        </thead>";
        while ($raw = mysqli_fetch_array($rd)) {
          echo "<tbody>";
          echo "<tr>";
          echo "<td>" . $raw['task_title'] . "</td>";
          echo "<td>" . $raw['task_desc'] . "</td>";
          echo "<td>" . $raw['tsdate'] . "</td>";
          echo "<td>" . $raw['tedate'] . "</td>";
          echo "</tr>";
          echo "</tbody>";
        }
        echo "</table>";
      } else {
        echo "
        <div class='empty'>
          <p>Tasks are empty..!</p>
        </div>
        ";
      }


      ?>
    </div>
    <div class="Buttons">
      <a href="2_Form.php"><button>Add Tasks</button></a>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>