<?php
$servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name= "logreg";
$db_host="localhost";
$con= mysqli_connect($db_host,$db_username,$db_password,$db_name);

   if (!$con)
    {
    die("Connection failed: " . mysqli_connect_error());
	}
   /* else
    {
     echo "'<h1><b>Connected successfully</b></h1>'";

    }*/
///***DATES***//		
$d=date("Y-m-d");
$query="select * from dates";
$res=$con->query($query);
$r=$res->fetch_assoc();
$rstart=$r["rstart"];
$rend=$r["rend"];

$vstart=$r["vstart"];
$vend=$r["vend"];

$res=$r["res"];
///***DATES***//	
?>	
<html>
<head>
	
	<link rel="stylesheet" href="Resource/Base/style.css" type="text/css">
</head>
<body>
	<div id="background">
		<div id="header">
			<div>
				<div>
					<a href="index.php" class="logo"><img src="Resource/Base/logo.png" alt=""></a>
					<ul>
						<li>
							<a href="index.php" id="menu1">home</a>
						</li>
						<li>
							<a href="register.php" id="menu2">register</a>
						</li>
						<li>
							<a href="vote.php" id="menu3">vote</a>
						</li>
						<li class="selected">
							<a href="announcements.php" id="menu4">announcements</a>
						</li>
						<li>
							<a href="about.php" id="menu5">about</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="body">
			<div>
				<div>
					<div class="media">
						<div class="content">
							<ul>
								<li>
									<h3><center>Dates</h3>
									<div><center>
									<br><br>
										<table  border="9" cellpadding="10" cellspacing="10">
											<th>EVENT        </th> <th> START (yyyy-mm-dd)    </th> <th> END (yyyy-mm-dd)    </th>
											<tr align=center>
											<td>REGISTRATION </td> <td> <?php echo $rstart;?> </td> <td> <?php echo $rend;?> </td></tr>
											<tr align=center>
											<td>VOTING </td> <td> <?php echo $vstart;?> </td> <td> <?php echo $vend;?> </td></tr>
											<tr align=center>
											<td>RESULT </td> <td colspan="2" align=center> <?php echo $res;?> </td>
										</table>
									<br>
									</div>
								</li>
								<li>
									<h3><center>Result</h3>
									<div><br><br>
									
									<?php 
									 if($d<$res)
										 echo "<h1><center> STAY TUNED FOR RESULT </h1>";
									 else
									 {
									?>	 
										<center><table border="4" cellpadding="10" cellspacing="10">
			<th>NO.</th>
			<th>CANDIDATE NAME</th>
			<th>VOTES </th>
			<?php
			 $q="SELECT fname,lname,chno FROM info";
			 if($result=$con->query($q))
			 {
				 while($row=$result->fetch_assoc())
				 {
					 ?><tr>
						 <td><?php echo $row["chno"]; ?></td>
						 <td><?php echo $row["fname"]." ".$row["lname"]; ?></td>
						 <td><?php 
						 $chno=$row["chno"];
						 $v="SELECT count(ch) from info1 where ch='$chno'";
						 $vc=$con->query($v);
						 $vcount=$vc->fetch_assoc();
						 $votes=$vcount["count(ch)"];
						 echo $votes; ?></td>
						 
					 </tr>
					 <?php
				 }
			 }
			 
			 ?>
			 </table>
			 <h2> THE WINNER OF ELECTION IS : <?php 
			 $q1='"create or replace view try as select ch,count(ch) as "votes" from info1 group by ch"'; 
			 $q2="select fname,lname from info where chno in (SELECT ch from try where votes=(select max(votes) from try))";
			 $r=$con->query($q1);
			 $res=$con->query($q2);
			 while ($final=$res->fetch_assoc())
			 {
			 	 echo "<br><h1>".$final["fname"]." ".$final["lname"];
			 }
									 ?> </h2><?php } ?>
									</div>
								</li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			
		</div>
	</div>
</body>
</html>