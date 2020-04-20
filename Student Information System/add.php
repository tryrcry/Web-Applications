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
        <style>
            
        </style>
        </script>
    </head>
    <body>
        <form action="" method="POST" id="searchForm">
            <nav class="navbar navbar-expand-sm">
                <a href="#" class="navbar-brand"><img src="student.png" width="35px"></a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="add.php" class="nav-link active"><strong>Add</strong></a>
                    </li>
                    <li class="nav-item">
                        <a href="update.php" class="nav-link"><strong>Update</strong></a>
                    </li>
                    <li class="nav-item">
                        <a href="delete.php" class="nav-link"><strong>Delete</strong></a>
                    </li>
                    <li class="nav-item">
                        <a href="report.php" class="nav-link"><strong>Report</strong></a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                            <div class="input-group">
                                <input type="text" required name="find" class="form-control" placeholder="Register Number">
                                <div class="input-group-append"> 
                                    <button class="btn but" name="search" type="submit" value="search">Search</button>
                                </div>
                            </div>
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
        <form action="addValue.php" method="POST" enctype="multipart/form-data">
            <div class="container-fluid">
                <div class="row justify-content-center mt-2">
                    <div class="col-sm-2 mt-1"><label>Name</label></div>
                    <div class="col-sm-2 mt-1"><input type="text" required class="form-control" name="fname" placeholder="First Name"/></div>
                    <div class="col-sm-2 mt-1"><input type="text" class="form-control" name="lname" placeholder="Last Name"/></div> 
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-sm-2 mt-1"><label>Father/Gaurdian</label></div>
                    <div class="col-sm-2 mt-1"><input type="text" required class="form-control" name="ffname" id="fname" placeholder="First Name"/></div>
                    <div class="col-sm-2 mt-1"><input type="text"  class="form-control" name="flname" placeholder="Last Name"/></div> 
                </div> 
                <div class="row justify-content-center mt-3">
                    <div class="col-sm-2 mt-1"><label>Mother/Gaurdian</label></div>
                    <div class="col-sm-2 mt-1"><input type="text" required class="form-control" name="mfname" placeholder="First Name"/></div>
                    <div class="col-sm-2 mt-1"><input type="text"  class="form-control" name="mlname" placeholder="Last Name"/></div> 
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-sm-2 mt-1"><label>Contact Number</label></div>
                    <div class="col-sm-2 mt-1"><input type="text" required class="form-control" name="cno1" placeholder="Number 1"/></div>
                    <div class="col-sm-2 mt-1"><input type="text" required class="form-control" name="cno2" placeholder="Number 2"/></div> 
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-sm-2 mt-1"><label>Address</label></div>
                    <div class="col-sm-4 mt-1"><input type="text" required class="form-control" name="address" placeholder="Address"/></div> 
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-sm-2 mt-1"><label>DOB</label></div>
                    <div class="col-sm-2 mt-1"><input type="date" required class="form-control" name="dob"/></div>
                    <div class="col-sm-2 mt-1"><label for="fname">Gender&nbsp&nbsp<input required name="gen" id="gen" type="radio" value="M"/> Male &nbsp;<input id="gen" required type="radio" name="gen"/> Female</label></div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-sm-1 mt-1"><label>Email Id</label></div>
                    <div class="col-sm-2 mt-1"><input type="email" required class="form-control" name="mail" placeholder="Email Id"/></div>
                    <div class="col-sm-1 mt-1"><label>Register No</label></div>
                    <div class="col-sm-2 mt-1"><input type="text" required class="form-control" name="reg" placeholder="Reg No"/></div> 
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-sm-1 mt-1"><label>Department</label></div>
                    <div class="col-sm-2 mt-1">
                        <select class="form-control" required name="dept">
                        <option value="">Select dept</option>
                        <option value="CSE">CSE</option>
                        <option value="IT">IT</option>
                        </select>
                    </div>
                    <div class="col-sm-1 mt-1"><label>Year of Graduation</label></div>
                    <div class="col-sm-2 mt-1"><input type="date" required class="form-control" name="grad"/></div> 
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-sm-1 mt-1"><label>1st Year Marks </label></div>
                    <div class="col-sm-1 mt-1"><input type="text" class="form-control" required name="s1" placeholder="Sem 1"/></div>
                    <div class="col-sm-1 mt-1"><input type="text" class="form-control" required name="s2" placeholder="Sem 2"/></div>
                    <div class="col-sm-1 mt-1"><label>2nd Year Marks </label></div> 
                    <div class="col-sm-1 mt-1"><input type="text" class="form-control" required name="s3" placeholder="Sem 3"/></div>
                    <div class="col-sm-1 mt-1"><input type="text" class="form-control" required name="s4" placeholder="Sem 4"/></div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-sm-1 mt-1"><label>3rd Year Marks </label></div>
                    <div class="col-sm-1 mt-1"><input type="text" class="form-control" required name="s5" placeholder="Sem 5"/></div>
                    <div class="col-sm-1 mt-1"><input type="text" class="form-control" required name="s6" placeholder="Sem 6"/></div>
                    <div class="col-sm-1 mt-1"><label>4th Year Marks </label></div> 
                    <div class="col-sm-1 mt-1"><input type="text" class="form-control" required name="s7" placeholder="Sem 7"/></div>
                    <div class="col-sm-1 mt-1"><input type="text" class="form-control" required name="s8" placeholder="Sem 8"/></div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-sm-2 mt-1"><label>Image</label></div>
                    <div class="col-sm-4 mt-1"><input type="file" class="form-control" required name="pic"/></div> 
                </div>
                <div class="row justify-content-center mt-4">
                    <div class="col-sm-2 mt-1"><button type="submit" class="form-control sub">Submit</button></div>
                    <div class="col-sm-2 mt-1"><button type="reset" class="form-control sub">Reset</button></div> 
                </div>
            </div>
        </form>
    </body>
</html>