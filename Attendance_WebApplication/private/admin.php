<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/function.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php confirm_adminlogged_in(); ?>
<?php confirm_logged_in(); ?>
<?php
$data=$_SESSION['email'];
$query = "SELECT name FROM admin WHERE email='$data' ";
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
  <title>Admin Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'> 
    <link rel="stylesheet" href="admin.css" media="screen, projection">

   
    
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
        <li style="float: right;"><a href="#" onclick="hideandshow('#search-bar')"><i class="fa fa-search"></i><span>Search</span></a></li>
        <li style="float: right;"><a href="../action/logout.php"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>
      <li style="float: right; t;"><a href="#"><i class="fa fa-user"></i><span><?php echo $name; ?></span>
          </a></li>
        
        </ul>
        </nav>
</div>
              <div id="search-bar">
    <form>
      <input type="text" placeholder="Enter your query and hit Enter" />
    </form>
  </div>
    </div>
          <div class="head">
          <h3>Today Attendance <?php echo date("d/m/d");?></h3>
          </div>
          <article id="mainContent">
              
              
              
<?php
              
          $email= $_SESSION['email'];
    $query = "SELECT selopt FROM admin WHERE email='$email' ";
    $result = mysqli_query($connection, $query);
      while($row2 = mysqli_fetch_assoc($result)){         
          $sub = $row2['selopt'];
      }
$query1 = "SELECT DATE(date) as d FROM attendance GROUP BY DATE(date) DESC";
$result1 = mysqli_query($connection,$query1);
while($row1 = mysqli_fetch_assoc($result1)){  
    $d=$row1['d'];
echo "<div class=\"wrapper\">\n";
echo "<div class=\"accordian \">\n";
echo "  <ul class=\"second-menu\">\n";
echo "    <h1 class=\"link\">$d<span class=\"arrow\"></span></h1>\n";   
echo "<ul class=\"menu\">\n";
echo "        <table id=\"courses\" class=\"focus-highlight\">\n";
echo "    <thead>\n";
echo "    				<tr>\n";
echo "						<th>Rfid_no</th>\n";
echo "						<th>Name</th>\n";
echo "						<th>Registration</th>\n";
echo "						<th>$sub</th>\n";
echo "					</tr>\n";
echo "				</thead>\n";  
    
$query2 = "SELECT a.rfid_no,v.name,v.registration,a.$sub as s FROM attendance a JOIN joinusers_atten s ON a.rfid_no=s.rfid_no JOIN users v ON s.email=v.email WHERE DATE(a.date)='$d'";
$result2 = mysqli_query($connection,$query2);
    
while ($row = mysqli_fetch_assoc($result2)){
echo "<tbody>\n";
echo "					<tr>\n";
    
echo "						<td>".$row['rfid_no']."</td>\n";
echo "						<td>".$row['name']."</td>\n";
echo "						<td>".$row['registration']."</td>\n";
echo "						<td>".$row['s']."</td>\n";
    
echo "					</tr>\n";
echo "</tbody>\n";
}
  echo "</table>\n";
echo "  </ul>\n";
echo "    </ul>\n";
echo "</div>\n";
echo "</div>\n";  
}
              

              ?>
				       

                   
</article> 
          <aside>
  <section class="academic info">
    <h2>Academic </h2>
    <ul>
 <li><a href="../amchart/chart.php" title="un">Status</a></li>
      <li><a href="#" title="un">Require Attendance</a></li>
        <li><a href="#" title="G"> Toatal Attendance</a></li>
    </ul>
  </section>
   
</aside>
  </span>    
    </div>
     </div>
    
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script  src="admin.js"></script>
   <?php include("../includes/layouts/footer.php"); ?>
    
   