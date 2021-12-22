<?php
include "connection.php";
$stu_id = $_GET['student_id'];
$sql = "SELECT * FROM student_db.tbl_student where student_id=$stu_id;";
$records = $conn->query($sql);
$data = mysqli_fetch_array($records);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Form</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="frm-data">
    <h2>Insert Form</h2>
    <form action="" method="post">
      <table>
        <tr>
          <td>Student ID</td>
          <td><input type="text" name="txtid" value="<?php echo $stu_id ?>" disabled></td>
        </tr>
        <tr>
          <td>Student Name</td>
          <td><input type="text" name="txtname" value="<?php echo $data['student_name'] ?>"></td>
        </tr>
        <tr>
          <td>Student Date of Birth</td>
          <td><input type="text" name="txtdob" value="<?php echo $data['student_dob'] ?>"></td>
        </tr>
        <tr>
          <td>Student Phone</td>
          <td><input type="text" name="txtphone" value="<?php echo $data['student_phone'] ?>"></td>
        </tr>
        <tr>
          <td>Student Address</td>
          <td><input type="text" name="txtaddress" value="<?php echo $data['student_address'] ?>"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="btnupdate" value="Update"></td>
        </tr>
      </table>
    </form>
  </div>
  <?php
  include 'connection.php';
  $stu_id = $_GET['student_id'];
  $stu_name = $_POST['txtname'];
  $stu_dob = $_POST['txtdob'];
  $stu_phone = $_POST['txtphone'];
  $stu_address = $_POST['txtaddress'];

  if (isset($_POST['btnupdate'])) {
    $sql = "UPDATE tbl_student SET 
  student_name='$stu_name',student_dob='$stu_dob',
  student_phone='$stu_phone',
  student_address='$stu_address'
  WHERE student_id=$stu_id";

    if ($conn->query($sql) === TRUE) {
      echo "<script>location.href='alldata.php'</script>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
  $conn->close();
  ?>
</body>

</html>