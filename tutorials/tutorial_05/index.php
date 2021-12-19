<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial_05</title>
</head>

<body>
  <?php
  echo "<h1> 1)Reading Text File</h1>";
  $myfile = fopen("sample.txt", "r") or die("Unable to file");
  echo fread($myfile, filesize("sample.txt"));
  fclose($myfile);
  echo "<hr>";

  //for excel file
  echo "<h1> 2)Reading Excel File</h1>";
  require "lib/vendor/autoload.php";
  $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
  $spreadsheet = $reader->load("sample.xlsx");

  // (B) COUNT NUMBER OF WORKSHEETS
  $allsheets = $spreadsheet->getSheetCount();
  echo "<table border='1'>";

  // (C) LOOP THROUGH ALL WORKSHEETS
  for ($i = 0; $i < $allsheets; $i++) {
    // (C1) GET WORKSHEET
    $worksheet = $spreadsheet->getSheet($i);

    // (C2) LOOP THROUGH ROWS OF CURRENT WORKSHEET
    foreach ($worksheet->getRowIterator() as $row) {
      // (C3) READ CELLS
      echo "<tr>";
      $cellIterator = $row->getCellIterator();
      $cellIterator->setIterateOnlyExistingCells(false);
      foreach ($cellIterator as $cell) {
        echo "<td>" . $cell->getValue() . "</td>";
      }
      echo "</tr>";
    }
  }
  echo "</table>";
  echo "<hr>";
  echo " <h1>Reading Word file </h1>";
  require 'vendor/autoload.php';
  error_reporting(E_ALL ^ E_DEPRECATED);
  $dir = str_replace('\\', '/', __DIR__) . '/';
  $source = $dir . 'sample.docx';
  $phpWord = \PhpOffice\PhpWord\IOFactory::load($source);
  foreach ($phpWord->getSections() as $section) {
    foreach ($section->getElements() as $element) {
      if ($element instanceof \PhpOffice\PhpWord\Element\TextRun) {
        foreach ($element->getElements() as $e) {
          if ($e instanceof \PhpOffice\PhpWord\Element\Text) {
            echo $e->getText();
          }
        }
      }
    }
  }
  echo "<hr>";
  echo "<h1> 2)Reading CSV File</h1>";
  echo "<table border='1'>";
  $start_row = 1;
  if (($csv_file = fopen("sample.csv", "r")) !== FALSE) {
    while (($read_data = fgetcsv($csv_file, 1000, ",")) !== FALSE) {
      $column_count = count($read_data);
      echo "<tr>";
      $start_row++;
      for ($i = 0; $i < $column_count; $i++) {
        echo "<td>" . $read_data[$i] . "</td>";
      }
      echo "</td>";
    }
    fclose($csv_file);
  }

  ?>
</body>

</html>