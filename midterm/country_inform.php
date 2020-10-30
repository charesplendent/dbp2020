<?php
    $link = mysqli_connect('localhost', 'root', 'rootroot', 'world');
    if (isset($_GET['name'])) {
        $name = mysqli_real_escape_string($link, $_GET['name']);
    } else {
        $name = mysqli_real_escape_string($link, $_POST['name']);
    }
    $query = "
    SELECT a.Name, a.Code, b.Language
    FROM country a inner Join countrylanguage b ON a.Code = b.CountryCode
    WHERE name = '{$name}' and b.IsOfficial ='T'
    ";

    $result = mysqli_query($link, $query);
    $name_info = '';
    while ($row = mysqli_fetch_array($result)) {
        $name_info .= '<tr>';
        $name_info .= '<td>'.$row['Name'].'</td>';
        $name_info .= '<td>'.$row['Code'].'</td>';
        $name_info .= '<td>'.$row['Language'].'</td>';
        $name_info .= '</tr>';
    }

?>




<!DOCTYPE html>
<html>

<head>
    <meta charser-"uft-8">
    <title> 세부 정보 조회 </title>
    <style>
    body{
      background-color: lightcyan
    }
    </style>
</head>

<body>
    <h2><a href="index.php">메인</a> | 공식 언어 </h2>
    <table border="1">
        <tr>
            <th>나라</th>
            <th>code</th>
            <th>언어</th>
        </tr>
        <?=$name_info?>
    </table>
</body>

</html>
