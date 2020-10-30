<?php
    $link = mysqli_connect("localhost", "root", "rootroot", "world");



    $query = "SELECT a.Code, a.Name, a.Continent, b.Language
        FROM country a
        inner JOIN countrylanguage b on a.Code = b.CountryCode
        ";


    $result = mysqli_query($link, $query);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($link));
        exit();
    }


    $info = '';
    while ($row = mysqli_fetch_array($result)) {
        $info .= '<tr>';
        $info .= '<td>'.$row['Code'].'</td>';
        $info .= '<td>'.$row['Name'].'</td>';
        $info .= '<td>'.$row['Continent'].'</td>';
        $info .= '<td>'.$row['Language'].'</td>';
        $info .= '</tr>';
    }


?>

<!DOCTYPE html>
<html>

<head>
    <meta charser-"uft-8">
    <title> 전체 국가 조회 </title>
    <style>
    body{
      background-color: Lavender
    }
    </style>
</head>

<body>
    <h2><a href="index.php">메인</a> | 전체 조회 </h2>
    <table border="1">
        <tr>
            <th>코드</th>
            <th>나라</th>
            <th>대륙</th>
            <th>언어</th>
        </tr>
        <?=$info?>
    </table>
</body>

</html>
