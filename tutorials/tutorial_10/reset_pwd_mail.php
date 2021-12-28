<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial_10 Reset Page</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Reset Password to Mail Page</h1>
  <table>
    <form action="sendmail.php" method="post">
      <tr>
        <td>
          <label>Email</label>
        </td>
        <td><input type="email" name="txtemail" value="<?php echo $_SESSION['email']?>"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="btnreset" value="Reset">
      </td>
      </tr>
    </form>
  </table>