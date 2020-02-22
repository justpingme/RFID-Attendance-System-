<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/function.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>

<?php confirm_logged_in(); ?>
<?php
$data=$_SESSION['email'];
$query = "SELECT name FROM users WHERE email='$data' ";
$result = mysqli_query($connection,$query);
$row = mysqli_fetch_assoc($result);
$name= $row['name'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>User Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'> 
    <link rel="stylesheet" href="user.css" media="screen, projection">
<link rel="stylesheet" href="index121.css" type="text/css"/>
    <script type="text/javascript" src="scripts/canvasXpress.min.js"></script>
<script type="text/javascript" src="scripts/canvasXpress-helper.js"></script>
    
    </head>
<body >
  <div class="pimg1">
    <div class="ptext">
      <span class="border">
          <div  id="menu-nav">
    <div id="navigation-bar">
    <nav>
    <ul> 
      <li style="float: left;"><a href="../index.php"><i class="fa fa-home"></i><span>Home</span></a></li>
        <li style="float: right;"><a href="../action/logout.php"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>
      <li style="float: right; t;"><a href="#"><i class="fa fa-user"></i><span><?php echo $name; ?></span>
          </a></li>
        
        </ul>
        </nav>
</div>
    </div>
          <div class="head">
          <h3>Today Attendance <?php echo date("d/m/d");?></h3>
          </div>
          <article id="mainContent">
              <div class="wrapper">
  <table  id="courses" class="second-menu" >
  <caption>
   All Days Attendance
  </caption>
  <thead>
    <tr>
     <th >rfid number</th>   
     <th>date</th>   
      <th>java</th>
      <th>javalab</th>
      <th>dsinc</th>
      <th>dslab</th>
        <th>pe</th>
        <th>os</th>
        <th>linuxlab</th>
        <th>kanadakali</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <td colspan="25">Move to Next Page<a href="#">-></a></td>
    </tr>
  </tfoot>
  <tbody>
    
      <?php
     $mail= $_SESSION['email'];
      
 $query ="SELECT a.rfid_no,a.date,a.java,a.javalab,a.dsinc,a.dslab,a.linuxlab,a.os,a.pe,a.kanadakali FROM attendance a JOIN joinusers_atten s ON a.rfid_no=s.rfid_no JOIN users v ON s.email=v.email  WHERE s.email='$mail' GROUP BY a.date DESC";
$result = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($result)){
    echo "<ul class=\"menu\">\n";
    echo"<tr>";
    echo"<td>".$row['rfid_no']."</td>";
    echo"<td>".$row['date']."</td>";
    echo"<td>".$row['java']."</td>";
    echo"<td>".$row['javalab']."</td>";
    echo"<td>".$row['dsinc']."</td>";
    echo"<td>".$row['dslab']."</td>";
    echo"<td>".$row['pe']."</td>";
    echo"<td>".$row['os']."</td>";
    echo"<td>".$row['linuxlab']."</td>";
    echo"<td>".$row['kanadakali']."</td>";
    echo"</tr>";
    echo "</ul>";
} 
    
      
      ?>
      
    </tbody>   
    </table>
              </div>
</article>
          <aside>
  <section class="academic info">
    <h2>Academic</h2>
    <ul>
 <li><a href="../amchart/chart.php" title="status">Status</a></li>
      <li><a href="#" title="require attendance">Require Attendance</a></li>
      <li><a href="#" title="total"> Toatal Attendance</a></li>
        <li><script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Attendance', 'Require in 4th Semester'],
          ['Java',  11],
          ['Java Lab',  2],
          ['Linux',  2],
          ['Datastructure in C', 2],
          ['DSIN-C', 7]
        ]);

        var options = {
          title: 'Attendance Require',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
            <div id="piechart_3d" style="width: 300px; height: 300px; "></div></li>
      <li><a href="#" title="Academic calendar">Academic Calendar</a></li>
    </ul>
  </section>
   
</aside>

          

          
          
      </span>
        
    </div>
 

     </div>
   <?php include("../includes/layouts/footer.php"); ?>
    
   