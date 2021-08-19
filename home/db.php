<?php
$servername = "localhost";
$db_username = "root";
$db_password = "";
$db_host="localhost";

$conn = mysqli_connect($db_host,$db_username,$db_password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "CREATE DATABASE logreg";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully
	";
} else {
    echo "Error creating database: " . $conn->error;
}
mysqli_select_db($conn,'logreg');

$sqltc="CREATE table info (fname varchar(20),lname varchar(20),email varchar(100),gr varchar(20),mno varchar(20),ano varchar(20),
id varchar(100),chno varchar(100))";
if ($conn->query($sqltc) === TRUE) {
    echo "Table info created successfully
	";
} else {
    echo "Error creating table: " . $conn->error;
}

$sqltv="CREATE table info1(fname varchar(20),lname varchar(20),gr varchar(20),email varchar(100),mno varchar(20),ano varchar(20),
id varchar(100))";
if ($conn->query($sqltv) === TRUE) {
    echo "Table info1 created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sqlta="CREATE table dates (rstart varchar(20),rend varchar(20),vstart varchar(20),vend varchar(100),res varchar(20))";
if ($conn->query($sqlta) === TRUE) {
    echo "Table dates created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

?>