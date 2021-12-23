<?php
include 'connection.php';
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Student Name','student Mark'],
         <?php
         $sql = "SELECT student_id,student_name,student_mark FROM tbl_student;";
         $fire = $conn->query($sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['student_name']."',".$result['student_mark']."],";
          }
         ?>
        ]);

        var options = {
          chart: {
            title: 'Student Information',
            subtitle: 'Student Age',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="barchart_material" style="width: 700px; height: 500px;"></div>
  </body>
</html>