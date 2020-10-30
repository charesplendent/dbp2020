<?php
    $link = mysqli_connect('localhost', 'root', 'rootroot', 'world');
    if (isset($_GET['Name'])) {
        $name = mysqli_real_escape_string($link, $_GET['Name']);
    } else {
        $name = mysqli_real_escape_string($link, $_POST['Name']);
    }
    $query = "
    SELECT *
    FROM country
    WHERE Name = '{$name}'
    ";

    $result = mysqli_query($link, $query);
    $name_info = '';
    while ($row = mysqli_fetch_array($result)) {
        $name_info .= '<tr>';
        $name_info .= '<td>'.$row['Name'].'</td>';
        $name_info .= '<td>'.$row['Code'].'</td>';
        $name_info .= '<td>'.$row['Continent'].'</td>';
        $name_info .= '</tr>';
    }

?>




<!DOCTYPE html>
<html>

<head>
    <meta charset-"uft-8">
    <title> 나라 분석 </title>
    <style>
    body{
      background-color: Lavender
    }
    </style>
</head>

<body>
    <h2><a href="index.php">MAIN PAGE</a> | 나라 정보 </h2>
    <table border="1">
        <tr>
            <th>나라</th>
            <th>code</th>
            <th>대륙</th>
        </tr>
        <?=$name_info?>
    </table>
</body>

</html>
