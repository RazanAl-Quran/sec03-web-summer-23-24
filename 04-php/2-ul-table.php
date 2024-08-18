<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<h3>Our courses are:</h3>";
    // send a request from the web server to the DB server in order to get all courses from DB
    $courses = array('programming', 'advanced programming', 'data structures');
    echo "<ul class='courses'>";
    for ($i = 0; $i < count($courses); $i++) {
        echo "<li>$courses[$i]</li>";
    }
    echo "</ul>";
    ?>
    <h3>gggggggggggggggggggggggggggg</h3>

    <?php

    $grades = array("khaled" => 80, "Saif" => 100, "rana" => 98);

    echo " <table border ='1' class='grades-table'>";
    echo "
    <tr>
        <th>Name</th>
        <th>Grade</th>
    </tr>
    ";

    foreach ($grades as $student => $grade) {
       echo "
         <tr>
            <td>$student</td>
            <td>$grade</td>
        </tr>
       ";
    };

    echo "</table>";
    ?>


</body>

</html>