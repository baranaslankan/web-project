<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Week 5</title>
</head>
<body>
  <?php
    $connect = mysqli_connect('127.0.0.1', 'root', '', 'colors');
    if (!$connect) {
      die("Connection Failed: " . mysqli_connect_error());
    }
    $query = "SELECT * FROM colors";
    $colors = mysqli_query($connect, $query);
    //print_r($colors);
    if($colors) {
        foreach ($colors as $color) {
           echo "<div style='background-color:{$color['Hex']}; width: 100%; height: 15px; text-align: center;'>{$color['Name']}</div>";
        }
    }
  ?>
</body>
</html>
