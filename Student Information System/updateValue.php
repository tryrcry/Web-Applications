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
$reg=$_POST['reg'];
$dept=$_POST['dept'];
$grad=$_POST['grad'];
$s1=$_POST['s1'];
$s2=$_POST['s2'];
$s3=$_POST['s3'];
$s4=$_POST['s4'];
$s5=$_POST['s5'];
$s6=$_POST['s6'];
$s7=$_POST['s7'];
$s8=$_POST['s8'];
$cgp=(float)($s1+$s2+$s3+$s4+$s5+$s6+$s7+$s8)/8;
$file=addslashes(file_get_contents($_FILES['pic']['tmp_name']));
$dbuser="root";
$dbpass="";
$dbserver="localhost";
$dbname="student information system";
$conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
if(!$conn)
{
    die("Database Connection Failed");
}
$sql="UPDATE student SET fname='$fname',lname='$lname',ffname='$ffname',flname='$flname',mfname='$mfname',mlname='$mlname',cno1='$cno1',cno2='$cno2',address='$address',dob='$dob',gen='$gen',email='$mail',regno='$reg',dept='$dept',grad='$grad',s1='$s1',s2='$s2',s3='$s3',s4='$s4',s5='$s5',s6='$s6',s7='$s7',s8='$s8',cgp='$cgp',image='$file' WHERE regno='$reg'";
if(mysqli_query($conn,$sql))
{
    include('update.php');
    echo '<script>alert("Values updated successfully")</script>';
}
else
{
echo "Records can't be updated";
include('update.php');
}
mysqli_close($conn);
?>