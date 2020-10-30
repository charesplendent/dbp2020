<?php
    $link = mysqli_connect('localhost', 'root', 'rootroot', 'world');
    if (isset($_GET['Name'])) {
        $name = mysqli_real_escape_string($link, $_GET['Name']);
    } else {
        $name = mysqli_real_escape_string($link, $_POST['Name']);
    }
    $query = "
    SELECT *
    FROM city
    WHERE Name = '{$name}'
    ";

    $result = mysqli_query($link, $query);
    $name_info = '';
    while ($row = mysqli_fetch_array($result)) {
        $name_info .= '<tr>';
        $name_info .= '<td>'.$row['Name'].'</td>';
        $name_info .= '<td>'.$row['CountryCode'].'</td>';
        $name_info .= '<td>'.$row['District'].'</td>';
        $name_info .= '</tr>';
    }

?>




<!DOCTYPE html>
<html>

<head>
    <meta charset-"uft-8">
    <title> 도시 정보 </title>
    <style>
    body{
      background-color: Lavender
    }
    </style>
</head>

<body>
    <h2><a href="index.php">MAIN PAGE</a> | 도시 정보 </h2>
    <table border="1">
        <tr>
            <th>도시 이름</th>
            <th>나라 코드</th>
            <th>지역</th>
        </tr>
        <?=$name_info?>
    </table>
</body>

</html>
