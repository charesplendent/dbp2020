<?php
 $link = mysqli_connect('localhost','root','rootroot','friends');
 $query = "SELECT * FROM linefriends";
 $result = mysqli_query($link, $query);
 $list ='';
 while ($row = mysqli_fetch_array($result)) {
   $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
 }
 $article = array(
 'title' => 'Who is your favourite??',
 'description' => 'There are eleven CHARACTERS:
  CHOCO, BROWN, PANGYO, CONY, LEONARD, SALLY,
  JESSICA, EDWARD, MOON, JAMES, BOSS'
 );
$update_link = '';
$delete_link = '';
$celebrity ='';


 if( isset($_GET['id'])) {
   $filtered_id = mysqli_real_escape_string($link, $_GET['id']);
   $query = "SELECT * FROM linefriends LEFT JOIN celebrity ON linefriends.celeb = celebrity.id WHERE linefriends.id={$filtered_id}";
   $result = mysqli_query($link, $query);
   $row = mysqli_fetch_array($result);
   $article['title'] = htmlspecialchars($row['title']);
   $article['description'] = htmlspecialchars($row['description']);
   $article['job'] = htmlspecialchars($row['job']);

    $update_link = '<a href="update.php?id='.$_GET['id'].'">update</a>';
    $delete_link = '  <form action="process_delete.php" method="post">
      <input type="hidden" name="id" value="'.$_GET['id'].'">
      <input type="submit" value="delete">
      </form>';
    $celebrity = "<p>by {$article['name']}</p>";

  }
 ?>


<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title>Brown and Friends</title>
   <style>
      h1 {color: cyan; }
      h2 {color: green; }
   </style>
 </head>
 <body>
   <h1>><a href="index.php">Brown and Friends</a></h1>
   <a href="celebrity.php">celebrity</a>
   <ol><?= $list ?></ol>
  <a href="create.php">create</a>
  <?= $update_link?>
  <?= $delete_link?>
  <h2><?= $article['title'] ?></h2>
   <?= $article['description'] ?>
   <? = $celebrity ?>
 </body>
</html>
