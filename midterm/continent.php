<?php
    $link = mysqli_connect("localhost", "root", "rootroot", "world");
    $filtered = array(
        'area' => mysqli_real_escape_string($link, $_POST['area']),
        'Continent' =>mysqli_real_escape_string($link, $_POST['Continent'])
    );

    $query = "SELECT Name
        FROM country
        where Continent = '{$filtered['Continent']}'
        group by name
        ";




    $result = mysqli_query($link, $query);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($link));
        exit();
    }


    $nation_info = '';
       while ($row = mysqli_fetch_array($result)) {
          $nation_info .= '<tr>';
          $nation_info .= '<td>'.$row['Name'].'</td>';
          $nation_info .= '<td><a href="country_inform.php?name='.$row['Name'].'">공식 언어 조회</a></td>';
          $nation_info .= '</tr>';
       }


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset-"uft-8">
    <title> 조회 시스템 </title>
    <style>
    body{
      background-color: Lavender
    }
    </style>
</head>

<body>
    <h2><a href="index.php">메인</a> | 대륙 별 나라</h2>
    <table border="1">
        <tr>
            <th>나라 이름</th>
            <th>정보 조회</th>
        </tr>
        <?=$nation_info?>
    </table>
</body>

</html>
