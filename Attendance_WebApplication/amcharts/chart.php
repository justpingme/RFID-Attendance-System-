<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/function.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>

<html>
  <head>
      <link rel="stylesheet" href="chart.css" media="screen, projection">
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
      
</head>
<body>
    <?php
$data=$_SESSION['email'];

$query = "SELECT name FROM abhi WHERE email='$data' ";
$result = mysqli_query($connection,$query);
$row = mysqli_fetch_assoc($result);
$name= $row['name'];
echo "    <h1>$name</h1>\n";
?>
<div id="chartdiv"></div>
</body>
    <script  src="chart.js"></script>
</html>
