
<?php
    include("init.php");
    
    $no_of_classes=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `class`"));
    $no_of_students=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `students`"));
    $no_of_result=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `result`"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Document</title>
    <style>
        .main{
            border-radius: 10px;
            border-width: 5px;
            border-style: solid;
            padding: 20px;
            margin: 7% 20% 0 20%;
        }
    </style>
</head>
<body>
   
       <div class="dash">

        <h2 class="dashboardtitle">ADMIN DASHBOARD</h2>

        
        <div class="log">
            <!-- <button type="submit" class="button-17 topbtn newbtn"> <a class="nn" href="logout.php">LOGOUT</a> </button> -->
            <a href="logout.php" Class="nn">  <button type="submit" class="button-17 topbtn newbtn">LOGOUT </button></a>
        </div>
        </div>
    <div class="nav">
        <ul>
            <li class="dropdown" onclick="toggleDisplay('1')">
                <a href="" class="dropbtn">Classes &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="1">
                    <a href="add_classes.php">Add Class</a>
                    <a href="manage_classes.php">Manage Class</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('2')">
                <a href="#" class="dropbtn">Students &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="2">
                    <a href="add_students.php">Add Students</a>
                    <a href="manage_students.php">Manage Students</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('3')">
                <a href="#" class="dropbtn">Results &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="3">
                    <a href="add_results.php">Add Results</a>
                    <a href="manage_results.php">Manage Results</a>
                </div>
            </li>
        </ul>
    </div>

    <div class="main">
        <?php
            echo '<p class="show">Number of classes:  '.$no_of_classes[0].'</p>';
            echo '<p class="show">Number of students: '.$no_of_students[0].'</p>';
            echo '<p class="show">Number of results:  '.$no_of_result[0].'</p>';
        ?>
    </div>
    
</body>
</html>
<?php
   include('session.php');
?>
