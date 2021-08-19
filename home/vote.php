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
     //echo "'<h1><b>Connected successfully</b></h1>'";

    }

///***DATES***//	
$d=date("Y-m-d");
$query="select vstart,vend from dates";
$res=$con->query($query);
$r=$res->fetch_assoc();
$rstart=$r["vstart"];
$rend=$r["vend"];
if($rstart<$d && $d<$rend)
{

}
else
{
	echo "'<script type='text/javascript'>alert('VOTING is YET TO START or Already Over !!');</script>'";
	header("refresh:1;url=index.php");
}
   
///***DATES***//   
	if(isset($_POST['email']) && isset($_POST['pw']))
	{
		$email = $_POST['email'];
		$pw= $_POST['pw'];
		session_destroy();
		session_start();
		$_SESSION["email"]=$email;
        $sql= "SELECT fname,email,id from info1 WHERE email='$email' AND id='$pw'";
		
        $query_run=$con->query($sql);
	   
		if($query_run->num_rows==0)
		{
	    echo "'<h2><b><br>Invalid Email or Password !!!</b></h2>'";
		}
		
		
        else
        {
		$r=$query_run->fetch_assoc();
		$_SESSION["fname"]=$r['fname'];
	    header("Location:Resource/Vote/voting.php");
	    }
	}   
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Voting</title>
	<link rel="stylesheet" href="Resource/Base/style.css" type="text/css">
    <style>
	.main1
	{
	font-family:Georgia;
	color: white;
	font-size: 35px;
	font-weight: 40px;
	background-color: grey;
	width: 500px;
	border:5px black dashed;
	opacity:0.8;
	text-height:20px;
        font-variant:small-caps; 
	}
	input[type=text]:focus,[type=password]:focus
{
    border: 2px solid white;
    border-radius: 4px;
    background-color:black;
    color: white;
    font-size:25px;
    font-family:Monotype;
}
input[type=text],[type=password]
{
	font-size:20px;
}

input[type=button], input[type=submit], input[type=reset] {
    background-color: white;
    border: none;
    color: blue;
    padding: 16px 40px;
    text-decoration: ;
    margin: 4px 2px;
    cursor: pointer;
    font-size:30px;
    font-family:Comic Sans MS;
    font-variant:small-caps;
    
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
						<li>
							<a href="register.php" id="menu2">register</a>
						</li>
						<li class="selected">
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
					<div class="vote">
						<div class="content">
							<center>
								<img src="Resource/Vote/vote.png" alt=""/>
								<div class= "main1">  
									<form method="post" name="myform" ><br>
										| Email |<br>
										<input type="text" name="email" placeholder="Username" size="30"/><br><br>
										| Password |<br>
										<input type="password" name="pw" placeholder="Password" size="30"/><br><br>
										<input type="submit" value="Submit"/><br>
										<br>
									</form>
									
								</div>
								<br>
								<a href="register.php"><img src="Resource/Vote/register.png"></a>
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