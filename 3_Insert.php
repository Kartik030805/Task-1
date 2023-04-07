<?php
require  "Database/Connection.php";

$tname = $_POST['tname'];
$tdesc = $_POST['tdescription'];
$tsdate = $_POST['tsdate'];
$tedate = $_POST['tedate'];

$id = "INSERT INTO `taskInfo` VALUES ('$tname','$tdesc','$tsdate','$tedate');";
$idit = mysqli_query($con, $id);
if ($idit) {
    echo "
    <html>
        <body>
        <script>
            alert('Data inserted successfully!!');
            location.href = '1_Home.php';
        </script>
        </body>
    </html>";
} else {
    echo "
    <html>
        <body>
        <script>
            alert('Try again !!!');
            location.href = '1_Home.php';
        </script>
        </body>
    </html>";
}
