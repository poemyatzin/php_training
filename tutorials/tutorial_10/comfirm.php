<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Confirm Password Page</title>
</head>
<body>
  <h1>Change Password Page</h1>
  <table>
    <form action="" method="post">
      <tr>
        <td>
          <label>Password</label>
        </td>
        <td><input type="password" name="txtpwd"></td>
      </tr>
      <tr>
        <td>
          <label>Comfirm Password</label>
        </td>
        <td><input type="password" name="txtcomfirmpwd"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="btnchange" value="Change">
      </td>
      </tr>
    </form>
  </table>
  <?php
  include 'connection.php';
  $new_pwd=$_POST['txtpwd'];
  $comfirm_pwd=$_POST['txtcomfirmpwd'];

  if (isset($_POST['btnchange'])) {
    if ($new_pwd == $comfirm_pwd) {
      $sql = "UPDATE tbl_account SET acc_pwd='$comfirm_pwd' WHERE acc_id=1";

      if ($conn->query($sql) === TRUE) {
        echo "Change successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
  }
}
  ?>
</body>
</html>