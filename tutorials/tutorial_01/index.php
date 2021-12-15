<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial_01_chessboard</title>
  <style>
    table {
      width: 400px;
      height: 400px;
      border: 1px solid black;
    }

    .even {
      background-color: white;
      color: black;
    }

    .odd {
      background-color: black;
    }
  </style>
</head>

<body>
  <table>
    <?php
    for ($i = 1; $i <= 8; $i++) {
      echo "<tr>";
      for ($j = 1; $j <= 8; $j++) {
        if (($i + $j) % 2 == 0) {
          echo "<td class='even'></td>";
        } else {
          echo "<td class='odd'></td>";
        }
      }
      echo "</tr>";
    }
    ?>
  </table>
</body>A
</html>