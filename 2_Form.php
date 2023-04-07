<?php
require_once "Navbar/nav.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take Info of Task</title>
    <link rel="stylesheet" href="CSSs/form.css">
</head>

<body>
    <div class="main">
        <div class="head">
            <h1>Schedule</h1>
        </div>
        <div class="notice">
            <p>Create your Schedule</p>
        </div>
        <div class="taskForm">
            <form action="3_Insert.php" method="post" class="mform">
                <div class="t_name">
                    <label for="tname">Task Title :- </label>
                    <input type="text" name="tname" placeholder="Enter Task Name">
                </div>
                <div class="t_desc">
                    <label for="tname">Task Discription :- </label>
                    <textarea name="tdescription" cols="30" rows="3" placeholder="Enter Task Discription..."></textarea>
                </div>
                <div class="t_sd">
                    <label for="tname">Task Start-Date :- </label>
                    <input type="datetime-local" name="tsdate" placeholder="Enter Task Start-date">
                </div>
                <div class="t_ed">
                    <label for="tname">Task End-Date :- </label>
                    <input type="datetime-local" name="tedate" placeholder="Enter Task End-date">
                </div>
                <div class="buttons">
                    <input type="Submit" name="Submit" value="Submit">
                    <input type="Reset" name="Reset" value="Clear">
                </div>
            </form>
        </div>
    </div>
</body>

</html>