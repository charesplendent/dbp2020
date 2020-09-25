<?php
 $link = mysqli_connect('localhost', 'root', 'rootroot', 'friends');
 settype($_POST['id'], 'integer');
 $filtered = array(
  'id' => mysqli_real_escape_string($link, $_POST['id'])
 );

 $query = "
  DELETE
    FROM linefriends
    WHERE id = '{$filtered['id']}'
 ";


 $result = mysqli_query($link, $query);


 if($result == false){
   echo '삭제하는 과정에서 문제 발생!';
   error_log(mysqli_error($link));
 } else {
   echo '삭제 성공! <a href="index.php">돌아가기</a>';
 }
 ?>
