<?php
  $link = mysqli_connect("localhost", "root", "rootroot", "friends");
  $query = "
    INSERT INTO linefriends (
      title,
      description,
      created
    ) VALUE (
      'CHOCO',
      '14th of February',
      now()
      )
    ";

  //echo $query;
  mysqli_query($link, $query);
  if() {
    echo mysqli_error($link);
  }


 ?>
