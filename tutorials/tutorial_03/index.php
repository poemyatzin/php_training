<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial 3</title>
</head>

<body>
  <form action="" method="post">
    <label>Choose Date of Birth</label>
    <input type="date" name="txtdate">
    <input type="submit" name="btnsubmit" value="Calculate Age">
  </form>
  <?php
  if (isset($_POST['btnsubmit'])) {
    $dateofbirth = $_POST['txtdate'];
    $today = date("y-m-d");
    $diff = date_diff(date_create($dateofbirth), date_create($today));
    echo "Age is " . $diff->format('%y');
  }
  ?>
</body>

</html>