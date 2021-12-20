<!DOCTYPE html>
<html>

<head>
  <title>Tutorial 06</title>
</head>

<body>

  <form action="index.php" method="post" enctype="multipart/form-data" method="post">
    <input type="file" name="photo" />
    <label>Enter Photo Name</label> <input type="text" name="nameofphoto">
    <label>Enter Folder Name</label> <input name="createfolder" type="text">
    <button type="submit">save</button>
  </form>
  <?php
  $name = $_FILES['photo']['name'];
  $tmp = $_FILES['photo']['tmp_name'];
  $type = $_FILES['photo']['type'];

  $folder_name = $_POST['createfolder'];
  $photo_name = $_POST['nameofphoto'];
  if (!file_exists($output_dir . $folder_name)) {
    @mkdir($output_dir . $folder_name, 0777);
  }
  if ($type === "image/jpeg" or $type === "image/png" or $type === "image/jpg") {
    move_uploaded_file($tmp, "$folder_name/$photo_name");
  }
  ?>

</body>

</html>