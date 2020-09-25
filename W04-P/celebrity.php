<?php
 $link = mysqli_connect('localhost', 'root', 'rootroot', 'friends');

 $query = "SELECT * FROM celebrity";
 $result = mysqli_query($link, $query);
 $celebrity_info = '';
  while($row = mysqli_fetch_array($result)){
  $filtered = array(
  'id' => htmlspecialchars($row['id']),
  'job' => htmlspecialchars($row['job']),
  'profile' => htmlspecialchars($row['profile'])
  );
  $celebrity_info .= '<tr>';
  $celebrity_info .= '<td>'.$filtered['id'].'</td>';
  $celebrity_info .= '<td>'.$filtered['job'].'</td>';
  $celebrity_info .= '<td>'.$filtered['profile'].'</td>';
  $celebrity_info .= '<td><a href="celebrity.php?id='.$filtered['id'].'">update</a></td>';
  $celebrity_info .= '<td>
    <form action="process_delete_celebrity.php" method="post">
    <input type="hidden" name="id" value="'.$filtered['id'].'">
    <input type="submit" value="delete">
    </form></td>
 ';
  $celebrity_info .= '</tr>';
  };

  $escaped = array(
   'job' => '',
   'profile' => ''
   );
   $label_submit = 'Create profile';
   $form_action = 'process_create_celebrity.php';
   $form_id = '';

   if(isset($_GET['id'])) {
     $filtered_id = mysqli_real_escape_string($link, $_GET['id']);
     settype($filtered_id, 'integer');
     $query = "SELECT * FROM celebrity WHERE id = {$filtered_id}";
     $result = mysqli_query($link, $query);
     $row = mysqli_fetch_array($result);
     $escaped['job'] = htmlspecialchars($row['job']);
     $escaped['profile'] = htmlspecialchars($row['profile']);
    $label_submit = 'Update profile';
    $form_action = 'process_update_celebrity.php';
    $form_id = '<input type="hidden" name="id" value="'.$_GET['id'].'">';
    };
?>




<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title>BROWN & FRIENDS</title>
 </head>
 <body>
   <h1><a href="index.php">BROWN AND FRIENDS</a></h1>
   <p><a href="index.php">linefriends</a></p>
 <table border="1">
   <tr>
     <th>id</th>
     <th>job</th>
     <th>profile</th>
     <th>update</th>
     <th>delete</th>
   </tr>
 <?= $celebrity_info ?>
</table>
<br>
 <form action="<?= $form_action ?>" method="post">
<?=$form_id?>
 <label for="fname">job:</label><br>
 <input type="text" id="job" name="job" placeholder="job" value="<?=$escaped['job']?>"><br>
 <label for="lname">profile:</label><br>
 <input type="text" id="profile" name="profile" placeholder="profile" value="<?=$escaped['profile']?>"><br><br>
 <input type="submit" value="<?=$label_submit?>">
 </form>
 </body>
</html>
