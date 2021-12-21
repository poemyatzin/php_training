<!DOCTYPE html>
<html>

<head>
  <title>Tutorial 07</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="frm">
    <form action="" method="post" method="post">
      <h1>QR Tutorial</h1>
      <label>Enter QR Text</label> <input type="text" name="qrtext">
      <button type="submit" name="btnsave">save</button>
    </form>
  </div>

  <?php

  //load the library
  include 'phpqrcode/qrlib.php';

  //data to be stored in qr
  $text = $_POST['qrtext'];

  $folder_name = "images";
  $photo_name = "qrtest.png";
  if (!file_exists($output_dir . $folder_name)) {
    @mkdir($output_dir . $folder_name, 0777);
  }
  //file path
  $file = "$folder_name/$photo_name";

  //other parameters
  $ecc = 'H';
  $pixel_size = 10;
  $frame_size = 5;

  // Generates QR Code and Save as PNG
  QRcode::png($text, $file, $ecc, $pixel_size, $frame_size);

  if (isset($_POST['btnsave'])) {
    echo "<div class='frm'><h2> QR code </h2><img src='" . $file . "'></div>";
  }

  ?>

</body>

</html>