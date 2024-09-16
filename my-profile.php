<?php include 'menubar.inc.php' ;
$username=$_SESSION['username'];
$sql="SELECT * from users u where u.username='$username'";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($res)){
    $name=$row['username'];
    $email=$row['email'];
    $mblno=$row['mblno'];
    $dlno=$row['dl_no'];
    $date=$row['date'];
    $image=$row['image'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

</head>
<body >
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 mt-5 pt-5">
                <div class="row z-depth-3">
                    <div class="col-sm-4 rounded-left" style="background-color: #E05A47;">
                        <div class="card-block text-center text-white">
                            <!-- Display user profile image -->
                            <?php if($image): ?>
                                <img src="images/<?php echo $image; ?>" class="rounded-circle" style="width: 150px; height: 150px;" alt="User Profile Image">
                            <?php else: ?>
                                <img src="images/Home/logouser.png" class="rounded-circle" style="width: 150px; height: 150px;" alt="Default User Profile Image">
                            <?php endif; ?>
                            <h2 class="font-weight-bold text-white mt-4 "><?php echo $name ?></h2>
                            <i class="far fa-edit fa-2x mb-4"></i>
                            <a href="updateprofile.php" style="color:white">Update Profile</a><br><br>
                            <a href="deleteprofile.php" style="color:white">Delete Profile</a><br><br>
                        </div>
                    </div>
                    <div class="col-sm-8 bg-white rounded-right">
                        <h2 class="mt-3 text-center">Profile Information</h2>
                        <!-- Display user information -->
                        <!-- Add other user details display here -->
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="font-weight-bold">Email:</p>
                                <h6 class=" text-muted"><?php echo $email ?></h6>
                            </div>
                            <div class="col-sm-6">
                                <p class="font-weight-bold">Phone:</p>
                                <h6 class="text-muted"><?php echo $mblno ?></h6>
                            </div><br>
                            <div class="col-sm-6">
                                <p class="font-weight-bold">Driving License Number:</p>
                                <h6 class=" text-muted"><?php echo $dlno ?></h6>
                            </div>
                            <div class="col-sm-6">
                                <p class="font-weight-bold">Date Of Registration:</p>
                                <h6 class=" text-muted"><?php echo $date ?></h6>
                            </div>
                        </div>
                       
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>

<?php include 'footer.inc.php' ?>
</body>
</html>
