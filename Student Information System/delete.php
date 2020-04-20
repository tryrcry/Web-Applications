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
                        <a href="delete.php" class="nav-link active"><strong>Delete</strong></a>
                    </li>
                    <li class="nav-item">
                        <a href="report.php" class="nav-link"><strong>Report</strong></a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <form class="form-inline" action="">
                            <div class="input-group">
                                <input type="text" name="find" required placeholder="Register Number" class="form-control" id="">
                                <div class="input-group-append">
                                    <button class="btn but" name="search" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a href="home.html" class="nav-link"><i class="fa fa-arrow-circle-left"><strong> Logout</strong></i></a>
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
        <form action="" method="POST">
            <div class="container-fluid mt-5">
                <div class="row justify-content-center mt-3">
                    <div class="col-sm-3 mt-2"><label for="">Register Number</label></div>
                    <div class="col-sm-3 mt-2"><input type="text" required name="val" class="form-control" placeholder="Reg No"></div>
                </div>
                <div class="row justify-content-center mt-4">
                    <div class="col-sm-2 mt-2"><button type="submit" name="delete" class="form-control sub">Submit</button></div>
                    <div class="col-sm-2 mt-2"><button type="reset" class="form-control sub">Reset</button></div>
                </div>
            </div>
            <?php
if(isset($_POST['delete']))
{
    $search=$_POST['val'];
    $dbuser="root";
    $dbpass="";
    $dbserver="localhost";
    $dbname="student information system";
    $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
    if(!$conn)
        {
            die("Database Connection Failed");
        }
    $sql="DELETE FROM student WHERE regno='$search'";
    $tempQuery="SELECT * FROM student WHERE regno='$search'";
    $tempResult=mysqli_query($conn,$tempQuery);
    $count=mysqli_num_rows($tempResult);
    if($count>0)
    {
        mysqli_query($conn,$sql);
        echo '<script>alert("Deleted Successfully")</script>';
    }
    else
    echo '<script>alert("Record not found, cannot be deleted")</script>';
}
?>
        </form>
    </body>
</html>