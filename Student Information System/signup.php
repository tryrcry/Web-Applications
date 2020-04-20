<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$ffname=$_POST['ffname'];
$flname=$_POST['flname'];
$mfname=$_POST['mfname'];
$mlname=$_POST['mlname'];
$cno1=$_POST['cno1'];
$cno2=$_POST['cno2'];
$address=$_POST['address'];
$dob=$_POST['dob'];
$gen=$_POST['gen'];
$mail=$_POST['mail'];
$dept=$_POST['dept'];
$qual=$_POST['qual'];
$uname=$_POST['uname'];
$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
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
$sql="INSERT INTO staff (fname,lname,ffname,flname,mfname,mlname,cno1,cno2,address,dob,gen,email,dept,qual,uname,pass,image) VALUES ('$fname','$lname','$ffname','$flname','$mfname','$mlname','$cno1','$cno2','$address','$dob','$gen','$mail','$dept','$qual','$uname','$pass','$image')";
if(mysqli_query($conn,$sql))
{
echo '<script>alert("Values added successfully")</script>';
if($_POST['submit']=='home')
include('home.html');
if($_POST['submit']=='about')
include('about.html');
if($_POST['submit']=='contact')
include('contact.html');
}
else
{
echo '<script>alert("Records cant be added")</script>';
if($_POST['submit']=='home')
include('home.html');
if($_POST['submit']=='about')
include('about.html');
if($_POST['submit']=='contact')
include('contact.html');
}
mysqli_close($conn);
?>