<?php
 $link = mysqli_connect('localhost','root','rootroot','friends');
 $filtered = array(
 'job' => mysqli_real_escape_string($link, $_POST['job']),
 'profile' => mysqli_real_escape_string($link, $_POST['profile'])
 );
 $query = "
 INSERT INTO celebrity
 (job, profile)
 VALUES(
 '{$filtered['job']}',
 '{$filtered['profile']}'
 )
 ";
 $result = mysqli_query($link, $query);
 if( $result == false ){
 echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요.';
 error_log(mysqli_error($link));
 } else {
 header('Location: celebrity.php');
 }
?>
