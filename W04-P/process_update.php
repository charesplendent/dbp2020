<?php
 $link = mysqli_connect('localhost', 'root', 'rootroot', 'friends');

 $filtered = array(
   'id' => mysqli_real_escape_string($link, $_POST['id']),
   'title' => mysqli_real_escape_string($link, $_POST['title']),
   'description' => mysqli_real_escape_string($link, $_POST['description'])
 );

 $query = "
  UPDATE linefriends
    SET
      title = '{$filtered['title']}',
      description = '{$filtered['description']}'
    WHERE
      id = '{$filtered['id']}'

 ";


 $result = mysqli_query($link, $query);


 if($result == false){
   echo '수정하는 과정에서 문제 발생!';
   error_log(mysqli_error($link));
 } else {
   echo '성공! <a href="index.php">돌아가기</a>';
 }
 ?>
