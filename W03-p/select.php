<?php
 $link = mysqli_connect('localhost', 'root', 'rootroot', 'friends');
 $query = "SELECT * FROM linefriends";
 $result = mysqli_query($link, $query);
 echo '<h1>multi row</h1>';
 while ($row = mysqli_fetch_array($result)) {
   echo '<h2>'.$row['title'].'</h2>';
   echo $row['description'];
 }
 ?>
