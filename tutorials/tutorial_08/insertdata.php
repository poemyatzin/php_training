<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Form</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="frm-data">
    <h2>Insert Form</h2>
    <form action="" method="post">
      <table>
        <tr>
          <td>Student Name</td>
          <td><input type="text" name="txtname"></td>
        </tr>
        <tr>
          <td>Student Age</td>
          <td><input type="text" name="txtdob"></td>
        </tr>
        <tr>
          <td>Student Phone</td>
          <td><input type="text" name="txtphone"></td>
        </tr>
        <tr>
          <td>Student Address</td>
          <td><input type="text" name="txtaddress"></td>
        </tr>
        <tr>
          <td>Student Mark</td>
          <td><input type="text" name="txtmark"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="btnsubmit" value="Save Data"></td>
        </tr>
      </table>
    </form>
  </div>
  <?php
  include 'connection.php';
  $stu_name = $_POST['txtname'];
  $stu_dob = $_POST['txtdob'];
  $stu_phone = $_POST['txtphone'];
  $stu_address = $_POST['txtaddress'];
  $stu_mark = $_POST['txtmark'];

  if (isset($_POST['btnsubmit'])) {
    $sql = "INSERT INTO tbl_student(student_name, student_dob,student_phone,student_address,student_mark)   
  VALUES ('$stu_name','$stu_dob','$stu_phone','$stu_address','$stu_mark');";

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