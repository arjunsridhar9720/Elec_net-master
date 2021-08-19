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
    else
    {
     }	
	session_start();
	if(!($_SESSION["email"]))
		header("url:../..vote.php");
	$email=$_SESSION["email"];
	$fname=$_SESSION["fname"];
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Voting</title>
	<link rel="stylesheet" href="../Base/style.css" type="text/css">
    <style>
	hr {
  border: 0;
  height: 0;
  box-shadow: 0 0 10px 1px white;
}
	</style>
</head>
<body>
	<div id="background">
		<div id="header">
			<div>
				<div>
					<center><div class="logo"><img src="../Base/logo.png" alt=""></div></center>
					<ul>
						<li>
							<a href="../../index.php" id="menu1">home</a>
						</li>
						<li>
							<a href="../../register.php" id="menu2">register</a>
						</li>
						<li class="selected">
							<a href="../../vote.php" id="menu3">vote</a>
						</li>
						<li>
							<a href="../../announcements.php" id="menu4">announcements</a>
						</li>
						<li>
							<a href="../../about.php" id="menu5">about</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="body">
			<div>
				<div>
					<div class="vote">
						<div class="content">
							<center>
								<br>
								<div class= "main1">  
									<center>
										<h1>WELCOME <?php echo $fname; ?></h1>
										
										<hr width=400>
										<br>
										 <h2>
											Select Your Vote
											<br>
											<form name="myform" method="post">
													<?php
														 $sql= "SELECT fname,lname,chno from info";
														 //$cname[10]=NULL;$i=1;
															  if ($result = $con->query($sql)) 
															  {
																
																/* fetch associative array */
															
																while ($row = $result->fetch_assoc())
																	{
																	 //$cname[$i]=$row["fname"]+" "+$row["lname"];
																	 printf ("<br> %s . %s %s<hr width=200>",$row["chno"], $row["fname"],$row["lname"]);
																	 //printf("%s",$cname[$i]);
																	 //$i++;
																	}											
															   }	
														if(isset($_POST['choice']))
														{
															$i=$_POST['choice'];
															//$sname=$cname[$i];
															//echo $sname;
															$vt="update info1 set ch='$i' where email='$email'";
															//$con->query($vt);
															//$vt="update info1 set ch='1' where name='$sname'";
															$con->query($vt);
															echo "'<script type='text/javascript'>alert('Thank You For Voting You will be redirected to home page');</script>'";
															session_destroy();
															header("refresh:1;url=../../index.php");
														}
													?>
											<br>
											UR CHOICE : <input type="text" name="choice"/>
											<input type="submit" value="VOTE">
										</form>	
										 
										 </h2>	
									</center>
								</div>
								
							</div>
						</div>
						<br>
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
		</div>
	</div>
</body>
</html>