<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];

    require('connect.php');
    $query = "DELETE FROM schools WHERE id = " . $id;
    $result = mysqli_query($connect, $query);

    if($result) {
      header('Location: index.php');
    } else {
      echo "Error deleting record: " . mysqli_error($connect);
    }
  }
?>