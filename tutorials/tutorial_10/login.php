<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial_10 Login Page</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Login Page</h1>
  <table>
    <form action="" method="post">
      <tr>
        <td>
          <label>User Name</label>
        </td>
        <td><input type="email" name="txtusername"></td>
      </tr>
      <tr>
        <td>
          <label>Password</label>
        </td>
        <td><input type="password" name="txtpwd"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="btnsubmit" value="Login">
        <a href="reset_pwd_mail.php"> reset password</a>
      </td>
      </tr>
    </form>
  </table>
  <?php
  include 'connection.php';
  session_start();
  $_SESSION['email'];

  $sql = "SELECT * FROM student_db.tbl_account;";
      $records = $conn->query($sql);
      $data = mysqli_fetch_array($records);

  if (isset($_POST['btnsubmit'])) {
    if (($_POST['txtusername'] == $data['acc_name']) && ($_POST['txtpwd'] == $data['acc_pwd'])) {
      $_SESSION['email'] = $data['acc_name'];
      echo "<script>location.href='graph.php'</script>";
    } else {
      echo "Check your user name  and Password ";
    }
  }
  ?>
</body>
</html>