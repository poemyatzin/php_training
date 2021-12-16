<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial_4 Login Page</title>
  <style>
  </style>
</head>

<body>
  <form action="login.php">
    <?php
    session_start();
    echo "<h2>This is Home Page</h2>";
    echo "This is your username " . $_SESSION['uu'] . "<br>";
    session_destroy();
    ?>
    <input type="submit" name="btnlogout" value="Logout">
  </form>
</body>

</html>