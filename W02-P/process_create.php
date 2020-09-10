<?php
 $link = mysqli_connect('localhost', 'root', 'rootroot', 'dbp');

 $query = "
 INSERT INTO linefriends
  (character, birthday)
  VALUES (
    '$_POST['character']',
    '$_POST['birthday']'
    )
 ";

 $result = mysqli_query($link, $query);

 echo $result;

 if($result == false){
   echo '저장하는 과정에서 문제 발생!';
   error_log(mysqli_error($link));
 } else {
   echo 'DB에 추가 성공!' <a href="index.php">돌아가기</a>;
 }
 ?>
