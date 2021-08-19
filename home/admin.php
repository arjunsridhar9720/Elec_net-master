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
	if(isset($_POST["rstart"]) && isset($_POST["rend"]) && isset($_POST["vstart"]) && isset($_POST["vend"]) && isset($_POST["res"]))
	{
		$a=$_POST["rstart"];
		$b=$_POST["rend"];
		$c=$_POST["vstart"];
		$d=$_POST["vend"];
		$e=$_POST["res"];
		if(($a<$b) && ($b<$c) && ($c<$d) && ($d<$e))
		{	
			$erase="truncate dates";
			$con->query($erase);
			$query="INSERT INTO dates values('$a','$b','$c','$d','$e')";
			if($con->query($query))
			{
				echo "SET SUCCESSFULL";
			}
		}
		else
			echo "PLEASE SET CORRECT DATES !!";
	}
?>	
<html>
<head>
<?php echo date("m/d/Y");?>
<title> ADMIN MENU </title>
</head>
<body>
<br>
<br>
<h1>
	DATES
	<hr>
</h1>
<h2>
<form method="post">
 Registration
 <br>
 START <input type="date" name="rstart">
 <br>
 END <input type="date" name="rend">
 <br>
 <hr>
  VOTING
 <br>
 START <input type="date" name="vstart">
 <br>
 END <input type="date" name="vend">
 <br>
 <hr>
 RESULT DATE : <input type="date" name="res">
 <br>
 <hr>
 <input type=submit value="SUBMIT">
 </form>
 </h2>
 </body>
 </html>