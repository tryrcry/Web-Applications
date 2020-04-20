<html>
    <head>
        <title>Student Information System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="home.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script type="text/javascript">
        function preback(){window.history.forward();}
        setTimeout("preback()",0);
        window.onunload=function(){null};
        </script>
    </head>
    <body>
        <form action="" method="POST">
            <nav class="navbar navbar-expand-sm">
                <a href="#" class="navbar-brand"><img src="student.png" width="35px"></a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="add.php" class="nav-link"><strong>Add</strong></a>
                    </li>
                    <li class="nav-item">
                        <a href="update.php" class="nav-link"><strong>Update</strong></a>
                    </li>
                    <li class="nav-item">
                        <a href="delete.php" class="nav-link"><strong>Delete</strong></a>
                    </li>
                    <li class="nav-item">
                        <a href="report.php" class="nav-link active"><strong>Report</strong></a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                            <div class="input-group">
                                <input type="text" name="find" required placeholder="Register Number" class="form-control" id="">
                                <div class="input-group-append">
                                    <button class="btn but" name="search" type="submit">Search</button>
                                </div>
                            </div>
                    </li>
                    <li class="nav-item">
                        <a href="home.html" class="nav-link"><i class="fa fa-arrow-circle-left"><strong> Login</strong></i></a>
                    </li>
                </ul>
            </nav>
<?php
if(isset($_POST['search']))
{
    $search=$_POST['find'];
    $dbuser="root";
    $dbpass="";
    $dbserver="localhost";
    $dbname="student information system";
    $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
    if(!$conn)
        {
            die("Database Connection Failed");
        }
    $sql="SELECT * FROM student WHERE regno='$search'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    $count=mysqli_num_rows($result);
    if($count>0)
    {
    echo '<div class="container">
    <div class="alert alert-dark alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <div class="row justify-content-center"><div class="col-sm-1"><img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="100px" height="100px"></div></div>
    <div class="row justify-content-center"><div class="col-sm-2">Name :</div><div class="col-sm-3">'.$row['fname'].' '.$row['lname'].'</div></div>
    <div class="row justify-content-center"><div class="col-sm-2">Father Name :</div><div class="col-sm-3">'.$row['ffname'].' '.$row['flname'].'</div></div>
    <div class="row justify-content-center"><div class="col-sm-2">Mother Name :</div><div class="col-sm-3">'.$row['mfname'].' '.$row['mlname'].'</div></div>
    <div class="row justify-content-center"><div class="col-sm-2">Contact No :</div><div class="col-sm-3">'.$row['cno1'].' / '.$row['cno2'].'</div></div>
    <div class="row justify-content-center"><div class="col-sm-2">Address :</div><div class="col-sm-3">'.$row['address'].'</div></div>
    <div class="row justify-content-center"><div class="col-sm-2">DOB :</div><div class="col-sm-3">'.$row['dob'].'</div></div>
    <div class="row justify-content-center"><div class="col-sm-2">Gender :</div><div class="col-sm-3">'.$row['gen'].'</div></div>
    <div class="row justify-content-center"><div class="col-sm-2">Email Id :</div><div class="col-sm-3">'.$row['email'].'</div></div>
    <div class="row justify-content-center"><div class="col-sm-2">Register No. :</div><div class="col-sm-3">'.$row['regno'].'</div></div>
    <div class="row justify-content-center"><div class="col-sm-2">Department :</div><div class="col-sm-3">'.$row['dept'].'</div></div>
    <div class="row justify-content-center"><div class="col-sm-2">Year of Graduation :</div><div class="col-sm-3">'.$row['grad'].'</div></div>
    <div class="row justify-content-center"><div class="col-sm-2">Sem wise gpa :</div><div class="col-sm-3">I='.$row['s1'].', II='.$row['s2'].', III='.$row['s3'].', IV='.$row['s4'].', V='.$row['s5'].', VI='.$row['s6'].', VII='.$row['s7'].', VIII='.$row['s8'].'</div></div>
    <div class="row justify-content-center"><div class="col-sm-2">CGPA :</div><div class="col-sm-3">'.$row['cgp'].'</div></div>
    </div>
    </div>';}
    else
    {
        echo '<script>alert("Invalid register no")</script>';
    }
}
?>
</form>
<div class="scrollmenu" style="overflow:auto;">
<table class="table table-bordered">
    <thead class="thead-light">
    <tr><th>Image</th><th>Name</th><th>Father Name</th><th>Mother Name</th><th>Address</th>
    <th>Contact No.1</th><th>Contact No.2</th><th>DOB</th><th>Gender</th>
    <th>Mail Id</th><th>Register No.</th><th>Department</th><th>Graduation Year</th>
    <th>Sem-1</th><th>Sem-2</th><th>Sem-3</th><th>Sem-4</th><th>Sem-5</th>
    <th>Sem-6</th><th>Sem-7</th><th>Sem-8</th><th>CGPA</th>
    </tr>
    <tbody>
<?php
$dbuser="root";
$dbpass="";
$dbserver="localhost";
$dbname="student information system";
$conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
if(!$conn)
    {
        die("Database Connection Failed");
    }
$sql="SELECT * FROM student";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{?>
<tr><td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="50px" height="50px">';?></td>
<td><?php echo $row['fname']." ".$row['lname'];?></td>
<td><?php echo $row['ffname']." ".$row['flname'];?></td>
<td><?php echo $row['mfname']." ".$row['mlname'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['cno1'];?></td>
<td><?php echo $row['cno2'];?></td>
<td><?php echo $row['dob'];?></td>
<td><?php echo $row['gen'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['regno'];?></td>
<td><?php echo $row['dept'];?></td>
<td><?php echo $row['grad'];?></td>
<td><?php echo $row['s1'];?></td>
<td><?php echo $row['s2'];?></td>
<td><?php echo $row['s3'];?></td>
<td><?php echo $row['s4'];?></td>
<td><?php echo $row['s5'];?></td>
<td><?php echo $row['s6'];?></td>
<td><?php echo $row['s7'];?></td>
<td><?php echo $row['s8'];?></td>
<td><?php echo $row['cgp'];?></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
    </body>
</html>