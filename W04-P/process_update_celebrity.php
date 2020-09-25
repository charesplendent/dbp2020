<?php
 $link = mysqli_connect('localhost', 'root', 'rootroot', 'friends');
 settype($_POST['id'], 'integer');
 $filtered = array(
 'id' => mysqli_real_escape_string($link, $_POST['id']),
 'job' => mysqli_real_escape_string($link, $_POST['job']),
 'profile' => mysqli_real_escape_string($link, $_POST['profile'])
 );
 $query = "
 UPDATE celebrity
 SET
 job = '{$filtered['job']}',
 profile = '{$filtered['profile']}'
 WHERE
 id = '{$filtered['id']}'
 ";
 $result = mysqli_query($link, $query);
 if($result == false){
 echo '수정하는 과정에서 문제가 생겼습니다. 관리자에게
문의해주세요';
 error_log(mysqli_error($link));
 } else {
 header('Location:celebrity.php?id='.$filtered['id']);
 }
?>
