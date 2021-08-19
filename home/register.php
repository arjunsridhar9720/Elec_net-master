<?php
$servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name= "logreg";
$db_host="localhost";
$con= mysqli_connect($db_host,$db_username,$db_password,$db_name);

///***DATES***//
$d=date("Y-m-d");
$query="select rstart,rend from dates";
$res=$con->query($query);
$r=$res->fetch_assoc();
$rstart=$r["rstart"];
$rend=$r["rend"];
if($rstart<$d && $d<$rend)
{

}
else
{
	echo "'<script type='text/javascript'>alert('The Registration is YET TO START or Already Over !!');</script>'";
	header("refresh:1;url=index.php");
}
///***DATES***//
?>
 
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" href="Resource/Base/style.css" type="text/css">
	
     <style>
	 .ldc{
	 position:absolute;
	 top:305px;
	 left:185px;
	
	 }
	 
	 .rdv
	 {
	 
	 position:absolute;
	 top:305px;	 
	 left:665px;
	 }
     
	 .picc{
	 position:absolute;
	 z-index:1;
	 top:450px;
	 left:190px;
	 
	  }
	 
	 
	  
	 .picv{
	 position:absolute;
	 z-index:1;
	 top:450px;
	 left:668px;
	
	 }
     .bttonc{
  
	 position:absolute;
	 z-index:4;
	 background-color:green;
	
	 }
	 
	  .bttonv{

	 position:absolute;
	 z-index:4;
	 background-color:green;
	
	 }
   
   
    </style>	
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
						<li class="selected">
							<a href="register.php" id="menu2">register</a>
						</li>
						<li>
							<a href="vote.php" id="menu3">vote</a>
						</li>
						<li>
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
						
							<div  class="ldc" style="width:405px;"><br>
                             <h3><center>CANDIDATE</center></h3>
							 <a href="javascript:window.open('Resource/Base/c.html','_blank','toolbar=no,width=900,height=800');" style="text-decoration:none"><h2>Please read the instructions before registering as a CANDIDATE</h2></a>
							    <div >
								<ul>
								<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

									<li>
										<div class="bttonc"><a href="Resource/Base/registerc.php">
										<button type="submit"  class="figure" style="width:300px;background-color:#4CAF50;">REGISTER NOW</button></a>
										</div>
									</li>
								</ul></div>			                        
							</div>
							
							<div class="picc">
							
							<img src="Resource/Base/register/ec2.jpg"  height="336" width="420">
							</div>
							
							<div class="picv">
							
							<img src="Resource/Base/register/v2.jpg"  height="336" width="420">
							</div>

							
								
							<div class="rdv" style="width:405px">
							<br>
								<h3><center>VOTER</center></h3>
								 <a href="javascript:window.open('Resource/Base/v.html','_blank','toolbar=no,width=900,height=800');" style="text-decoration:none"><h2>Please read the instructions before registering as a VOTER</h2></a>
							    <div><ul>
								<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
								
								<li>
										<div class="bttonv" style="background-color:blue">
										<a href="Resource/Base/registerv.php"><button type="submit" class="figure" 
										style="width:300px;background-color:#4CAF50;">REGISTER NOW</button></a>
										</div>
								</li>
								</ul>
								
							</div>
						</div>
						
					
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				</div>
			
			</div>
		</div>
		
	</div>
</body>
</html>