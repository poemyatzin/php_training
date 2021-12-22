<?php
include 'connection.php';

$stu_id = $_GET['student_id'];


if (isset($_POST['btndelete'])) {
  $sql = "DELETE from tbl_student WHERE student_id=$stu_id";

  if ($conn->query($sql) === TRUE) {
    echo "<script>location.href='alldata.php'</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete Form</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="frm-data">
    <h2>Delete Form</h2>
    <form action="" method="post">
      <table>
        <tr>
          <td>Student ID</td>
          <td><input type="text" name="txtid" value="<?php echo $stu_id ?>" disabled></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="btndelete" value="Delete"></td>
        </tr>
      </table>
    </form>
  </div>
</body>

</html>