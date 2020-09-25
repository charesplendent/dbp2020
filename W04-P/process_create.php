<?php
 $link = mysqli_connect('localhost', 'root', 'rootroot', 'friends');

 $filtered = array(
   'title' => mysqli_real_escape_string($link, $_POST['title']),
   'description' => mysqli_real_escape_string($link, $_POST['description']),
   'celeb' => mysqli_real_escape_string($link, $_POST['celeb'])
 );

 $query = "
 INSERT INTO linefriends
  (title, description, created, celeb)
  VALUES (
    '{$_POST['title']}',
    '{$_POST['description']}',
    now()
    '{$filtered['celeb']}'
    )
 ";


 $result = mysqli_query($link, $query);


 if($result == false){
   echo '저장하는 과정에서 문제 발생!';
   error_log(mysqli_error($link));
 } else {
   echo 'DB에 추가 성공! <a href="index.php">돌아가기</a>';
 }
 ?>
