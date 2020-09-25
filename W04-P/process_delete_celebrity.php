
<?php
  $link = mysqli_connect('localhost', 'root', 'rootroot', 'friends');
  settype($_POST['id'], 'integer');
  $filtered = array(
      'id' => mysqli_real_escape_string($link, $_POST['id'])
  );

  $query = "
      DELETE
          FROM celebrity
          WHERE id = {$filtered['id']}
  ";

  $result = mysqli_query($link, $query);
  if($result == false){
      echo '삭제하는 과정에서 문제 발생!';
      error_log(mysqli_error($link));
  } else {
      header('Location: celebrity.php');
  }
?>
