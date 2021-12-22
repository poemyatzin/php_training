<!DOCTYPE html>
<html>

<head>
  <title>Display all records from Database</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="frm-all">
    <h2>Student Information</h2>

    <table>
      <tr>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Student DOB</th>
        <th>Student Phone</th>
        <th>Student Address</th>
      </tr>

      <?php

      include "connection.php";
      $sql = "SELECT * FROM student_db.tbl_student;";
      $records = $conn->query($sql);

      while ($data = mysqli_fetch_array($records)) {
      ?>
        <tr>
          <td><?php echo $data['student_id']; ?></td>
          <td><?php echo $data['student_name']; ?></td>
          <td><?php echo $data["student_dob"]; ?></td>
          <td><?php echo $data["student_phone"]; ?></td>
          <td><?php echo $data["student_address"]; ?></td>
          <td><a href="updatedata.php?student_id=<?php echo $data['student_id']; ?>">
              <button>Edit</button></a></td>
          <td><a href="deletedata.php?student_id=<?php echo $data['student_id']; ?>">
              <button>Delete</button></a></td>
        </tr>
      <?php
      }
      ?>
    </table>
  </div>
</body>

</html>