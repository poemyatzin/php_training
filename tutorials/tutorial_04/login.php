<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial_4 Login Page</title>
  <style>
    table {
      margin: 0 auto;
      width: 300px;
    }

    h1 {
      text-align: center;
    }
  </style>
</head>

<body>
  <h1>Login Page</h1>
  <table>
    <form action="" method="post">
      <tr>
        <td>
          <label>User Name</label>
        </td>
        <td><input type="text" name="txtusername"></td>
      </tr>
      <tr>
        <td>
          <label>Password</label>
        </td>
        <td><input type="password" name="txtpwd"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="btnsubmit" value="Login"></td>
      </tr>
    </form>
  </table>
  <?php
  session_start();
  $_SESSION['uu'];
  $uname = "admin";
  $pwd = "admin";
  if (isset($_POST['btnsubmit'])) {
    if (($_POST['txtusername'] == $uname) && ($_POST['txtpwd'] == $pwd)) {
      $_SESSION['uu'] = $uname;
      echo "<script>location.href='home.php'</script>";
    } else {
      echo "Check your user name  and Password ";
    }
  }
  ?>
</body>
</html>