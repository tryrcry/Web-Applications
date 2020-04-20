<?php
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$dbuser="root";
$dbpass="";
$dbserver="localhost";
$dbname="student information system";
$conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
if(!$conn)
{
    die("Database Connection Failed");
}
$sql="SELECT * FROM staff WHERE uname='$uname' and pass='$pass'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$count=mysqli_num_rows($result);
if($count)
{
echo '<script>alert("Successfully logged in")</script>';
include('add.php');
}
else
{
echo '<script>alert("Login failed")</script>';
if($_POST['submit']=='home')
include('home.html');
if($_POST['submit']=='about')
include('about.html');
if($_POST['submit']=='contact')
include('contact.html');
}
mysqli_close($conn);
?>