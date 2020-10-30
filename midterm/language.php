<?php
    $link = mysqli_connect('localhost', 'root', 'rootroot', 'world');
    if (isset($_GET['name'])) {
        $name = mysqli_real_escape_string($link, $_GET['name']);
    } else {
        $name = mysqli_real_escape_string($link, $_POST['name']);
    }
    $query = "
    SELECT a.CountryCode, a.Language, b.Name
    FROM countrylanguage a
    inner Join country b ON a.countryCode=b.Code
    WHERE Language = '{$name}'
    ";

    $result = mysqli_query($link, $query);
    $name_info = '';
    while ($row = mysqli_fetch_array($result)) {
        $name_info .= '<tr>';
        $name_info .= '<td>'.$row['CountryCode'].'</td>';
        $name_info .= '<td>'.$row['Name'].'</td>';
        $name_info .= '<td>'.$row['Language'].'</td>';
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
    <h2><a href="index.php">MAIN PAGE</a> | 쓰는 언어 정보 </h2>
    <table border="1">
        <tr>
            <th>국가 코드</th>
            <th>나라 이름</th>
            <th>쓰는 언어</th>
        </tr>
        <?=$name_info?>
    </table>
</body>

</html>
